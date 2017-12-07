<?php
/*---------------------------------------------
 *this class defines basic controller functions
 ----------------------------------------------
*/
 /*sets the arguments to be passed to the view
@param arguments in an array
@return */

class Controller {

	/*makes the views
	* @param view
	*/
	public static function view($view,$arguments = []){

		if (file_exists(TEMPLATES['views'] . $view . '.php')) {


			extract($arguments, EXTR_PREFIX_SAME, "SCHlI");
			
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