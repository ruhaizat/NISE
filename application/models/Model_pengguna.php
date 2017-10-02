<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_pengguna extends CI_Model {

	public function insert($id,$id_pengguna,$kata_laluan,$nama_pengguna,$kod_kumppengguna,$status,$tarikh_daftar,$tarikh_kemaskini)
	{
		$data = array(
			   'id' => $id,
			   'id_pengguna' => $id_pengguna,
               'kata_laluan' => $kata_laluan,
               'nama_pengguna' => $nama_pengguna,
               'kod_kumppengguna' => $kod_kumppengguna,
			   'status' => $status,
			   'tarikh_daftar' => $tarikh_daftar,
			   'tarikh_kemaskini' => $tarikh_kemaskini
            );
		$this->db->insert('tbl_pengguna', $data); 
	}

	public function getAll()
	{
		$result = $this->db->get('tbl_pengguna');
		return $result->result_array();
	}

	public function get($id)
	{
		$this->db->where('id', $id);
		$result = $this->db->get('tbl_pengguna');
		return $result->row_array();
	}
	
	public function update($id,$id_pengguna,$kata_laluan,$nama_pengguna,$kod_kumppengguna,$status,$tarikh_daftar,$tarikh_kemaskini)
	{
		$data = array(
			   'id' => $id,
			   'id_pengguna' => $id_pengguna,
               'kata_laluan' => $kata_laluan,
               'nama_pengguna' => $nama_pengguna,
               'kod_kumppengguna' => $kod_kumppengguna,
			   'status' => $status,
			   'tarikh_daftar' => $tarikh_daftar,
			   'tarikh_kemaskini' => $tarikh_kemaskini
        );

		$this->db->where('id', $id);
		//$this->db->where("(su != 1)");
		$this->db->update('tbl_pengguna', $data); 
	}


	public function delete($id)
	{
		$this->db->where('id', $id);
		//$this->db->where("(su != 1)");
		$this->db->delete('tbl_pengguna'); 
	}
}