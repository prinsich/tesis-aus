<?php
include_once("classes/class.Alumno.php");
include_once("classes/class.Talleres.php");
include_once("classes/class.Capacitador.php");
require_once('configs/tcpdf/tcpdf.php');

// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {
    
    //Page header
    public function Header() {
        
      //$image_file = "../images/".'top-imprimir-1.jpg';
      //$this->Image($image_file, 20, 10, 170, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
      
      // Set font
      $this->SetFont('helvetica', 'B', 15);

    }

    // Page footer
    public function Footer() {
        
        // Position at 15 mm from bottom
        $this->SetY(-15);
        
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        
        //$this->MultiCell(55, 5, "Fecha de impresion: ".date("d/m/Y g:i a"), 0, 'L', 0, 0, '', '', true);
        //$this->MultiCell(55, 5, "", 0, 'C', 0, 0, '', '', true);
        //$this->MultiCell(75, 5, 'Pagina '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, 'R', 0, 0, '', '', true);
        
    }
}

// create new PDF document
$pdf = new MYPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
//$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetMargins(30, 20, 25);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
//$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$pdf->SetAutoPageBreak(TRUE, 10);

// remove default header
$pdf->setPrintHeader(false);

/////////////////////////////
$id_alumno = $_GET["id_alumno"];
$id_taller = $_GET["id_taller"];
$estado = $_GET["estado"];

$alumno = new Alumno($db, $id_alumno);
$taller = new Talleres($db, $id_taller);

$datos_alumno = $alumno->getAlumno($id_alumno);
$datos_taller = $taller->getTaller($id_taller);

$smarty->assign("nombre_alumno", $datos_alumno["apellido"].", ".$datos_alumno["nombre"]);
$smarty->assign("dni_alumno", $datos_alumno["dni"]);

$smarty->assign("nombre_taller", $datos_taller["nombre"]);

$smarty->assign("estado", $estado);

$capacitador = new Capacitador($db, $datos_taller["id_capacitador"]);

$datos_capacitador = $capacitador->getCapacitador($datos_taller["id_capacitador"]);

$smarty->assign("nombre_capacitador", $datos_capacitador["apellido"].", ".$datos_capacitador["nombre"]);

$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 
//$fecha = $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
$fecha = date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
$smarty->assign("fecha", $fecha);

///////////// genera html en una variabel 
$pdf->AddPage();
// convert TTF font to TCPDF format and store it on the fonts folder
$fontname = $pdf->addTTFfont('configs/tcpdf/fonts_own/BERNHC.TTF', 'TrueTypeUnicode', '', 96);

// use the font
$pdf->SetFont($fontname, '', 14, '', false);

// -- set new background ---
// get the current page break margin
$bMargin = $pdf->getBreakMargin();
// get current auto-page-break mode
$auto_page_break = $pdf->getAutoPageBreak();
// disable auto-page-break
$pdf->SetAutoPageBreak(false, 0);
// set bacground image
$img_file = "images/fondo_certificado.jpg";
$pdf->Image($img_file, 0, 0, 297, 210, '', '', '', false, 300, '', false, false, 0);
// restore auto-page-break status
$pdf->SetAutoPageBreak($auto_page_break, $bMargin);
// set the starting point for the page content
$pdf->setPageMark();

$html = $smarty->fetch("templates/certificados/certificado.tpl");
$pdf->writeHTML($html, true, 0, 0, 0);
$pdf->Output('Certificado_de_'.$datos_alumno["apellido"].'_'.$datos_alumno["nombre"].'.pdf', 'D');

?>