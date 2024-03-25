<?php

class PaymentGateway {
	private $payment_processor_service;

	function __construct( PaymentProcessorService $payment_processor_service ) {
		$this->payment_processor_service = $payment_processor_service;
	}

	public function process_payment() {
		$this->payment_processor_service->process_payment();
	}
}