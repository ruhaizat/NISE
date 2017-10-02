<?php
class Model_peserta extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

   /**************************  START INSERT QUERY ***************/
    public function insert_data($data){
        $this->db->insert('tbl_peserta', $data); 
        return TRUE;
    }
    /**************************  END INSERT QUERY ****************/

    
    /*************  START SELECT or VIEW ALL QUERY ***************/
    public function view_data(){
        $query=$this->db->query("SELECT ps.*
                                 FROM tbl_peserta ps
                                 ORDER BY ps.id ASC");
        $query = $this->db->query("select * 
        from tbl_peserta 
        left join tbl_sts_bayaran on tbl_peserta.kod_stsbyrn = tbl_sts_bayaran.kod_sts_bayaran");
        return $query->result_array();
    }
    /***************  END SELECT or VIEW ALL QUERY ***************/

    
    /*************  START EDIT PARTICULER DATA QUERY *************/
    public function edit_data($id){
        $query=$this->db->query("SELECT *
                                 FROM tbl_peserta
                                 WHERE id = $id");
                                 
        return $query->result_array();
    }
    /*************  END EDIT PARTICULER DATA QUERY ***************/

}
