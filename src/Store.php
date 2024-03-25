<?php

class Store {
	private $customerService;

	private $cart;

	function __construct( CustomerService $customerService, Cart $cart ) {
		$this->customerService = $customerService;
		$this->cart = $cart;
	}

	public function service( Client $client ) {
		$this->customerService->checkout( $client );
	}

	public function get_cart() {
		return $this->cart;
	}
}
