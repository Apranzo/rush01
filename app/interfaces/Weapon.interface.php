<?php


interface Weapon {

	public function getName();
	public function getCharge();
	public function getRanges();
	public function getMaxRange();
	public function getEffectZone();
	public function toJson();
}