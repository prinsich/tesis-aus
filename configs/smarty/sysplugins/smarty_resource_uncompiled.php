<?php
/**
 * Smarty Resource Plugin.
 *
 * @author     Rodney Rehm
 */

/**
 * Smarty Resource Plugin
 * Base implementation for resource plugins that don't use the compiler.
 */
abstract class Smarty_Resource_Uncompiled extends Smarty_Resource
{
    /**
     * Render and output the template (without using the compiler).
     *
     * @param Smarty_Template_Source   $source    source object
     * @param Smarty_Internal_Template $_template template object
     *
     * @throws SmartyException on failure
     */
    abstract public function renderUncompiled(Smarty_Template_Source $source, Smarty_Internal_Template $_template);

    /**
     * populate compiled object with compiled filepath.
     *
     * @param Smarty_Template_Compiled $compiled  compiled object
     * @param Smarty_Internal_Template $_template template object (is ignored)
     */
    public function populateCompiledFilepath(Smarty_Template_Compiled $compiled, Smarty_Internal_Template $_template)
    {
        $compiled->filepath = false;
        $compiled->timestamp = false;
        $compiled->exists = false;
    }
}
