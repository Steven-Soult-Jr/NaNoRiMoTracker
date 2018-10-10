<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends CI_Controller {

    public function __construct() {
        parent::__construct();
		
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
	
	public function user($writer) {
		$writer = $this->Input_model->writer($writer);
		$data = $this->Database_model->getBooks($writer);
		
		$title['title'] = $writer."'s Progress";
		$this->load->view('header', $title);
		$this->load->view('update_progress', $data);
		$this->load->view('footer');
	}
    
    public function submit() {
        $data = array(
            'writer' => $this->Input_model->writer($this->input->post('writer')),
			'wordCount' => 0,
			'submitted' => TRUE
                );
		$numBooks = $this->Database_model->numBooks($data['writer']);
		for($i = 1; $i <= $numBooks; $i++) {
			$tempWords = $this->Input_model->isInt($this->input->post('words'.$i));
			$tempExtra = $this->Input_model->isInt($this->input->post('extra'.$i));
			$data['wordCount'] = $data['wordCount'] + $tempWords + $tempExtra;
			$this->Database_model->bookWords($data['writer'], $i, $tempWords, $tempExtra);
		}
        $this->Database_model->update($data['writer'], $data['wordCount']);
        
        $title = array('title' => 'Word Count Submitted!');
        $this->load->view('header', $title);
        $this->load->view('update_progress', $data);
        $this->load->view('footer');
    }

}
