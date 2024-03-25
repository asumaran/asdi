<?php

class CartItem {
	private $name;
	private $price;

	public function set_name( $name ) {
		$this->name = $name;
	}

	/**
	 * Sets price in cents
	 */
	public function set_price( $price ) {
		$this->price = $price;
	}
}