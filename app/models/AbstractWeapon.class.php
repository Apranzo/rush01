<?php


class AbstractWeapon {
	protected $charges;
	protected $ranges = [
		'short' => [0,0],
		'middle' => [0,0],
		'long' => [0,0]
	];
	protected $effectZone;
}