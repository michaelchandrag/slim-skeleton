<?php

namespace Controller\Api;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Controller\BaseController;
use Engine\Internal\Delivery;
use Service\Hello\HelloService;

use Models\Product;

class HelloController extends BaseController {

	public function __construct () {
		$this->delivery = new Delivery;
	}

	public function HelloAction (Request $request, Response $response, $args) {
		$service = new HelloService($request, $this->delivery);
		$result = $service->hello();
		return $this->deliverJSON($response, $result);
	}

	public function ErrorAction (Request $request, Response $response, $args) {
		$service = new HelloService($request, $this->delivery);
		$result = $service->error();
		return $this->deliverJSON($response, $result);
	}
	
}