<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sijilpeserta extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        if ( ! $this->session->userdata('isLogin')) { 
            redirect('Login');
        }
		
		//$this->load->model('model_vehicle');
        $this->load->model('model_kursus');
        $this->load->model('model_manufacturer');
        $this->load->model('model_car_model');
        $this->load->model('model_employee');
	}

	public function index()
	{		if($this->session->userdata('kod_kumppengguna') == "5" ){			$data['kursus'] = $this->model_kursus->getAll();			$data['employees'] = $this->model_employee->getAll();			$data['user'] = $this->session->userdata;			$this->parser->parse('admin/view_sijilpeserta', $data);				}else{			$data["moduleStr"] = "Sijil Peserta";			$this->load->view('admin/view_not_allowed', $data);				}
	}

	public function logout()
	{

	       $this->session->sess_destroy();
	       redirect('Login');
	}
}
