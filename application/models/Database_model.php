<?php

class Database_model extends CI_Model {
	
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('date');
        $this->load->helper('array');
		date_default_timezone_set('America/Los_Angeles');
    }
    
    public function update($writer, $wordcount){
        $data = array(
            'writer' => $writer,
            'wordcount' => $wordcount,
            'date' => date("ymd")
        );
        $this->db->where('writer', element('writer', $data));
        $this->db->where('date', element('date', $data));
        if($this->db->count_all_results() > 0) {
            $this->db->where('writer', element('writer', $data));
            $this->db->where('date', element('date', $data));
            $this->db->delete('Words');
            $this->db->insert('Words', $data);
        } else {
            $this->db->insert('Words', $data);
        }
    }
	
    public function getData($year) {
        if(isset($year)) {
			$query = $this->db->query("SELECT * FROM Words WHERE  date > ".$year."1031 AND date < ".($year+1)."1101 ORDER BY date ASC");
		} else {
			$query = $this->db->query("SELECT * FROM Words ORDER BY date ASC");
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
					$value[$arraymap[$row->writer]] = max($value[$arraymap[$row->writer]], $row->wordcount);
					$found = true;
					break;
				}
			}
			if(!$found) {
				$temparray = ['0', 0, 0, 0, 0, 0, 0, 0, 0];
				$temparray[0] = (string)$date;
				$temparray[$arraymap[$row->writer]] = $row->wordcount;
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
		
		if(!isset($data['values'][1])) {
			$data['values'][1] = [$year."1101", 0, 0, 0, 0, 0, 0, 0, 0];
		}
		
		return $data;
    }
	
	public function getBooks($writer, $booknum = NULL) {
		$numBooks = $this->numBooks($writer);
		if($numBooks == 0) {
			$data['writer'] = $writer;
			return $data;
		}
		if(isset($booknum)) {
			$query = $this->db->query("SELECT * FROM Books WHERE writer = '".$writer."' AND booknum = ".$booknum);
		} else {
			$query = $this->db->query("SELECT * FROM Books WHERE writer = '".$writer."'");
		}
		$data['numBooks'] = $numBooks;
		$data['writer'] = $writer;
		$data['books'] = $query->result_array();
		return $data;
	}
	
	public function numBooks($writer) {
		return $this->db->query("SELECT COUNT(*) as count FROM Books WHERE writer = '".$writer."'")->result_array()[0]['count'];
	}
	
	public function updateBook($data) {
		
	}
}
