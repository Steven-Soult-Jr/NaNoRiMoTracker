<?php

class Input_model extends CI_Model {
	
	 public function __construct() {
        parent::__construct();
    }
	
	public function year($year) {
		if(0 <= ($year % 2000) && ($year % 2000) <= 99) {
				return $year % 2000;
		}
		
		return NULL;
	}
}