<?php
namespace Controller\Api;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Controller\BaseController;
use Engine\Internal\Delivery;
use Service\User\UserService;

use Repository\Model\User;

class UserController extends BaseController {

	public function __construct () {
		$this->delivery = new Delivery;
	}

	public function GetAction (Request $request, Response $response, $args) {
		$service = new UserService($request, $this->delivery);
		$result = $service->list(new User);
		return $this->deliverJSON($response, $result);
	}
	
}