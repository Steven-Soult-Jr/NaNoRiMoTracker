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
            'date' => date("md")
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
    
    public function getData() {
        
        $query = $this->db->query("SELECT * FROM words WHERE username IN ('Steve', 'Steven') ORDER BY date ASC");
		$data['values'] = [[]]);
		$data['values'][] = ['Date', 'Steve', 'Steven'];
		$arraymap = ['Steve' => 1, 'Steven' => 2];
		foreach($query->result() as $row) {
			$found = false;
			for($data as $i => $value) {
				if ($value[0] == (string)$row->date) {
					$value[$arraymap[$row->username]] = max($value[$arraymap[$row->username]], $row->words);
					$found = true;
					break;
				}
			}
			if(!$found) {
				$temparray = ['0', 0, 0];
				$temparray[0] = (string)$row->date;
				$temparray[$arraymap[$row->username]] = $row->words;
				$data['values'][] = $temparray;
			}
		}
		
		return $data;
    }
}
