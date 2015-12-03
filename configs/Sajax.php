<?php	
if (!isset($SAJAX_INCLUDED))
{
	/**
	 *  BACKWARD COMPATIBILITY
	 */
	$GLOBALS['sajax_version'] = '0.14';	
	$GLOBALS['sajax_debug_mode'] = 0;
	$GLOBALS['sajax_export_list'] = array();
	$GLOBALS['sajax_request_type'] = 'GET';
	$GLOBALS['sajax_remote_uri'] = $_SERVER['REQUEST_URI'];
	$GLOBALS['sajax_failure_redirect'] = '';

	function sajax_init() {	Sajax::Sajax(); }
	function sajax_get_my_uri() { return Sajax::Sajax()->GetRemoteURI(); }
	function sajax_handle_client_request() { Sajax::Sajax()->HandleRequest(); }
	function sajax_get_common_js() { return Sajax::Sajax()->GetClientJS(); }
	function sajax_show_common_js() { echo Sajax::Sajax()->GetClientJS(); }
	function sajax_esc($val) { return Sajax::Sajax()->Escape($val); }
	function sajax_get_one_stub($func_name) { return Sajax::Sajax()->GetStubJS($func_name); }
	function sajax_show_one_stub($func_name) { echo Sajax::Sajax()->GetStubJS($func_name); }
	function sajax_export() { $args = func_get_args(); call_user_func_array(array(Sajax::Sajax(), 'Export'), $args); }
	function sajax_get_javascript() { Sajax::Sajax()->EnableLegacyJS(); return Sajax::Sajax()->GetJS(); }
	function sajax_show_javascript($renderScriptTag = false) { Sajax::Sajax()->EnableLegacyJS(); Sajax::Sajax()->ExportBlockJS(); }


	/**
	 *  Sajax Singleton Implementation.
	 */
	final class Sajax
	{
		private static $Sajax = null;
		
		/**
		 * Hopefully helpful information to include in responses.
		 */
		private $DebugMessages = array();
		
		/**
		 * Export the legacy x_ type JavaScript methods?
		 */
		private $ExportLegacyJS = false;

		/**
		 * A list of 'mapped services' in the form of Service => URI
		 */
		private $MappedExports = array();

		/**
		 * Additional JavaScript blocks we'll render script include tags for.
		 */
		private $Scripts = array();

		/**
		 *  Additional inline JavaScript blocks to render in HEAD.
		 */
		private $ScriptBlocks = array();

		/**
		 * Construct the Sajax object.
		 */
		private function __construct()
		{
			$this->Initialize();
		}
		
		/**
		 * Add a debug message to be included in response.
		 */
		public function AddDebugMessage($msg = '')
		{
			if(strlen($msg) > 0)
				$this->DebugMessages[] = $msg;
		}
		
		/**
		 * Used internally to add an export.
		 */
		private function AddExport($export, $uri = null)
		{
			global $sajax_export_list;
			
			if(is_null($uri))
			{
				$this->AddDebugMessage("Added $export to list of exports.");
				$sajax_export_list[] = $export;
			}
			else
				$this->MappedExports[$export] = $uri;
		}
		
		/**
		 * Add a block of JavaScript to render when the main client script is sent
		 * via ExportBlockJS().
		 */
		public function AddScriptBlock($block)
		{
			$this->ScriptBlocks[] = $block;
		}
		
		/**
		 * Add additional externally-referenced JavaScript <script src="...">
		 * blocks when ExportIncludeJS() is called.
		 */
		public function AddScriptReference($script)
		{
			$this->AddDebugMessage("Added $script to list of external JS references.");
			$this->Scripts[] = $script;
		}
		
		/**
		 * Escape a string.  Is this still needed?
		 */
		public function Escape($var = '')
		{
			$val = str_replace("\\", "\\\\", $val);
			$val = str_replace("\r", "\\r", $val);
			$val = str_replace("\n", "\\n", $val);
			$val = str_replace("'", "\\'", $val);
			return str_replace('"', '\\"', $val);
		}
		
		/**
		 * If set to true, this will add JavaScript alerts() to help you 
		 * troubleshoot your SAJAX code.
		 */
		public function EnableDebug($enabled = false)
		{
			$GLOBALS['sajax_debug_mode'] = $enabled;
		}
		
		/**
		 * Set this to true if you want to export legacy x_ stubs
		 */
		public function EnableLegacyJS($flag = true)
		{
			if(is_bool($flag))
				$this->ExportLegacyJS = $flag;
		}

		/**
		 * Called to export/expose a callable method to the client.  May be
		 * a combination of the follow:
		 * 
		 * object - All methods with prefix 'Sajax' will be exported.
		 * callback - (Obj, MethodName) will be exported as if Obj::MethodName.
		 * string - Export either a function or object method.
		 */
		public function Export()
		{
			$args = func_get_args();
			array_unshift($args, null);
			call_user_func_array(array($this, 'ExportMapped'), $args);
		}
		
		/**
		 * Allows you to map an alternate URI to a set of Exported methods
		 * in order to span implementation across multiple servers/services.
		 */
		public function ExportMapped()
		{
			$n = func_num_args();
			$uri = func_get_arg(0);
			for ($i = 1; $i < $n; $i++) 
			{
				$fname = func_get_arg($i);
				if(is_object($fname))
				{
					$cn = get_class($fname);
					
					// Export all methods prefixed with Sajax
					$flist = array_filter(
						get_class_methods($fname),
						array(Sajax::Sajax(), 'IsSajaxMethod'));
					if(method_exists($fname, 'GetSajaxExportList'))
					{
						$exports = $fname->GetSajaxExportList();
						if(is_array($exports) && count($exports) > 0)
							$flist = array_merge($flist, $exports);
					}

					if(count($flist) == 0)
						$this->AddDebugMessage("Class '$cn' was exported but contained no Sajax methods.");
						
					foreach($flist as $func_name)
					{
						$this->AddExport("$cn::$func_name", $uri);
					}
				}
				elseif(is_string($fname))
				{
					$this->AddExport($fname, $uri);
				}
				elseif(is_array($fname) && count($fname) == 2)
				{
					$this->AddExport(get_class($fname[0])."::$fname[1]", $uri);
				}
			}
		}
		
		/**
		 * Exports the JavaScript to the client.
		 */
		public function ExportBlockJS($renderScriptTag = false)
		{
			if (isset($this->ScriptDisplayed)) 
				return;
			ob_start();
			if($renderScriptTag)
				print "\n<script type=\"text/javascript\">\n";
			echo $this->GetJS();
			if($renderScriptTag)
				print "\n</script>\n";
			$buffer = ob_get_clean();
			echo $buffer;
			$this->ScriptDisplayed = true;
		}
		
		/**
		 * Creates a JavaScript include tag to include the exported script.
		 */
		public function ExportIncludeJS()
		{
			$uri = $this->GetClientScriptURI();
			print "\n\t\t<script type=\"text/javascript\" src=\"$uri\"></script>\n";
			foreach($this->Scripts as $script)
			{
				print "\n\t\t<script type=\"text/javascript\" src=\"$script\"></script>\n";
			}
		}
		
		/**
		 * Returns all of the JavaScript stubs for the exported methods.
		 */
		public function GetAllStubJS()
		{
			global $sajax_export_list;
			
			ob_start();
			foreach($sajax_export_list as $func_name)
			{
				echo $this->GetStubJS($func_name);
			}
			return ob_get_clean();
		}
		
		/**
		 * Renders the main JavasScript content to be used by the client as a string.
		 */	
		public function GetClientJS()
		{
			global $sajax_debug_mode;
			global $sajax_request_type;
			global $sajax_remote_uri;
			global $sajax_failure_redirect;
			
			$mappings = $this->GetServiceMapping();
	
			$t = strtoupper($sajax_request_type);
			if ($t != "" && $t != "GET" && $t != "POST") 
				return "// Invalid type: $t.. \n\n";
			
			ob_start();
	?>
// remote scripting library
// (c) copyright 2005 modernmethod, inc
var sajax = {
	debugMode : <?php echo $sajax_debug_mode ? "true" : "false"; ?>,
	failureRedirect : "<?php echo $sajax_failure_redirect; ?>",
	requests : new Array(),
	requestType : "<?php echo $t; ?>",
	targetId : "",
	version : '0.14',

	addEventHandler : function(target, eventType, handler)
	{
		if (target.addEventListener)
		{ 
			target.addEventListener(eventType, handler, false);
		}
		else if (target.attachEvent)
		{
			target.attachEvent("on" + eventType, handler);
		}
		else
		{
			target["on" + eventType] = handler;
		}
	},
	debug:function(text)
	{
		if (sajax.debugMode)
			alert(text);
	},
	init:function()
	{
		sajax.debug("sajax.init() called.")
		
		var A;
		
		var msxmlhttp = new Array(
			'Msxml2.XMLHTTP.5.0',
			'Msxml2.XMLHTTP.4.0',
			'Msxml2.XMLHTTP.3.0',
			'Msxml2.XMLHTTP',
			'Microsoft.XMLHTTP');
		for (var i = 0; i < msxmlhttp.length; i++)
		{
			try
			{
				A = new ActiveXObject(msxmlhttp[i]);
			}
			catch (e)
			{
				A = null;
			}
		}
	
		if(!A && typeof XMLHttpRequest != 'undefined')
			A = new XMLHttpRequest();
		if (!A)
			sajax.debug('Could not create connection object.');
			return A;
	},
	cancel:function()
	{
		for (var i = 0; i < sajax.requests.length; i++) 
			sajax.requests[i].abort();
	},
	isObject:function(o)
	{
		var test = sajax.getClassName(o); 
		return (typeof o == 'object' && test != 'Array' ? true : false);
	},
	getClassName:function(obj)
	{  
		if (obj && obj.constructor && obj.constructor.toString)
		{  
			var arr = obj.constructor.toString().match(  /function\s*(\w+)/);  
	
			if (arr && arr.length == 2) 
				return arr[1];  
		}
		return 0;  
	},
	doCall:function(func_name, uri, args)
	{
		var i, x, n;
		var uri;
		var post_data;
		var target_id;

		sajax.debug("sajax.doCall(): " + sajax.requestType + "/" + sajax.targetId);

		target_id = sajax.targetId;

		if (typeof(sajax.requestType) == "undefined" || sajax.requestType == "") 
			sajax.requestType = "GET";
	
		if (typeof args == 'object' && args.length > 1)
		{
			//  Lame attempt at JSON encoding
			for (var i=0; i<args.length-1; i++)
			{
				var o = args[i];
				if (sajax.isObject(o))
				{
					var arg = '{';
					var c = 0;
					for(var j=0; j<o.length; j++)
					{
						if (j > 0) arg += ',';
						with(o[j])
						{
							arg += '"'+escape((name.length == 0 ? '_unknown'+j : name))
							    +'":"'+o[j].value+'"';
						}
					}
					arg += '}';
					args[i] = arg;
				}
			}
		}
	
		uri = "<?php echo $sajax_remote_uri; ?>";
		if (sajax.requestType == "GET")
		{
			if (uri.indexOf("?") == -1) 
				uri += "?rs=" + escape(func_name);
			else
				uri += "&rs=" + escape(func_name);
			uri += "&rst=" + escape(sajax.targetId);
			uri += "&rsrnd=" + new Date().getTime();
			
			for (i = 0; i < args.length-1; i++) 
			uri += "&rsargs[]=" + escape(args[i]);
		
			post_data = null;
		} 
		else if (sajax.requestType == "POST")
		{
			post_data = "rs=" + escape(func_name);
			post_data += "&rst=" + escape(sajax.requestId);
			post_data += "&rsrnd=" + new Date().getTime();
		
			for (i = 0; i < args.length-1; i++) 
				post_data = post_data + "&rsargs[]=" + escape(args[i]);
		}
		else
		{
			alert("Illegal request type: " + sajax.requestType);
		}
		
		x = sajax.init();
		if (x == null)
		{
			if (sajax.failureRedirect != "")
			{
				location.href = sajax.failureRedirect;
				return false;
			}
			else
			{
				sajax.debug("NULL sajax object for user agent:\n" + navigator.userAgent);
					return false;
			}
		}
		else
		{
			x.open(sajax.requestType, uri, true);
			// window.open(uri);
			
			sajax.requests[sajax.requests.length] = x;
			
			if (sajax.requestType == "POST")
			{
				x.setRequestHeader("Method", "POST " + uri + " HTTP/1.1");
				x.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			}
	
			x.onreadystatechange = function()
			{
				if (x.readyState != 4) 
					return;
			
				sajax.debug("received " + x.responseText);
	
				var status;
				var data;
				var txt = x.responseText.replace(/^\s*|\s*$/g,"");
				status = txt.charAt(0);
				data = txt.substring(2);
	
				if (status == "")
				{
					// let's just assume this is a pre-response bailout and let it slide for now
				}
				else if (status == "-") 
					alert("Error: " + data);
				else 
				{
					if (target_id != "") 
						document.getElementById(target_id).innerHTML = eval(data);
					else 
					{
						try
						{
							var callback;
							var extra_data = false;
							if (typeof args[args.length-1] == "object") {
								callback = args[args.length-1].callback;
								extra_data = args[args.length-1].extra_data;
							}
							else
							{
								callback = args[args.length-1];
							}
							callback(eval(data), extra_data);
						}
						catch (e)
						{
							sajax.debug("Caught error " + e + ": Could not eval " + data );
						}
					}
				}
			}
		}
		
		sajax.debug(func_name + " uri = " + uri + "/post = " + post_data);
		x.send(post_data);
		sajax.debug(func_name + " waiting..");
		delete x;
		return true;
	},
<?php
			foreach(array_keys($mappings) as  $order => $namespace)
			{
				if(strlen($namespace) == 0)
				{
					foreach($mappings[$namespace] as $mapping)
					{
						printf("\t%s: function() { sajax.doCall('%s', '%s', sajax.%s.arguments); },\n",
							$mapping['function'], 
							$mapping['service'], 
							$mapping['uri'], 
							$mapping['function']);
					}
				}
				else
				{
					echo "\t$namespace : {\n";
					foreach($mappings[$namespace] as $mapping)
					{
						printf("\t\t%s: function() { sajax.doCall('%s', '%s', this.%s.arguments); },\n",
							$mapping['function'], 
							$mapping['service'], 
							$mapping['uri'],
							$mapping['function']);
					}
					echo "\t},\n";
				}
			}
			print "\n};";
	
			return ob_get_clean();
		}
		
		/**
		 * Get a URI path to the exported JavaScript source.
		 */
		public function GetClientScriptURI()
		{
			if(isset($this->ScriptURI))
				return $this->ScriptURI;
			$uri = $this->GetRemoteURI();
			$uri .= (strpos($uri, '?') > 0 ? "&gcs=true" : "?gcs=true");
			return $uri;
		}

		/**
		 * Returns a string representing all the JavaScript to be exported 
		 * to the client.
		 */
		public function GetJS()
		{
			ob_start();
			echo $this->GetClientJS();

			if( $this->ExportLegacyJS )
				echo $this->GetAllStubJS();

			foreach($this->ScriptBlocks as $block)
			{
				print "\n$block\n";
			}
			return ob_get_clean();
		}
		
		private function GetServiceDetails($fname)
		{
			$legacy_name = $func_name = $fname;
			$class_name = '';
			if(($n = strpos($fname, '::')) > 0)
			{
				$class_name = substr($fname, 0, $n);
				$func_name = substr($fname, $n + 2);
				if(preg_match('/^Sajax.+/', $func_name))
				{
					$func_name = substr($func_name, 5);
				}
				$legacy_name = $class_name.'__'.$func_name;
			}
			return array($class_name, $func_name, $legacy_name);
		}
		
		public function GetServiceMapping()
		{
			$uri = $this->GetRemoteURI();
			$result = array();

			foreach($GLOBALS['sajax_export_list'] as $service)
			{
				$data = $this->GetServiceDetails($service);
				if(!isset($result["$data[0]"]))
					$result["$data[0]"] = array();
				$result[$data[0]][] = array(
					'function' => $data[1], 
					'legacy' => $data[2],
					'service' => $service,
					'uri' => $uri);
			}
			foreach($this->MappedExports as $service => $uri)
			{
				$data = $this->GetServiceDetails($service);
				if(!isset($result[$data[0]]))
					$result[$data[0]] = array();
				$result[$data[0]][] = array(
					'function' => $data[1], 
					'legacy' => $data[2],
					'service' => $service,
					'uri' => $uri);
			}
			return $result;
		}

		/**
		 * Renders the JavaScript stub for a single exported method.
		 */	
		public function GetStubJS($fname)
		{
			$data = $this->GetServiceDetails($fname);
			ob_start();	
			printf("\n// Compatibility stub for %s\nfunction x_%s() { sajax.doCall('%s', null, x_%s.arguments); }\n",
				$fname, $data[2], $fname, $data[2]);
			return ob_get_clean ();
		}
		
		/**
		 * Get the URI through which Sajax calls are made.
		 */
		public function GetRemoteURI()
		{
			return (isset($this->RemoteURI) ? $this->RemoteURI :
				(isset($GLOBALS['sajax_remote_uri']) ?
					$GLOBALS['sajax_remote_uri'] :
					$_SERVER['REQUEST_URI']));
		}
		
		/**
		 * Handle a method call for the client.
		 */
		public function HandleRequest()
		{
			global $sajax_export_list, $sajax_debug_mode;
			
			if (!empty($_GET["gcs"]) && empty($_REQUEST["rs"]))
			{
				header ("Content-Type: text/javascript;");
				echo $this->GetJS();
				exit;
			}
				
			if (! empty($_GET["rs"])) 
				$mode = "get";
			
			if (!empty($_POST["rs"]))
				$mode = "post";
			
			if (!isset($mode)) 
				return;
		
			$target = "";
			
			if ($mode == "get") 
			{
				// Bust cache in the head
				header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");    // Date in the past
				header ("Expires: " . gmdate("D, d M Y H:i:s", (time() - 86400)) . " GMT");
				// always modified
				header ("Cache-Control: no-cache, must-revalidate");  // HTTP/1.1
				header ("Pragma: no-cache");                          // HTTP/1.0
				$func_name = $_GET["rs"];
				if (! empty($_GET["rsargs"])) 
					$args = $_GET["rsargs"];
				else
					$args = array();
			}
			else 
			{
				$func_name = $_POST["rs"];
				if (! empty($_POST["rsargs"])) 
					$args = $_POST["rsargs"];
				else
					$args = array();
			}
			
			//  Decode JSON representations of objects.
			if(count($args) > 0)
			{
				for($i=0;$i<count($args); $i++)
				{
					$val = json_decode($args[$i]);
					$type = gettype($val);
					$this->AddDebugMessage("JSON decode: $type: $args[$i]");
					if($type !== 'NULL')
					{
						$args[$i] = $val;
					}
				}
			}
			$func_name = str_replace('__', '::', $func_name);
			if (! in_array($func_name, $sajax_export_list))
			{
				$err = "$func_name not callable; available exports are:";
				if($sajax_debug_mode)
				{
					foreach($sajax_export_list as $func)
						$err .= "\n\t$func";
				}
				$this->ResponseError($err);
			}
			else
			{
				if(strrpos($func_name, '::'))
				{
					$p = strrpos($func_name, '::');
					$ns = substr($func_name, 0, $p);
					$mn = substr($func_name, $p+2);

					$this->AddDebugMessage("Calling object method: $func_name()");
					
					if(!class_exists($ns))
						$this->ResponseError("Class '$ns' not loaded in namespace.");
					else
					{
						$o = new $ns;
						$func_name = array(new $ns, $mn);
						if(!method_exists($o, $mn))
							$this->ResponseError("Method '$mn' not implemented in class '$ns'.");
					}
				}
				if(!is_callable($func_name))
					$this->ResponseError("The method ($func_name) was exported, but was NOT callable; verify that it exists.");

				$result = call_user_func_array($func_name, $args);
				$this->ResponseOK(trim(json_encode($result)));
			}
		}

		/**
		 * Doesn't do much
		 */		
		public function Initialize() {  }

		/**
		 * Used to filter Sajax methods from an object.
		 */
		private function IsSajaxMethod($fname)
		{
			return (preg_match('/^Sajax.+/', $fname) > 0);
		}
		
		/**
		 * Send the response as an error.
		 */
		private function ResponseError($response)
		{
			echo "-:";
			foreach($this->DebugMessages as $msg)
			{
				echo "\n/* $msg */ ";
			}
			echo "\n$response";
			exit();
		}
		
		/**
		 * Send the response as successful.
		 */
		private function ResponseOK($response)
		{
			echo "+:";
			foreach($this->DebugMessages as $msg)
			{
				echo "\n/* $msg */ ";
			}
			echo "\nvar res = " . $response . "; res;";
			exit();
		}
		
		/**
		 * Get the singleton instance.
		 */
		public static function Sajax()
		{
			if(is_null(Sajax::$Sajax) || !isset(Sajax::$Sajax))
				Sajax::$Sajax = new Sajax();
			return Sajax::$Sajax;
		}
		
		/**
		 * Set the URI of the resource to dispatch requests.
		 */
		public function SetRemoteURI($uri = '')
		{
			if(strlen($uri) > 0)
				$this->RemoteURI = $uri;
		}
		
		/**
		 * Allows you to manually set the request type (GET or POST supported)
		 */
		public function SetRequestType($type = 'GET')
		{
			if(in_array($type, array('GET', 'POST')))
				$GLOBALS['sajax_request_type'] = $type;
		}
		
		/**
		 * Set the URI of the JavaScript source for handling client requests.
		 */
		public function SetScriptURI($uri = '')
		{
			$this->AddDebugMessage("Setting alternate JS source: $uri");
			if(strlen($uri))
				$this->ScriptURI = $uri;
		}
	}
	$SAJAX_INCLUDED = 1;
}
?>
