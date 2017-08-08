<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class home_model extends CI_Model {
	
	
	public function __construct(){
		// Call the CI_Model constructor
		parent::__construct();
	}
	
	public function get_profil($filter=null){
		$this->db->select('*');
		/*$this->db->select('nm_satker');*/
		$this->db->from('table');
		if($filter != null){
			$this->db->where('*', $filter);
		}
        //$sql = "select kd_d_user, nama_org from d_user where";
		$query = $this->db->get(); 
		return $query->result();		
	}
}