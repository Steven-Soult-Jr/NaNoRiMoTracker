<?php

class Input_model extends CI_Model {
	
	 public function __construct() {
        parent::__construct();
    }
	
	public function year($year) {
		if(0 <= ($year % 2000) && ($year % 2000) <= 98) {
				return $year % 2000;
		}
		return NULL;
	}
	
	public function writer($name){
		$writers = $this->Database_model->getWriters();
		foreach($writers as $row) {
			if(in_array($name, $row, TRUE)) {
				return $name;
			}
		}
		return "NULL";
	}
	
	public function isInt($number) {
		$number = intval($number);
		if($number >= 0) {
			return $number;
		}
		return 0;
	}
}