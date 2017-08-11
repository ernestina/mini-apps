<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class akun_controller extends CI_Controller {
	private $data;
	private $data2;

	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
	}

	public function index(){	
		$this->load->model('akun_model');
		$this->data['record'] =$this->akun_model->get_profil();
		$this->load->view('akun_view', $this->data);
	}

	/*public function index2(){
		$this->load->model('akun_model');
		$this->data['record'] =$this->akun_model->get_view('527010');
		$this->load->view('akun_view', $this->data);
	}*/

/*	public function tes(){
		$this->load->model('akun_model');
		$this->data['record'] = $this->akun_model->get_profil();
		$this->load->view('akun_view', $this->data);
	}*/

}