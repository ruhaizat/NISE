<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statusbayaran extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');                    /***** LOADING HELPER TO AVOID PHP ERROR ****/
		$this->load->model('Model_statusbayaran','statusbayaran'); /* LOADING MODEL * Model_ategorisijil as kategorisijil */
	}


	/**************************  START FETCH OR VIEW FORM DATA ***************/
	public function index()
	{
		$this->data['view_data']= $this->statusbayaran->view_data();
	    $this->load->view('admin/view_statusbayaran', $this->data, FALSE);
	}
	/****************************  END FETCH OR VIEW FORM DATA ***************/


	/****************************  START OPEN ADD FORM FILE ******************/
	public function add_data()
	{
		$this->load->view('admin/view_tambahstatusbayaran');
	}
	/****************************  END OPEN ADD FORM FILE ********************/

    
    /****************************  START INSERT FORM DATA ********************/
    public function submit_data()
    {
    $data = array('kod_sts_bayaran' => $this->input->post('kod_sts_bayaran'),
			      'nama_sts_bayaran' => $this->input->post('nama_sts_bayaran'));
    
    $insert = $this->statusbayaran->insert_data($data);
    $this->session->set_flashdata('message', 'Makluamt anda berjaya disimpan.');
    redirect('Admin/statusbayaran');
    }
    /****************************  END INSERT FORM DATA ************************/


    /****************************  START FETCH OR VIEW FORM DATA ***************/
    public function view_data()
    {
    $this->data['view_data']= $this->welcome->view_data();
    $this->load->view('admin/view_statusbayaran', $this->data, FALSE);
    }
    /****************************  END FETCH OR VIEW FORM DATA ***************/

    
    /****************************  START OPEN EDIT FORM WITH DATA *************/
    public function edit_data($id)
    {
    $this->data['edit_data']= $this->statusbayaran->edit_data($id);
    $this->load->view('admin/view_kemaskinistatusbayaran', $this->data, FALSE);
    }
    /****************************  END OPEN EDIT FORM WITH DATA ***************/


    /****************************  START UPDATE DATA *************************/
    public function update_data($id)
    {
    $data = array('kod_sts_bayaran' => $this->input->post('kod_sts_bayaran'),
			      'nama_sts_bayaran' => $this->input->post('nama_sts_bayaran'));
    $this->db->where('kod_sts_bayaran', $id);
    $this->db->update('tbl_sts_bayaran', $data);
    $this->session->set_flashdata('message', 'Maklumat anda berjaya dikemaskini.');
    redirect('Admin/statusbayaran');
    }
    /****************************  END UPDATE DATA ****************************/


    /****************************  START DELETE DATA **************************/
    public function delete_data($id)
    {  
    $this->db->where('kod_sts_bayaran', $id);
    $this->db->delete('tbl_sts_bayaran');
    $this->session->set_flashdata('message', 'Maklumat anda berjaya dihapuskan.');
    redirect('Admin/statusbayaran');
    }
    /****************************  END DELETE DATA ***************************/

}
