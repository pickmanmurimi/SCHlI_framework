<?php
/**
 * User: pick
 * Date: 10/1/2017
 * Time: 10:11 PM
 */

/*--------------------------------------------
 *  this class handles how urls are processed
 *	the routes service helps in calling of the
 	views
 * preg_split() breaks the url to get the
	parameters
 *--------------------------------------------
 */

	$url = preg_split('~[\\\\/]~', $_SERVER['REQUEST_URI']);
	$acco = array_slice($url, 2);

	$action		= (array_key_exists(1, $acco)) ? $acco[1] : 'index';
	$controller = ($acco[0] != NULL) ? $acco[0] : 'pages';

	$array_size = count($url);
	$params     = [];

	$params = array_slice($url,4,$array_size);

function route($controller,$action,$params)
{
    /*-------------------------------------------------------------
    the fuction routes to different files
    takes the controller, action to be called and the parameters to
    be passed
    include the controller file that matches the controller needed
	---------------------------------------------------------------
	*/

	if (file_exists(SCHlI_CONTROLLERS . $controller . '_controller.php')) 
	{
		
	
    		require_once (SCHlI_CONTROLLERS . $controller. '_controller.php');

    	//create an instance of the needed controller
    	
    		$Class = $controller . 'Controller';

    		$Controller = new $Class($params);

		/*----------------------------------------------------------
		call the needed action
		say home action is called, call will be $controller->home();
		------------------------------------------------------------
		*/
			(method_exists($Class, $action)) ? $Controller->{ $action }() : error($controller,$action);

	}else
	{
			error($controller);
	}
}

function error($controller, $action = NULL)
{
	require_once (SCHlI_HANDLER . 'routeError.php');
			$errorPage = new routeError; 

			$errorPage->errorPage($controller,$action);
}
		
		/*------------------
		routes service
		--------------------
		*/
	//require_once(SCHlI_SERVICES . 'routeService.php');
	
	route($controller,$action,$params);

