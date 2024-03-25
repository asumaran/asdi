<?php
class CustomerService {
	private $payment_gateway;

	function __construct( PaymentGateway $payment_gateway, Cart $cart ) {
		$this->payment_gateway = $payment_gateway;
		$this->cart = $cart;
	}

	public function checkout( Client $client ) {
		$cart = $this->cart->get_cart();

		if ( empty ( $cart ) ) {
			throw new Exception( "Empty cart" );
		}

		echo print_r( $cart, true );
		$this->payment_gateway->process_payment();
	}
}