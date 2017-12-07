<?php
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel;

/*add routea*/
$routes = new RouteCollection();

$routes->add('/foo', new Route('/foo', array('_controller' => 'pagesController::index')));
$routes->add('/bar', new Route('/bar/{name}', array('_controller'=>'pagesController::home','name' => 'World')));



/*matching*/
$request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();

$context = new RequestContext();
$context->fromRequest($request);

echo "<pre>";
$matcher = new UrlMatcher($routes, $context);
echo $request->getPathInfo();
echo "<hr>";

$parameters = $matcher->match($request->getPathInfo());


//echo 
// echo '<pre>';
// print_r($request);
// // array('_controller' => 'MyController', '_route' => 'route_name')
// echo "</pre>";
print_r(json_encode($parameters, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
$request->attributes->add($matcher->match($request->getPathInfo()));

 $controllerResolver = new HttpKernel\Controller\ControllerResolver();
 $argumentResolver = new HttpKernel\Controller\ArgumentResolver();

 $controller = $controllerResolver->getController($request);
 $arguments = $argumentResolver->getArguments($request, $controller);
//print_r( $controllerResolver);
//print_r( $argumentResolver);
//print_r($request->attributes->get('_controller')) ;
//print_r($arguments);

	$response = call_user_func_array($controller, $arguments);

