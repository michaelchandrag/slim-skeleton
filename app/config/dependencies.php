<?php
use Psr\Container\ContainerInterface as ContainerInterface;

// API controller
$container->set('ApiHelloController', function(ContainerInterface $c) {
	return new \Controllers\Api\HelloController();
});

// Public Controller
$container->set('WebMainController', function(ContainerInterface $c) {
	return new \Controllers\Web\MainController();
});