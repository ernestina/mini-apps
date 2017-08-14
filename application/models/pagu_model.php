<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class pagu_model extends CI_Model {
	
	
	public function __construct() {
		parent::__construct();
	}
	
	public function get_profil($filter=null){
		/*$this->db->select('*');
		$this->db->from('t_realisasi_satker,ref_satker');
		if($filter != null){
			$this->db->where('t_realisasi_satker.kd_satker = ref_satker.kd_satker', $filter); 
		
		*/
        
        $sql = "select t_realisasi_satker.kd_satker, ref_satker.nm_satker, t_realisasi_satker.pagu, t_realisasi_satker.realisasi
        	from t_realisasi_satker left JOIN ref_satker on t_realisasi_satker.kd_satker=ref_satker.kd_satker"; 
        

		$query = $this->db->query($sql);
		return $query->result();		
	}
	
}