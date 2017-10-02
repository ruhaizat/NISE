<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_profil extends CI_Model {

	public function insert($nama_peserta,$no_mykad,$no_tel,$no_telbimbit,$emel,$u_id)
	{
		$data = array(

			   'nama_peserta' => $nama_peserta,
			   'no_mykad' => $no_mykad,
			   'no_tel' => $no_tel,
			   'no_telbimbit' => $no_telbimbit,
			   'emel' => $emel
			   
            );
		$this->db->insert('profil', $data); 
	}

	public function getAll()
	{
		$idP = $this->session->userdata('id_pengguna');
		$wherStr = "";
		if(strlen($idP) == 12){
			$icnum = substr($idP,0,6).'-'.substr($idP,6,2).'-'.substr($idP,8,4);
			$wherStr = "where tbl_peserta.no_mykad = '".$icnum."'";
		}else{
			$icnum = $this->session->userdata('id_pengguna');
			$wherStr = "where tbl_peserta.no_paspot_ekad = '".$icnum."'";
		}
		
		$query = $this->db->query("select * 
		from tbl_peserta 
		left join tbl_program on tbl_peserta.kod_program = tbl_program.kod_kursus 
		left join tbl_jeniskursus on tbl_peserta.jenis_kursus = tbl_jeniskursus.kod_sts 
		left join tbl_kategorisijil on tbl_peserta.kod_jenissijil = tbl_kategorisijil.kod_sijil 
		left join tbl_sts_bayaran on tbl_peserta.kod_stsbyrn = tbl_sts_bayaran.kod_sts_bayaran 
		left join tbl_status on tbl_peserta.kod_hadir = tbl_status.kod_sts ".$wherStr);
		return $query->result_array();
	  }

	public function get($u_id)
	{
		$this->db->where('id', $u_id);
		$result = $this->db->get('tbl_peserta');
		return $result->row_array();
	}
	
	public function update($nama_peserta,$no_mykad,$no_tel,$no_telbimbit,$emel,$u_id)
	{
		$data = array(
			   'nama_peserta' => $nama_peserta,
			   'no_mykad' => $no_mykad,
			   'no_tel' => $no_tel,
			   'no_telbimbit' => $no_telbimbit,
			   'emel' => $emel
        );

		$this->db->where('id', $u_id);
		
		$this->db->update('tbl_peserta', $data); 
	}


	public function delete($u_id)
	{
		$this->db->where('id', $u_id);
		$this->db->where("(su != 1)");
		$this->db->delete('tbl_peserta'); 
	}
}