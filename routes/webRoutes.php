<?php
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;
//instantiate the route collection object
$routes = new RouteCollection();
	/*
		--------------------------------------------------------------------------
		|web routes
		|--------------------------------------------------------------------------
		|This enables us match the requests to the correct controllers and actions
		|We are using the symphony syntax to add the routes.
		|You can learn more about this at symphony/routing component.
		|--------------------------------------------------------------------------
	*/

/*
-----------------------
add your routes here
-----------------------
*/
$routes->add('home', new Route('/',['_controller' => 'pagesController::home','name' => 'Guest']));
$routes->add('/bar', new Route('/home/{name}', array('_controller'=>'pagesController::home','name' => 'Guest')));
$routes->add('index', new Route('/index',['_controller' => 'pagesController::index']));