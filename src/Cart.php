<?php

class Cart {
	private $cart = [];

	public function add_to_cart( CartItem $item ) {
		$this->cart[] = $item;
	}

	public function get_cart() {
		return $this->cart;
	}
}