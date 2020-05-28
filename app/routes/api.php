<?php
use Slim\Routing\RouteCollectorProxy;

$app->group('/api', function (RouteCollectorProxy $group) {
    $group->get('/hello', 'ApiHelloController:HelloAction');
    $group->get('/products', 'ApiHelloController:GetProductsAction');
});