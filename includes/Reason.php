<?php
class Reason {
	private $reasons = array();

	public function __construct( $reasons ) {
		$this->reasons = $reasons;
	}

	public function addReason() {

	}

	public function getReason() {
		$value = array_rand( $this->reasons );
		return $this->reasons[$value];
	}

	public function updateReason() {

	}

	public function deleteReason() {

	}
}
