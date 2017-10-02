<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategorisijil extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');                    /***** LOADING HELPER TO AVOID PHP ERROR ****/
		$this->load->model('Model_kategorisijil','kategorisijil'); /* LOADING MODEL * Model_ategorisijil as kategorisijil */
	}


	/**************************  START FETCH OR VIEW FORM DATA ***************/
	public function index()
	{
		$this->data['view_data']= $this->kategorisijil->view_data();
	    $this->load->view('admin/view_kategorisijil', $this->data, FALSE);
	}
	/****************************  END FETCH OR VIEW FORM DATA ***************/


	/****************************  START OPEN ADD FORM FILE ******************/
	public function add_data()
	{
		$this->load->view('admin/tambahKategorisijil');
	}
	/****************************  END OPEN ADD FORM FILE ********************/

    
    /****************************  START INSERT FORM DATA ********************/
    public function submit_data()
    {
    $data = array('kod_sijil' => $this->input->post('kod_sijil'),
			      'nama_sijil' => $this->input->post('nama_sijil'),
			      'maklumat_sijil' => $this->input->post('maklumat_sijil'),
			      'tarikh_jana' => date("m/d/y h:i:s"),
			      'status' => 'Y');
    
    $insert = $this->kategorisijil->insert_data($data);
    $this->session->set_flashdata('message', 'Makluamt anda berjaya disimpan.');
    redirect('Admin/kategorisijil');
    }
    /****************************  END INSERT FORM DATA ************************/


    /****************************  START FETCH OR VIEW FORM DATA ***************/
    public function view_data()
    {
    $this->data['view_data']= $this->welcome->view_data();
    $this->load->view('admin/view_kategorisijil', $this->data, FALSE);
    }
    /****************************  END FETCH OR VIEW FORM DATA ***************/

    
    /****************************  START OPEN EDIT FORM WITH DATA *************/
    public function edit_data($id)
    {
    $this->data['edit_data']= $this->kategorisijil->edit_data($id);
    $this->load->view('admin/kemaskiniKategorisijil', $this->data, FALSE);
    }
    /****************************  END OPEN EDIT FORM WITH DATA ***************/


    /****************************  START UPDATE DATA *************************/
    public function update_data($id)
    {
    $data = array('kod_sijil' => $this->input->post('kod_sijil'),
			      'nama_sijil' => $this->input->post('nama_sijil'),
			      'maklumat_sijil' => $this->input->post('maklumat_sijil'),
			      'tarikh_jana' => date("m/d/y h:i:s"),
			      'status'                     => 'Y');
    $this->db->where('id', $id);
    $this->db->update('tbl_kategorisijil', $data);
    $this->session->set_flashdata('message', 'Maklumat anda berjaya dikemaskini.');
    redirect('Admin/kategorisijil');
    }
    /****************************  END UPDATE DATA ****************************/


    /****************************  START DELETE DATA **************************/
    public function delete_data($id)
    {  
    $this->db->where('kod_sijil', $id);
    $this->db->delete('tbl_kategorisijil');
    $this->session->set_flashdata('message', 'Maklumat anda berjaya dihapuskan.');
    redirect('Admin/kategorisijil');
    }
    /****************************  END DELETE DATA ***************************/

}
