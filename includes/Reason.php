<?php
include ('reasons.php');

class Reason {
	public function __construct() {
	}

	public function addReason() {

	}

	public function getReason() {
		global $reasonList;
		$value = array_rand($reasonList);
		return $reasonList[$value];
	}

	public function updateReason() {

	}

	public function deleteReason() {

	}
}
