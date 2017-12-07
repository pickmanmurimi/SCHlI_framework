<?php
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel;


/*matching*/
$request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();

$context = new RequestContext();
$context->fromRequest($request);

$matcher = new UrlMatcher($routes, $context);


$parameters = $matcher->match($request->getPathInfo());

$request->attributes->add($matcher->match($request->getPathInfo()));

 $controllerResolver = new HttpKernel\Controller\ControllerResolver();
 $argumentResolver = new HttpKernel\Controller\ArgumentResolver();

 $controller = $controllerResolver->getController($request);
 $arguments = $argumentResolver->getArguments($request, $controller);

$response = call_user_func_array($controller, $arguments);

