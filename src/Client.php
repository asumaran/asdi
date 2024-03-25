<?php
class Client {
	private $name;

	public function set_name( $name ) {
		$this->name = $name;
	}

	public function get_name() {
		return $this->name;
	}
}