<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends CI_Controller {

    public function __construct() {
        parent::__construct();

        //The constructor is used to load the url helper on all pages.
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('Database_model');
    }

    public function index() {
        $title = array('title' => 'Update Progress');
        $this->load->view('header', $title);
        $this->load->view('update_progress');
        $this->load->view('footer');
    }

}
