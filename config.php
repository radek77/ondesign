<?php
 /**
 * ondesign.pl

 * @package config.php
 */

define('SERVER_TYPE_PRODUCTION',	0);
define('SERVER_TYPE_TEMPORARY',		1);
define('SERVER_TYPE_LOCAL',			2);

define('SERVER_TYPE',				SERVER_TYPE_LOCAL);

define('SITE_DIR_NAME', 'ondesign.pl');

switch (SERVER_TYPE)
{
	case SERVER_TYPE_LOCAL:
	{
		define('SERVER_PATH',		'D:\workspace' . DIRECTORY_SEPARATOR);
		break;
	}
	case SERVER_TYPE_TEMPORARY:
	{
		define('SERVER_PATH',		'' . DIRECTORY_SEPARATOR);
		break;
	}
	case SERVER_TYPE_PRODUCTION:
	{
		break;
	}
}

define('BASE_PATH',			SERVER_PATH . SITE_DIR_NAME . DIRECTORY_SEPARATOR);
define('TEMP_PATH',			SERVER_PATH . 'temp' . DIRECTORY_SEPARATOR . SITE_DIR_NAME . DIRECTORY_SEPARATOR);
define('SMARTY_DIR',		BASE_PATH . 'includes\smarty\libs' . DIRECTORY_SEPARATOR);
define('IMAGES_PATH',		'resources/images/');
define('JAVASCRIPT_PATH',	'resources/js/');



?>