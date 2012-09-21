<?php
/**
* ondesign.pl
*
* @package	ondesign.pl home page
* @author	Radek Lewandowski <rad.ek@interia.pl>
*/

require_once('constants.php');
require_once('config.php');
require_once('MySmarty.php');

$smarty = new MySmarty;

$smarty->display('construction.tpl');
//$smarty->display('index.tpl');


?>