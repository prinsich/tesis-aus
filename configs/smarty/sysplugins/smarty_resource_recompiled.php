<?php
/**
 * Smarty Resource Plugin.
 *
 * @author     Rodney Rehm
 */

/**
 * Smarty Resource Plugin
 * Base implementation for resource plugins that don't compile cache.
 */
abstract class Smarty_Resource_Recompiled extends Smarty_Resource
{
    /**
     * populate Compiled Object with compiled filepath.
     *
     * @param Smarty_Template_Compiled $compiled  compiled object
     * @param Smarty_Internal_Template $_template template object
     */
    public function populateCompiledFilepath(Smarty_Template_Compiled $compiled, Smarty_Internal_Template $_template)
    {
        $compiled->filepath = false;
        $compiled->timestamp = false;
        $compiled->exists = false;
    }
}
