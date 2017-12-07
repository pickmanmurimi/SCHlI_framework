<?php
/*------------------------------------------------------
 @author pickman
 ---------------
	Bootstrap
 ---------------
 lets initialize our app
--------------------------------------------------------
*/

class bootstrap
{
	
	function __construct()
	{
		$this->bootstrap();
		$this->FrameworkAutoLoader();
	}

	private function bootstrap()
	{

		/*
		 *get all the path definations for our framework
		*/
		require_once ( __DIR__ . DIRECTORY_SEPARATOR . 'paths.php');
		
		/*-----------------------------
		*load the application files
		-------------------------------
		*/
		
		//config
		require_once( SCHlI_CONFIG_URL . 'database.php' );
		require_once( SCHlI_CONFIG_URL . 'views.php');
		// database connection
		require_once ( SCHlI_FRAMEWORK . 'database' . DIRECTORY_SEPARATOR .'connection.php');
		//router
		require_once (SCHlI_ROUTES_URL . 'routeTest.php');

	}


	/*autoloader 
	---------------*/
	private function FrameworkAutoLoader(){
		/*TODO: make an auto loader for the app*/
	}
}