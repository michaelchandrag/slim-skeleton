<?php

namespace Controllers\Web;

use Controllers\BaseController;

class MainController extends BaseController {

	public function __construct () {

	}

	public function MainPage($request, $response, $args) {
		$args['world'] = "world";
		return $this->throwHTML($response, "main.php", $args);
	}
}