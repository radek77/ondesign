<?php
/**
* ondesign.pl
*
* @package	MySmarty.php Smarty descendant class
* @author	Radek Lewandowski <rad.ek@interia.pl>
*/

require_once(SMARTY_DIR . 'Smarty.class.php');

class MySmarty extends Smarty
{

	function __construct()
	{
		parent::__construct();

		$this->template_dir		= BASE_PATH . 'smarty' . DIRECTORY_SEPARATOR . 'templates';
		$this->compile_dir		= TEMP_PATH . 'smarty' . DIRECTORY_SEPARATOR . 'templates_c';
		$this->config_dir		= BASE_PATH . 'smarty' . DIRECTORY_SEPARATOR . 'configs';

		$this->compile_check	= true;
		$this->debugging		= false;
		$this->force_compile	= true;
		$this->caching			= false;
		$this->cache_lifetime	= 120;

		$this->assign('images_path',			IMAGES_PATH);
		$this->assign('javascript_path',		JAVASCRIPT_PATH);
		$this->assign('email_address_marek',	EMAIL_ADDRESS_MAREK);

		$this->autoload_filters = array('pre' => array('stripwhitespaces'));
	}

}

?>