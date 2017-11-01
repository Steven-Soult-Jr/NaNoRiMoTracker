<?php

class Database_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('date');
        $this->load->helper('array');
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
        $data = array(
            'Steve1' => 0,
            'Steve2' => 0,
            'Steve3' => 0,
            'Steve4' => 0,
            'Steve5' => 0,
            'Susanne1' => 0,
            'Susanne2' => 0,
            'Susanne3' => 0,
            'Susanne4' => 0,
            'Susanne5' => 0,
            'Michelle1' => 0,
            'Michelle2' => 0,
            'Michelle3' => 0,
            'Michelle4' => 0,
            'Michelle5' => 0,
            'Trevor1' => 0,
            'Trevor2' => 0,
            'Trevor3' => 0,
            'Trevor4' => 0,
            'Trevor5' => 0,
            'Katherine1' => 0,
            'Katherine2' => 0,
            'Katherine3' => 0,
            'Katherine4' => 0,
            'Katherine5' => 0,
            'Greg1' => 0,
            'Greg2' => 0,
            'Greg3' => 0,
            'Greg4' => 0,
            'Greg5' => 0,
            'Steven1' => 0,
            'Steven2' => 0,
            'Steven3' => 0,
            'Steven4' => 0,
            'Steven5' => 0,
        );
        $query = $this->db->query("SELECT * FROM words ORDER BY date, username");
        foreach($query->result() as $row) {
            if(1031 <= $row->date && $row->date <= 1104) {
                $data[$row->username."1"] = max($row->wordcount, $data[$row->username."1"]);
            } else if (1105 <= $row->date && $row->date <= 1111) {
                $data[$row->username."2"] = max($row->wordcount, $data[$row->username."2"]);
            }else if (1112 <= $row->date && $row->date <= 1118) {
                $data[$row->username."3"] = max($row->wordcount, $data[$row->username."3"]);
            }else if (1119 <= $row->date && $row->date <= 1125) {
                $data[$row->username."4"] = max($row->wordcount, $data[$row->username."4"]);
            }else if (1126 <= $row->date && $row->date <= 1130) {
                $data[$row->username."5"] = max($row->wordcount, $data[$row->username."5"]);
            }
        }
        
        return $data;
    }
}
