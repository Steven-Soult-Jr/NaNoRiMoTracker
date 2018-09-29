<?php

class Database_model extends CI_Model {
	
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('date');
        $this->load->helper('array');
		date_default_timezone_set('America/Los_Angeles');
    }
    
    public function update($user, $wordcount){
        $data = array(
            'username' => $user,
            'wordcount' => $wordcount,
            'date' => date("ymd")
        );
        $this->db->where('username', element('username', $data));
        $this->db->where('date', element('date', $data));
        if($this->db->count_all_results() > 0) {
            $this->db->where('username', element('username', $data));
            $this->db->where('date', element('date', $data));
            $this->db->delete('words');
            $this->db->insert('words', $data);
        } else {
            $this->db->insert('words', $data);
        }
    }
    
    public function getData($year) {
        if(isset($year)) {
			$query = $this->db->query("SELECT * FROM words WHERE  date > 1101".$year." AND date < 1031".((int)$year+1)." ORDER BY date ASC");
		} else {
			$query = $this->db->query("SELECT * FROM words ORDER BY date ASC");
		}
		$data['values'] = [['Date', 'Steve', 'Susanne', 'Michelle', 'Trevor', 'Katherine', 'Greg', 'Steven', 'Tamarah']];
		$arraymap = ['Steve' => 1, 'Susanne' => 2, 'Michelle' => 3, 'Trevor' => 4, 'Katherine' => 5, 'Greg' => 6, 'Steven' => 7, 'Tamarah' => 8];
		$numWriters = 8;
		foreach($query->result() as $row) {
			$found = false;
			$date = $row->date;
			$date = DateTime::createFromFormat('ymd', $date)->format('m/d/y');
			foreach($data as $i => $value) {
				if ($value[0] == (string)$date) {
					$value[$arraymap[$row->username]] = max($value[$arraymap[$row->username]], $row->wordcount);
					$found = true;
					break;
				}
			}
			if(!$found) {
				$temparray = ['0', 0, 0, 0, 0, 0, 0, 0, 0];
				$temparray[0] = (string)$date;
				$temparray[$arraymap[$row->username]] = $row->wordcount;
				$data['values'][] = $temparray;
			}
		}
		
		for($i = 1; $i < count($data['values'])-1; $i++) {
			for($j = 1; $j < $numWriters+1; $j++) {
				if($data['values'][$i+1][$j] == 0) {
					$data['values'][$i+1][$j] = $data['values'][$i][$j];
				}
			}
		}
		
		return $data;
    }
}
