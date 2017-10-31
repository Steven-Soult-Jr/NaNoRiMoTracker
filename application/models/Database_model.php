<?php

class Database_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        //$this->load->database(); //Database is currently broken. Trying to fix.
        $this->load->helper('date');
    }
    
    public function update($user, $wordcount){
        $data = array(
            'username' => $user,
            'wordcount' => $wordcount,
            'timestamp' => now()
        );
        $this->db->insert('Words', $data);
    }
    
    public function getdata() {
        $query = $this->db->query("SELECT * FROM Words ORDER BY username, timestamp");
        return $query->result_array();
    }
}
