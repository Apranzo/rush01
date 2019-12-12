<?php


interface Player {
	public function getId();
	public function getName();
	public function getRace();
	public function getActiveShip();
	public function getShips();
	public function toJson();
}