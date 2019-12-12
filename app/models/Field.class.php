<?php

require_once 'Cell.class.php';


class Field {

	private $area;
	private $players;
//	public function toJson();

	/**
	 * Field constructor.
	 * @param $area
	 * @param $players
	 */
	public function __construct() {
//		$this->area = $area;
//		$this->players = $players;
		for ($i = 0; $i < 150; $i++) {
			for ($j = 0; $j < 100; $j++) {
				$this->area[$i][$j] = new Cell();
			}
		}
	}


	private function fieldContent() {
		$content = '';
		for ($i = 0; $i < 60; $i++) {
			$content .=	"<div class='row'>\n";
			for ($j = 0; $j < 40; $j++) {

				$content .= "<div class='col'".$this->area[$i][$j]->getAtrsToStr().">"."[$i:$j]"; // ship asteroi,
				$content .= "</div>";
			}
			$content .= '</div>';
		}
		return $content;
	}



	public function field_init() {
		$field = '';
		$field .= "<div class='table'>\n";
		$field .= $this->fieldContent();
		$field .= "</div>\n";
		return $field;
	}
}