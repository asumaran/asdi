<?php
require_once __DIR__ . '/vendor/autoload.php';

require __DIR__ . '/src/Store.php';
require __DIR__ . '/src/Client.php';
require __DIR__ . '/src/CustomerService.php';
require __DIR__ . '/src/Cart.php';
require __DIR__ . '/src/CartItem.php';
require __DIR__ . '/src/PaymentGateway.php';
require __DIR__ . '/src/services/PaymentProcessorService.php';

$container = new DI\Container();

// Store
$store = $container->get( 'Store' );

// Client
$client = $container->get( 'Client' );
$client->set_name( 'Alfredo' );

// Cart Item
$cartItem = $container->get( 'CartItem' );
$cartItem->set_name( 'pan' );
$cartItem->set_price( 200 );

// Cart
$cart = $store->get_cart();

if ( $cartItem instanceof CartItem ) {
	$cart->add_to_cart( $cartItem );
}

// For now until we could persist the cart in DB
$_GLOBALS['cart'] = $cart;

$store->service( $client );
