<?php

namespace Controllers;

use Slim\Views\PhpRenderer;

class BaseController {

	public function __construct () {

	}

	public function throwJSON ($response, $data, $status = 200) {
		$payload = json_encode($data);
		$response->getBody()->write($payload);
		return $response
				->withHeader('Content-Type', 'application/json')
				->withStatus($status);
	}
	
	public function throwHTML ($response, $filename, $args = array()) {
		$renderer = new PhpRenderer(getcwd().'/views/');
		return $renderer->render($response, $filename, $args);
	}
}