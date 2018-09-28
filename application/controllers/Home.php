<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();

        //The constructor is used to load the url helper on all pages.
        $this->load->helper('url');
        $this->load->model('Database_model');
    }

    public function index($year = NULL) {
        $data = $this->Database_model->getData($year);
		$data['year'] = $year;
        $title = array('title' => 'National Novel Writing Month 2017');
        $this->load->view('header', $title);
        $this->load->view('home_view', $data);
        $this->load->view('footer');
    }
	
	
}
