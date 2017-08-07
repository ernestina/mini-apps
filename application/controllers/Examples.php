<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Examples extends CI_Controller {
	private $data;
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
	}
	
	public function index(){
		$this->load->model('example_model'); 
		$this->data['record'] = $this->example_model->get_profil();
		//$this->load->view('header_view', $this->data);
		$this->load->view('example_view', $this->data);
		//$this->load->view('footer_view');
	}
	
	public function tes(){
		$this->load->model('example_model'); 
		$this->data['record'] = $this->example_model->get_profil();
		//$this->load->view('header_view', $this->data);
		$this->load->view('example_view', $this->data);
		//$this->load->view('footer_view');
	}	
	
}