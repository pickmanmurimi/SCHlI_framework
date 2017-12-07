<?php
// config/routes.php
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
use App\Controller\BlogController;

$collection = new RouteCollection();
$collection->add('foo', new Route('/foo', array(
    '_controller' => [pagesController::class, 'index']
)));
$collection->add('blog_show', new Route('/blog/{slug}', array(
    '_controller' => [BlogController::class, 'show']
)));

return $collection;