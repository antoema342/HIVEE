<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->has_userdata('status')) {
			redirect('login');
		}else if($this->session->userdata('role') =='perusahaan'){
			redirect('perusahaan');
		}
		else if($this->session->userdata('role') =='kandidat'){
			redirect('kandidat');
		}
	}
	public function index(){
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/footer');
	}
	public function kandidataktif(){
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/kandidataktif');
		$this->load->view('admin/footer');
	}
}