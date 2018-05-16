<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status') != "login"){
   		redirect(base_url('Home'));
   	}
   		else if($this->session->userdata('role') =='kandidat'){
			redirect('kandidat');
		}
		else if($this->session->userdata('role') =='admin'){
			redirect('admin');
		}
  
	}
	public function index(){
		$this->load->view('perusahaan/beranda');
	}
}
?>