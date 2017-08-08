<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class home extends CI_Controller {
	private $data;
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
	}
	
	public function index(){
		$this->load->model('home_model'); 
		$this->data['record'] = $this->home_model->get_profil();
		//$this->load->view('header_view', $this->data);
		$this->load->view('home_view', $this->data);
		//$this->load->view('footer_view');
	}
	
	public function tes(){
		$this->load->model('home_model'); 
		$this->data['record'] = $this->home_model->get_profil();
		//$this->load->view('header_view', $this->data);
		$this->load->view('home_view', $this->data);
		//$this->load->view('footer_view');
	}	
	
}