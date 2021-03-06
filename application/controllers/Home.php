<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
		
        $this->load->helper('url');
        $this->load->model('Database_model');
		$this->load->model('Input_model');
    }

    public function index($year = NULL) {
		if(isset($year)) {
			$year = $this->Input_model->year($year);
		}
        $data = $this->Database_model->getData($year);
		$data['year'] = $year;
        $title = array('title' => 'National Novel Writing Month Tracker');
        $this->load->view('header', $title);
        $this->load->view('home_view', $data);
        $this->load->view('footer');
    }
	
	
}
