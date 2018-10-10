<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Literature extends CI_Controller {

    public function __construct() {
        parent::__construct();
		
        $this->load->helper('url');
		$this->load->helper('form');
        $this->load->model('Database_model');
		$this->load->model('Input_model');
    }

    public function index($writer = NULL, $bookNum = NULL) {
		$title = array('title' => 'Book list');
		$data = $this->Database_model->getAll();
        $this->load->view('header', $title);
		$this->load->view('literature', $data);
        $this->load->view('footer');
    }
	
	public function update() {
		$data = array(
            'writer' => $this->Input_model->writer($this->input->post('writer')),
			'bookNum' => $this->Input_model->isInt($this->input->post('bookNum')),
			'bookName' => $this->input->post('bookName'),
			'bookDesc' => $this->input->post('bookDesc')
                );
		$this->Database_model->updateBook($data);
		redirect('Update/user/'.$data['writer']);
	}
	
	public function add($writer, $bookNum = NULL, $submitted = FALSE) {
		$data['writer'] = $this->Input_model->writer($writer);
		if(isset($bookNum)) {
			$data['bookNum'] = $this->Input_model->validBook($writer, $bookNum);
			$book = $this->Database_model->getBooks($writer, $bookNum)['books'][0];
			$data['bookName'] = $book['bookName'];
			$data['bookDesc'] = $book['bookDesc'];
		}
		$data['submitted'] = $submitted;
		$title = array('title' => $writer."'s Book");
        $this->load->view('header', $title);
		$this->load->view('add_lit', $data);
        $this->load->view('footer');
	}
}