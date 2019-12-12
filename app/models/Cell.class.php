<?php


class Cell {

	/**
	 * Cell constructor.
	 */
	public function __construct() {
	}

	public function haveShip() {
		return rand(1, 100) > 75;
	}

	public function haveObstacle() {
		return rand(1, 100) > 75;
	}

	public function getAtrsToStr() {
		$attr = '';
		if ($this->haveShip()) {
			$attr .= 'ship=true';
		} elseif ($this->haveObstacle()) {
			$attr .= 'obst=true';
		}

		return $attr;
	}



}