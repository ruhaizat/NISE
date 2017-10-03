<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');                    /***** LOADING HELPER TO AVOID PHP ERROR ****/
		$this->load->model('Model_peserta','peserta'); /* LOADING MODEL * Model_ategorisijil as kategorisijil */
	}


	/**************************  START FETCH OR VIEW FORM DATA ***************/
	public function index()
	{
		$this->data['view_data']= $this->peserta->view_data();
	    $this->load->view('admin/view_peserta', $this->data, FALSE);
        $this->load->view('admin/view_naikpukalPeserta', $this->data, FALSE);
	}
	/****************************  END FETCH OR VIEW FORM DATA ***************/


	/****************************  START OPEN ADD FORM FILE ******************/
	public function add_data()
	{
		$this->load->view('admin/tambahPeserta');
	}
	/****************************  END OPEN ADD FORM FILE ********************/

    
    /****************************  START INSERT FORM DATA ********************/
    public function submit_data()
    {
    $data = array('id' => $this->input->post('id'),
			      'nama_peserta' => $this->input->post('nama_peserta'),
			      'no_mykad' => $this->input->post('no_mykad'),
			      'tarikh_kemaskini' => date("m/d/y h:i:s"),
			      'status' => 'Y');
    
    $insert = $this->peserta->insert_data($data);
    $this->session->set_flashdata('message', 'Maklumat anda berjaya disimpan.');
    redirect('Admin/Peserta');
    }
    /****************************  END INSERT FORM DATA ************************/


    /****************************  START FETCH OR VIEW FORM DATA ***************/
    public function view_data()
    {
    $this->data['view_data']= $this->peserta->view_data();
    $this->load->view('admin/view_peserta', $this->data, FALSE);
    }
    /****************************  END FETCH OR VIEW FORM DATA ***************/

    
    /****************************  START OPEN EDIT FORM WITH DATA *************/
    public function edit_data($id)
    {
    $this->data['edit_data']= $this->peserta->edit_data($id);
    $this->load->view('admin/kemaskiniPeserta', $this->data, FALSE);
    }
    /****************************  END OPEN EDIT FORM WITH DATA ***************/
    
    
    /****************************  START UPDATE DATA *************************/
    public function update_data($id)
    {
    $data = array('id' => $id,
                  'nama_peserta' => $this->input->post('nama_peserta'),
                  'no_mykad' => $this->input->post('no_mykad'),
                  'no_telbimbit' => $this->input->post('no_telbimbit'),
                  'kod_stsbyrn' => $this->input->post('kod_stsbyrn'),
                  'tarikh_kemaskini' => date("m/d/y h:i:s"));
    $this->db->where('id', $id);
    $this->db->update('tbl_peserta', $data);
    $this->session->set_flashdata('message', 'Maklumat anda berjaya dikemaskini.');
    redirect('Admin/Peserta');
    }
    /****************************  END UPDATE DATA ****************************/

    /****************************  START DELETE DATA **************************/
    public function delete_data($id)
    {  
    $this->db->where('id', $id);
    $this->db->delete('user_data');
    $this->session->set_flashdata('message', 'Your data deleted Successfully..');
    redirect('Admin/welcome');
    }
    /****************************  END DELETE DATA ***************************/

/****************************  START FETCH OR VIEW FORM DATA ***************/
    public function muatnaikPukal()
    {
    $this->data['view_data']= $this->peserta->view_data();
    $this->load->view('admin/view_naikpukalPeserta', $this->data, FALSE);
    }
    /****************************  END FETCH OR VIEW FORM DATA ***************/












}
