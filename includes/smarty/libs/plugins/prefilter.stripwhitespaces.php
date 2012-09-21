<?php
/**
 * Smarty plugin
 *
 * @package Smarty
 * @subpackage PluginsFilter
 */

/**
 * Smarty stripwhitespaces prefilter plugin
 *
 * File:     prefilter.stripwhitespaces.php<br>
 * Type:     prefilter<br>
 * Name:     stripwhitespaces<br>
 * Date:     Sep 20, 2012<br>
 * Purpose:  strip all unneeded whitespaces from source teplates
 * Install:  Drop into the plugin directory, call
 *           <code>$smarty->load_filter('pre','stripwhitespaces');</code>
 *           from application.
 * @author   Radek Lewandowski <rad.ek at interia dot pl>
 * @author Contributions from Lars Noschinski <lars@usenet.noschinski.de>
 * @version  1.0
 * @param string $source input string
 * @param object &$smarty Smarty object
 * @return string filtered output
 */
function smarty_prefilter_stripwhitespaces($source, $smarty)
{
	return
		preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n",
			preg_replace('/^\s+\{block/m', '{block',
				preg_replace('/^\s+\{include/m', '{include',
					preg_replace('/\s+\{\$smarty/m', '{$smarty', $source)
				)
			)
		);
}

?>