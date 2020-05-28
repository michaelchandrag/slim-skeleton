<?php

namespace Controllers\Api;

use Controllers\BaseController;
use Models\Product;

class HelloController extends BaseController {

	public function __construct () {

	}

	public function HelloAction ($request, $response, $args) {
		$data['data'] = 'hello';
		$data['success'] = true;
		return $this->throwJSON($response, $data);
	}

	public function GetProductsAction ($request, $response, $args) {
		$objProduct = new Product;
		$products = $objProduct->findProducts();

		$data['data'] = $products;
		$data['success'] = true;
		return $this->throwJSON($response, $data);
	}
}