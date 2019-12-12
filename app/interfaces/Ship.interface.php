<?php


interface Ship {
	public function getName();
	public function getSize();
	public function getMaxHull();
	public function getHull();
	public function getPP();
	public function getSpeed();
	public function getShield();
	public function getPosition();
	public function getWeapons();
	public function getCurrentHandling();
	public function toJson();
}