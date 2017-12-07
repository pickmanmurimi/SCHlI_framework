<?php

/**
---------------------------------------
* gets called when a page is not found
---------------------------------------
*/
class routeError extends Controller
{
	
	function __construct()
	{
		# code...
	}


	public function errorPage($page,$action = NULL)
	{
		/*--------------------------------------------------------
			this takes us to the error page if the page/controler
			needed is not found.
			it takes one parameter ,the intended page
			------------------------------------------------------
		*/
		echo $this->View('client/pages/error.php',
			[
				'parameters' => $page,
				'action'	 => $action,
			]);
	}

}


