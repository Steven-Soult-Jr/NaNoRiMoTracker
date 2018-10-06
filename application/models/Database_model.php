<?php

class Database_model extends CI_Model {
	
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('date');
		date_default_timezone_set('America/Los_Angeles');
    }
    
    public function update($writer, $wordcount){
        $data['date'] = date('ymd');
        $this->db->where('date', $data['date']);
        if($this->db->count_all_results('Words') > 0) {
            $this->db->where('date', $data['date']);
			$this->db->set($writer, $wordcount);
			$this->db->update('Words');
        } else {
			$this->db->order_by('date', 'DESC');
			$this->db->limit(1);
			$query = $this->db->get('Words')->result_array()[0];
			foreach($query as $key => $value) {
				$data[$key] = $value;
			}
			$data['date'] = date('ymd');
			$data[$writer] = $wordcount;
            $this->db->insert('Words', $data);
        }
    }
	
    public function getData($year) {
        if(isset($year)) {
			$this->db->where('date >', $year.'1031');
			$this->db->where('date <', ($year+1).'1101');
			$this->db->order_by('date');
			$query = $this->db->get('Words')->result_array();
			$this->db->where('date <', $year.'1101');
			$this->db->order_by('date', 'DESC');
			$this->db->limit(1);
			$previous = $this->db->get('Words')->result_array();
			if(isset($previous[0])) {
				$previous = $previous[0];
				unset($previous['date']);
			} else {
				unset($previous);
			}
		} else {
			$this->db->order_by('date');
			$query = $this->db->get('Words')->result_array();
		}
		
		if(isset($query[0])) {
			foreach($query[0] as $key => $array) {
				$data['values'][0][] = $key;
			}
			foreach($query as $row) {
				if(isset($previous)) {
					foreach($previous as $key => $value) {
						$row[$key] = max($row[$key]-$value, 0);
					}
				}
				$row['date'] = (string)DateTime::createFromFormat('ymd', $row['date'])->format('m/d/y');
				$data['values'][] = array_values($row);
			}
			
		} else {
			$data['values'][0] = ['date', 'No Data'];
			$data['values'][1] = ['11/01/'.$year, 0];
			$data['values'][2] = ['10/31/'.($year+1), 0];
		}
		
		return $data;
    }
	
	public function getBooks($writer, $bookNum = NULL) {
		$numBooks = $this->numBooks($writer);
		if($numBooks == 0) {
			$data['numBooks'] = 0;
			$data['writer'] = $writer;
			return $data;
		}
		if(isset($booknum)) {
			$this->db->where('writer', $writer);
			$this->db->where('bookNum', $bookNum);
			$query = $this->db->get('Books');
		} else {
			$this->db->where('writer', $writer);
			$query = $this->db->get('Books');
		}
		$data['numBooks'] = $numBooks;
		$data['writer'] = $writer;
		$data['books'] = $query->result_array();
		return $data;
	}
	
	public function getWriters() {
		$this->db->select('writer');
		return $this->db->get('Writers')->result_array();
	}
	
	public function numBooks($writer) {
		$this->db->select('numBooks');
		$this->db->where('writer', $writer);
		$results = $this->db->get('Writers')->result_array();
		return $results[0]['numBooks'];
	}
	
	public function updateBook($data) {
		
	}
}
