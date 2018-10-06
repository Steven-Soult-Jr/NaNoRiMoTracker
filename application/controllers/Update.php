<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends CI_Controller {

    public function __construct() {
        parent::__construct();

        //The constructor is used to load the url helper on all pages.
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('Database_model');
		$this->load->model('Input_model');
    }

    public function index() {
        $title['title'] = 'Update Progress';
        $this->load->view('header', $title);
        $this->load->view('update_progress');
        $this->load->view('footer');
    }
	
	public function user($writer, $booknum = NULL) {
		if(isset($booknum)) {
			$booknum = $this->Input_model->isInt($booknum);
		}
		$writer = $this->Input_model->writer($writer);
		
		$data = $this->Database_model->getBooks($writer, $booknum);
		
		$title['title'] = $writer."'s Progress";
		$this->load->view('header', $title);
		$this->load->view('update_progress', $data);
		$this->load->view('footer');
	}
    
    public function submit() {
        $data = array(
            'writer' => $this->Input_model->writer($this->input->post('writer')),
            'wordCount' => $this->Input_model->isInt($this->input->post('wordCount')),
            'submitted' => TRUE
                );
		
		
		
        $this->Database_model->update($data['writer'], $data['wordCount']);
        
        $title = array('title' => 'Word Count Submitted!');
        $this->load->view('header', $title);
        $this->load->view('update_progress', $data);
        $this->load->view('footer');
    }

}
