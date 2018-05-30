<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (isset($_GET['logout']) == 'signout') {
			$this->session->sess_destroy();
			redirect('');
		}
		else{
			if ($this->session->has_userdata('status')) {
				if ($this->session->userdata('role') == "kandidat") {
					redirect('kandidat');
				}else if($this->session->userdata('role') =='perusahaan') {
					redirect('perusahaan');
				}
				else if($this->session->userdata('role') =='admin') {
					redirect('admin');
				}
			}
		}
	}
	public function index()
	{
		$this->load->view('home/home_kandidat/header');
		$this->load->view('login/login');
	}
	public function loginkandidat()
	{
		$this->load->view('home/home_kandidat/header');
		$this->load->view('login/login');
		$this->load->view('home/home_kandidat/footer');
	}
	public function loginperusahaan()
	{
		$this->load->view('home/home_kandidat/header');
		$this->load->view('login/login');
		$this->load->view('home/footer');
	}
	public function ceklogin(){
		$user=$this->input->post('usname');
		$pass=$this->input->post('pass');
		$where = array
		(
   			'username' => $user,
   			'password' => md5($pass)
   		);
		$cekkandidat = $this->Datalogin_model->cekloginkandidat('kandidat',$where)->num_rows();
		$cekperusahaan = $this->Datalogin_model->cekloginperusahaan('perusahaan',$where)->num_rows();
		$cekadmin = $this->Datalogin_model->cekloginadmin('admin',$where)->num_rows();
		if($cekkandidat > 0)
		{
	  		$result=$this->db->get_where('kandidat',$where)->row_array();
		    $data_session = array
		    (
		    'nama' => $result['nama'],
		    'status' => "login",
		    'role' => "kandidat"
		    );
		    $this->session->set_userdata($data_session);
		    redirect(base_url('Kandidat/profile'));
		}
	  	elseif ($cekperusahaan > 0 ) 
	  	{
	  	$result=$this->db->get_where('perusahaan',$where)->row_array();
	    $data_session = array
	    (
	    'nama' => $result['nm_perusahaan'],
	    'status' => "login",
	    'role' => "perusahaan"
	    );
	    $this->session->set_userdata($data_session);
	   	redirect(base_url('Perusahaan'));
	  	}
	  	elseif ($cekadmin > 0 ) 
	  	{
	  	$result=$this->db->get_where('admin',$where)->row_array();
	    $data_session = array
	    (
	    'nama' => $result['nama'],
	    'status' => "login",
	    'role' => "admin"
	    );
	    $this->session->set_userdata($data_session);
	   	redirect(base_url('admin'));
	  	}
	 	else{
	   	$this->session->set_flashdata('gagallogin', 'true');
		redirect('Login/loginperusahaan');
	 	}
}
}
?>