<?php
namespace Service\Hello;

use Psr\Http\Message\ServerRequestInterface as Request;
use Engine\Internal\Delivery;

class HelloService {

	private $request;
	private $delivery;

	public function __construct (Request $request, Delivery $delivery) {
		$this->request = $request;
		$this->delivery = $delivery;
	}

	public function hello () {
		$this->delivery->data = 'ok';
		$this->delivery->success = true;
		return $this->delivery;
	}

	public function error () {
		$this->delivery->addError(400, 'This is an error message.');
		return $this->delivery;
	}
}