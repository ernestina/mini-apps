<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function get_profil($filter=null){
		$this->db->select('*');
		//$this->db->select('Nama Satker');
		$this->db->from('d_user');
		if($filter != null){
			$this->db->where('kd_d_user', $filter);
		}
		$query = $this->db->get();
		return $query->result();
	}

}