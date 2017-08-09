<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {
	private $data;

	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
	}

	public function index()
	{	
		$this->load->model('home_model');
		$this->data['record'] =$this->home_model->get_profil();
		$this->load->view('home_view', $this->data);
	}

	public function tes(){
		$this->load->model('home_model');
		$this->data['record'] = $this->home_model->get_profil();
		$this->load->view('Home_view', $this->data);
	}

}