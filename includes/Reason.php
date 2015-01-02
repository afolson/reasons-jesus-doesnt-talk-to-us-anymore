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

	public function getRandomReasonID() {
		$value = array_rand( $this->reasons );
		return $value;
	}

	public function getReasonByID($id) {
		return $this->reasons[$id];
	}

	public function updateReason() {

	}

	public function deleteReason() {

	}
}
