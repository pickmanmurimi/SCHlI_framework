<?php
/**
 * @author: pick
 * Date: 9/28/2017
 * Time: 10:11 PM
 */
/*
* |--------------------------------------------------------------------
* | Here lets define all the constants we need fore the system
* |this help to avoid rewriting the urls and other basic requirements
* |idea got from Jones Baraza - ISVIPI
* |-------------------------------------------------------------------
*/

/*the trim variable holds the highest length
 *of the basename of our url
*/

define('SCHlI_APP' , PATH . 'App' . DIRECTORY_SEPARATOR);
//config
define('SCHlI_CONFIG_URL', PATH . 'config' . DIRECTORY_SEPARATOR);
//sessions
define('SCHlI_SESSIONS', SCHlI_APP . 'sessions' . DIRECTORY_SEPARATOR);
//routes
define('SCHlI_ROUTES_URL', PATH .  'routes' . DIRECTORY_SEPARATOR);
// controller
define('SCHlI_CONTROLLERS', SCHlI_APP . 'controllers' . DIRECTORY_SEPARATOR);
//models
define('SCHlI_MODELS', SCHlI_APP . 'models' . DIRECTORY_SEPARATOR);
//services
define('SCHlI_SERVICES', SCHlI_APP . 'services' . DIRECTORY_SEPARATOR);
// vendor
define('SCHlI_VENDOR', URL_ROOT . 'vendor' . DIRECTORY_SEPARATOR );
// framework
define('SCHlI_FRAMEWORK', PATH. 'framework' . DIRECTORY_SEPARATOR );
// libs
define('SCHlI_FRAMEWORK_LIBS', SCHlI_FRAMEWORK . 'libs' . DIRECTORY_SEPARATOR);

// storage
define('SCHlI_STORAGE', PATH . 'storage' . DIRECTORY_SEPARATOR );
// public
define('SCHlI_PUBLIC', PATH . 'public' . DIRECTORY_SEPARATOR);
// public_relative_url
define('SCHlI_PUBLIC_rl', URL_ROOT . 'public' . DIRECTORY_SEPARATOR);


//handler
define('SCHlI_DATA_PROCESSORS' , SCHlI_APP . 'dataProcessors' .DIRECTORY_SEPARATOR);
define('SCHlI_HANDLER', SCHlI_APP . 'handler' . DIRECTORY_SEPARATOR);
//resources
define('SCHlI_RESOURCES', PATH . 'resources' . DIRECTORY_SEPARATOR);
//view resources----------------------
define('SCHlI_VIEWRES', URL_ROOT . 'resources' . DIRECTORY_SEPARATOR );
define('SCHlI_VIEWRES_ASSETS', SCHlI_VIEWRES . 'assets' . DIRECTORY_SEPARATOR);
//------------------------------------
define('SCHlI_TEMPLATES', SCHlI_RESOURCES . 'views' . DIRECTORY_SEPARATOR);
define('SCHlI_CLIENT_VIEWS', SCHlI_RESOURCES . 'views' . DIRECTORY_SEPARATOR . 'client' . DIRECTORY_SEPARATOR );
define('SCHlI_ADMIN_VIEWS', SCHlI_RESOURCES . 'views' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR );
define('SCHlI_ASSETS', SCHlI_RESOURCES . 'assets' . DIRECTORY_SEPARATOR);
