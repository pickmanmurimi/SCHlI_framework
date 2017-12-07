<?php

/**
* @param url
* get the url sent,
* split it into the controller, action and arguments
* from the routes/routes.php, get the first part of the get() parameters,(it is the controller)
*--------------------------------------------------------------------------
rules;
1- the first argument in the url is the controller
2- the second is optional and it is the action
3- whatever follows are the arguments for the action called
----------------------------------------------------------------------------
1-in the routes.php arguments are shown by '()' 
----------------------------------------------------------------------------
steps,
1-get the url,
2-split it by '/' to get the controller
3-check the line that calls the same controller
3-if the url has a controller-action, 
*/
/**/
class routeService
{
	static function getUrlParts()
	{
		$url   = $_GET['url'];
		$parts = explode('/', $url);

		return $parts;
	}

	static function urlSize()
	{
		$size = sizeof(self::getUrlParts());

		return $size;
	}

	static function urlArgument()
	{
		$url = self::getUrlParts();
		/*array_slice from the third argument to the last*/
		$urlArgument = array_slice($url, 2);

		return $urlArgument;
	}

	static function argumentsPartVarName($route)
	{
		$argument = [];
		$split 	  = explode('/', $route);
		if (array_key_exists(2, $split)) {
			$argumentsVarNames = array_slice($split, 2);

			foreach ($argumentsVarNames as $argumentsVarName) {
				/*get the varnames*/
				$varName = preg_match("/{([a-zA-Z0-9_]*)}/", $argumentsVarName,$match);
				$varName = $match[1];

				$argument[] = $varName;

			}

			
		}else{
			$argument = Null;
		}
		
		return $argument; 
	}
	static function routePart($route)
	{
		$split = explode('/', $route);

		if (array_key_exists(1, $split)) {
			$routePart = $split[0].'/'.$split[1];
		}else{
			$routePart = Null;
		}

		return $routePart;
	}

}