<?php

namespace Controller\Web;

use Controller\BaseController;

class MainController extends BaseController {

	public function __construct () {

	}

	public function MainPage($request, $response, $args) {
		$args['world'] = "world";
		return $this->deliverHTML($response, "main.php", $args);
	}
}