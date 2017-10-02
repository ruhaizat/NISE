<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jeniskursus extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	    if ( ! $this->session->userdata('isLogin') || ($this->session->userdata('kod_kumppengguna') != "1" )) { 
	        redirect('login');
	    }

		//$this->load->database();
		$this->load->model('Model_jeniskursus');
                
	}
	public function index()
	{	
        $data['emp'] = $this->Model_jeniskursus->getAll();

        $this->parser->parse('admin/view_jeniskursus', $data);  
    }

	public function add()
	{	
		if(!$this->input->post('buttonSubmit'))
		{
			$data['message'] = '';
			$this->load->view('admin/view_tambahpengguna', $data);
		}
		else
		{
			//$this->load->library('form_validation');
			if($this->form_validation->run('addemp'))
			{
                $u_email = $this->input->post('u_email');
				$f_name = $this->input->post('f_name');
                $l_name = $this->input->post('l_name');
                $u_pass = md5($this->input->post('u_pass'));
                $u_bday = $this->input->post('u_bday');
                $u_position = $this->input->post('u_position');
                $u_type = $this->input->post('u_type');
                $u_mobile = $this->input->post('u_mobile');
                $u_gender = $this->input->post('u_gender');
                $u_address = $this->input->post('u_address');
				$this->model_employee->insert($u_email,$f_name,$l_name,$u_bday,$u_position,$u_type,$u_pass,$u_mobile,$u_gender,$u_address);
				$this->session->set_flashdata('message','Employee Successfully Created.');
				redirect(base_url('admin/jeniskursus'));
			}
			else
			{
				$data['message'] = validation_errors();
				$this->load->view('admin/view_jeniskursus', $data);
			}
		}
	}

	public function edit($cid)
	{	
		if(!$this->input->post('buttonSubmit'))
		{
			$data['message'] = '';
			$userRow = $this->Model_kehadiran->get($cid);
			$data['userRow'] = $userRow;
			$this->load->view('admin/view_editpengguna', $data);
		}
		else
		{
			if($this->form_validation->run('editemp'))
			{
				$id = $this->input->post('id');
                $id_pengguna = $this->input->post('l_name');
                $kata_laluan = md5($this->input->post('kata_laluan'));
                $nama_pengguna = $this->input->post('nama_pengguna');
                $kod_kumppengguna = $this->input->post('kod_kumppengguna');
                $status = $this->input->post('status');
                $tarikh_daftar = $this->input->post('tarikh_daftar');
                $tarikh_kemaskini = $this->input->post('tarikh_kemaskini');
               	
				$this->Model_kehadiran->update($id,$id_pengguna,$kata_laluan,$nama_pengguna,$kod_kumppengguna,$status,$tarikh_daftar,$tarikh_kemaskini);
				redirect(base_url('admin/jeniskursus'));
			}
			else
			{
				$data['message'] = validation_errors();  //data ta message name er lebel er kase pathay
				$this->load->view('view_jeniskursus', $data);
			}
		}
	}

	public function delete($cid)
	{	
        $this->Model_kehadiran->delete($cid);
        $this->session->set_flashdata('message','Pengguna Successfully deleted.');
        redirect(base_url('admin/pengguna'));
	}
}

