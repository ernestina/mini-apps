<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class akun_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function get_profil(){
		//$this->db->select('*');
		//$this->db->from('t_realisasi_per_akun,ref_akun,ref_satker'); //kayaknya karena ngambil dari 3 tabel, returnnya jadi 3 kali muncul, kira2 gimana ya mbak?
        
        //coba pakai JOIN command, bukan *, biar gampang gak usah pake $this->db. CONTOH SQL:
        $sql = "select a.kd_d_mslh, a.kd_d_user, b.nama_org, a.masalah 
                from d_mslh a left join d_user b on a.kd_d_user = b.kd_d_user";
        
		/*if($filter != null){
			$this->db->where('kd_satker', $filter);
		}*/
		$query = $this->db->query($sql);
		return $query->result();
	}

	/*public function get_view($filter=null){
		$this->db->select('*');
		$this->db->from('ref_satker');
		if($filter != null){
			$this->db->where('kd_satker',$filter);
		}
		$query = $this->db->get();
		return $query->result();
	}*/

}