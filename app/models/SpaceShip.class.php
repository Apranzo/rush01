<?php


class SpaceShip extends AbstractShip implements Ship {

	/**
	 * SpaceShip constructor.
	 */
	public function __construct($arr) {
		$this->name = $arr['name'];
		$this->race = $arr['race'];
		$this->size = $arr['size'];
		$this->handling = $arr['handling'];
		$this->pp = $arr['pp'];
		$this->speed = $arr['speed'];
		$this->shield = $arr['shield'];
		$this->weapons = $arr['weapons'];
	}

	/**
	 * @return mixed
	 */
	public function getName() {
		// TODO: Implement getName() method.
	}

	/**
	 * @return mixed
	 */
	public function getSize() {
		// TODO: Implement getSize() method.
	}

	/**
	 * @return mixed
	 */
	public function getMaxHull() {
		// TODO: Implement getMaxHull() method.
	}

	/**
	 * @return mixed
	 */
	public function getHull() {
		// TODO: Implement getHull() method.
	}

	/**
	 * @return mixed
	 */
	public function getPP() {
		// TODO: Implement getPP() method.
	}

	/**
	 * @return mixed
	 */
	public function getSpeed() {
		// TODO: Implement getSpeed() method.
	}

	/**
	 * @return mixed
	 */
	public function getShield() {
		// TODO: Implement getShield() method.
	}

	/**
	 * @return mixed
	 */
	public function getPosition() {
		// TODO: Implement getPosition() method.
	}

	/**
	 * @return mixed
	 */
	public function getWeapons() {
		// TODO: Implement getWeapons() method.
	}

	/**
	 * @return mixed
	 */
	public function getCurrentHandling() {
		// TODO: Implement getCurrentHandling() method.
	}

	/**
	 * @return mixed
	 */
	public function toJson() {
		// TODO: Implement toJson() method.
	}
}