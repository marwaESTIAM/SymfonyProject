<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('visiteur_homepage', new Route('/', array(
    '_controller' => 'visiteurBundle:Default:index',
)));

return $collection;
