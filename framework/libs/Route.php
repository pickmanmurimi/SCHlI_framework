<?php
/*
*route
@param route
@param function
@param validroutes
*/
class Route
{
	public static $validRoutes  = [];
	public static $currentRoute = NULL;

	static private function call($controllerAction)
	{
	 	$values = explode('@', $controllerAction);

	 	$Object = $values[0];

	 	$action 	= $values[1];

	    $controller = new $Object();

	   	/*call the method*/

	   	$controller->{ $action }();
	}

	/*sets the routes
		@param route,
		@param function
	*/
	public static function set($route,$controllerAction = NULL,$function = NULL)
	{
		self::$currentRoute = $route;

		self::$validRoutes[] = $route;

		if (in_array($route, self::$validRoutes)) {
			//print_r(self::$validRoutes);
			/*
			explode url by '/'
			try and match the url to a route
		if an offset [1] exists from the url,
		try matching the url to a route with controller,action

			*/
			$urlParts = routeService::getUrlParts();

			if (routeService::urlSize() <= 1) {
				if ($urlParts[0] == $route) {
					if (isset($controllerAction)) {
			 		self::call($controllerAction);}

					$function->__invoke();
				}
			}elseif (routeService::urlSize() == 2) {
				$urlPart = $urlParts[0].'/'.$urlParts[1];
				if ( $urlPart == $route ) {
					if (isset($controllerAction)) {
			 		self::call($controllerAction);}

					$function->__invoke();
				}
			}elseif (routeService::urlSize() > 2) {
				$urlPart = $urlParts[0].'/'.$urlParts[1];
				if ( $urlPart == routeService::routePart($route)) {
					if (isset($controllerAction)) {
			 		self::call($controllerAction);}

					$function->__invoke();
				}
			}

			}else{
			/*404 errer page*/
			require_once(TEMPLATES['views']. 'client/pages/error404.php');
		}
				
	}
}

?>