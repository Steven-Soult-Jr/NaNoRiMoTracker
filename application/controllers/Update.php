<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends CI_Controller {

    public function __construct() {
        parent::__construct();

        //The constructor is used to load the url helper on all pages.
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('array');
        $this->load->model('Database_model');
    }

    public function index() {
        $title = array('title' => 'Update Progress');
        $this->load->view('header', $title);
        $this->load->view('update_progress');
        $this->load->view('footer');
    }
	
	public function user($writer, $booknum = NULL) {
		$data = $this->Database_model->getBooks($writer, $booknum);
		#echo var_dump($data);
		$title = array('title' => $writer."'s Progress");
		$this->load->view('header', $title);
		$this->load->view('update_progress', $data);
		$this->load->view('footer');
	}
	
	public function updatebook() {
		$data = array(
            'writer' => $this->input->post('writer'),
            'booknum' => $this->input->post('booknum'),
            'bookname' => $this->input->post('bookname'),
			'bookdesc' => $this->input->post('bookdesc'),
			'words' => $this->input->post('words'),
			'extrawords' => $this->input->post('extrawords')
                );
		$this->Database_model->updateBook($data);
		$this->user($data['writer'], $data['booknum']);
	}
	
	public function addbook($writer) {
		$title = array('title' => "Add a new book.");
		$data['writer'] = $writer;
		$data['addbook'] = true;
		$this->load->view('header', $title);
		$this->load->view('update_progress', $data);
		$this->load->view('footer');
	}
    
    public function submit() {
        $data = array(
            'writer' => $this->input->post('writer'),
            'wordcount' => $this->input->post('wordcount'),
            'submitted' => true
                );
				
        $this->Database_model->update(element('writer',$data), element('wordcount', $data));
        
        $title = array('title' => 'Word Count Submitted!');
        $this->load->view('header', $title);
        $this->load->view('update_progress', $data);
        $this->load->view('footer');
    }

}
