<?php
use Slim\Routing\RouteCollectorProxy;

$app->group('/api/v1', function (RouteCollectorProxy $group) {
    $group->get('/hello', 'ApiHelloController:HelloAction');
    $group->get('/error', 'ApiHelloController:ErrorAction');

    $group->group('/user', function (RouteCollectorProxy $groupUser) {
    	$groupUser->get('/', 'ApiUserController:GetAction');
    });
});