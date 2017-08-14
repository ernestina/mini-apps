<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class pagu extends CI_Controller {
	private $data;
	private $sata2;
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
	}
	
	public function index(){
		$this->load->model('pagu_model'); 
		$this->data['record'] = $this->pagu_model->get_profil();
		$this->load->view('pagu_view', $this->data);
		
	}
	
	public function tes(){
		$this->load->model('pagu_model'); 
		$this->data['record'] = $this->pagu_model->get_profil();
		//$this->load->view('header_view', $this->data);
		$this->load->view('pagu_view', $this->data);
		//$this->load->view('footer_view');
	}	
	
}