<?php
namespace Service\User;

use Psr\Http\Message\ServerRequestInterface as Request;
use Engine\Internal\Delivery;
use Repository\Contract\UserContract;

class UserService {

	private $request;
	private $delivery;

	public function __construct (Request $request, Delivery $delivery) {
		$this->request = $request;
		$this->delivery = $delivery;
	}

	public function list (UserContract $userRepository) {
		$data = $userRepository->find();
		$this->delivery->data = $data;
		return $this->delivery;
	}
}