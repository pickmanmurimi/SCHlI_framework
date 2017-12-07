<?php
/*---------------------------------------------
 *this class defines basic controller functions
 ----------------------------------------------
*/
 /*sets the parameters to be passed to the view
@param parameters in an array
@return */

class Controller {

	/*makes the views
	* @param view
	*/
	public static function view($view,$parameters = []){

		$routeArguments = routeService::argumentsPartVarName(Route::$currentRoute);
		$urlArguments	= routeService::urlArgument();

		if ($routeArguments != NULL) {
			
			foreach ($routeArguments as $key => $value) {
				${ $value } = $urlArguments[$key];
			}
		}

		if (file_exists(TEMPLATES['views'] . $view . '.php')) {
			foreach ($parameters as $key => $value) {
			
				${ $key } = $value;
			}


			require_once(TEMPLATES['views'] . $view . '.php');
		}else{
			/*404 errer page*/
			require_once(TEMPLATES['views']. 'client/pages/error404.php');
		}

		
	}

	// public static function getValue($variable){

	// 	$routeArguments = routeService::argumentsPartVarName(Route::$currentRoute);
	// 	$urlArguments	= routeService::urlArgument();

	// 	if ($routeArguments != NULL) {
			
	// 		foreach ($routeArguments as $key => $value) {
	// 			${ $value } = $urlArguments[$key];
	// 		}
	// 	}

	// 	return ${ $variable };

	// }
}