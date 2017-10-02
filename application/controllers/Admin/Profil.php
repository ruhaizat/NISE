<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        if ( ! $this->session->userdata('isLogin')) { 
            redirect('login');
        }
		
		$this->load->model('Model_profil');
}

    public function index()
	{
        $data['udata']=$this->session->userdata;
        $data['profil'] = $this->Model_profil->getAll();
        //$data['manufacturers'] = $this->model_manufacturer->getAllManufacturers();
        //$data['models'] = $this->model_car_model->getAllModels();
        
        //$this->load->view('view_vehicle', $data); 
        $this->parser->parse('admin/view_editprofile', $data);   
    }

	public function add()
	{	
		if(!$this->input->post('buttonSubmit'))
		{
			$data['message'] = '';
			$this->load->view('admin/view_editprofile', $data);
		}
		else
		{
			//$this->load->library('form_validation');
			if($this->form_validation->run('addemp'))
			{
                $nama_peserta = $this->input->post('nama_peserta');
				$no_mykad = $this->input->post('no_mykad');
                $no_tel = $this->input->post('no_tel');
                $emel = md5($this->input->post('emel'));
             	$this->model_profil->insert($nama_peserta,$no_mykad,$no_tel,$emel);
				$this->session->set_flashdata('message','Profile Successfully Created.');
				redirect(base_url('admin/profil'));
			}
			else
			{
				$data['message'] = validation_errors();
				$this->load->view('admin/view_editprofile', $data);
			}
		}
	}

	public function edit($u_id)
	{	
		if(!$this->input->post('buttonSubmit'))
		{
			$data['message'] = '';
			$profil = $this->model_profil->get($u_id);
			$data['profil'] = $profil;
			$this->load->view('admin/view_editprofile', $data);
		}
		else
		{
			if($this->form_validation->run('editemp'))
			{
				$nama_peserta = $this->input->post('nama_peserta');
				$no_mykad = $this->input->post('no_mykad');
                $no_tel = $this->input->post('no_tel');
                $emel = ($this->input->post('emel'));
				$this->model_profil->update($nama_peserta,$no_mykad,$no_tel,$emel);
				redirect(base_url('admin/profil'));
			}
			else
			{
				$data['message'] = validation_errors();  //data ta message name er lebel er kase pathay
				$this->load->view('view_editprofile', $data);
			}
		}
	}

	public function delete($cid)
	{	
        $this->model_profil->delete($cid);
        $this->session->set_flashdata('message','Peserta Successfully deleted.');
        redirect(base_url('admin/profil'));
	}
}

