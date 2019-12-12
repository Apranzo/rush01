<?php


class SpaceShipFabric {

	const IMPERIAL_FRIGATE = [
		'type' => 'Imperial Frigate',
		'size' => [1, 4],
		'hull' => 5,
		'pp' => 10,
		'speed' => 15,
		'handling' => 4,
		'shield' => 0,
		'weapons' => SIDE_LASER_BATTERIES
	];

	const IMPERIAL_DESTROYER = [
		'type' => 'Imperial Destroyer',
		'size' => [1, 3],
		'hull' => 4,
		'pp' => 10,
		'speed' => 18,
		'handling' => 3,
		'shield' => 0,
		'weapons' => SIDE_LASER_BATTERIES
	];
	const IMPERIAL_IRONCLAD = [
		'type' = 'Imperial Ironclad',
		'name' => '',
		'size' => [2, 7],
		'hull' => 8,
		'pp' => 12,
		'speed' => 10,
		'handling' => 5,
		'shield' => 2,
		'weapons' => SIDE_LASER_BATTERIES
	];

	const ATTACK_SHIP = [
		'type' = 'Onslaught Attack Ship',
		'name' => '',
		'size' => [2, 7],
		'hull' => 8,
		'pp' => 12,
		'speed' => 10,
		'handling' => 5,
		'shield' => 2,
		'weapons' => SIDE_LASER_BATTERIES
	];

	makeShip()

}