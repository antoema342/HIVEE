<?php 	
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Register extends CI_Controller
 {
 	public function __construct()
	{
		parent::__construct();
	}
 	public function register_perusahaan()
		{
			$this->load->view('home/header');
			$this->load->view('home/home_pt/register');
			$this->load->view('home/footer');
		}
	public function register_kandidat()
		{
			$this->load->view('home/header');
			$this->load->view('home/home_kandidat/register');
			$this->load->view('home/footer');
		}
		public function DaftarKandidat()
	{
		$this->form_validation->set_rules('firstname','First Name','trim|required');
		$this->form_validation->set_rules('lastname','Last Name','trim|required');
		$this->form_validation->set_rules('passkandidat', 'Password', 'trim|required|min_length[8]|alpha_numeric');
		$this->form_validation->set_rules('repassword', 'Re-Password', 'trim|required|matches[passkandidat]');
		$this->form_validation->set_rules('emailkandidat', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('usernamekandidat', 'Username', 'required');
		$this->form_validation->set_rules('telpkandidat', 'Number Telephone', 'trim|required|min_length[12]');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('home/home_kandidat/header');
			$this->load->view('home/home_kandidat/register');
			$this->load->view('home/home_kandidat/footer');
		}
		else{
		$pass		 = $this->input->post('passkandidat');
		$pass2		 = $this->input->post('repassword');
		$emailkan 	 = $this->input->post('emailkandidat');
		$user 		 = $this->input->post('usernamekandidat');
		$namaawal	 = $this->input->post('firstname');
		$namaakhir	 = $this->input->post('lastname');
		$namalengkap = $namaawal." ".$namaakhir;
		$data = array 
		(
		'id_kandidat'	 => $this->Penomoran_model->IDDaftar(),
		'nama'  		 => $namalengkap,
		'email' 	 	 => $emailkan ,
		'telp' 	 		 => $this->input->post('telpkandidat'),
		'username' 	 	 => $user,
		'password'		 => md5($pass)
		);
		$resultcheckemail   = $this->Daftaruser_model->cekemailkandidat($emailkan);
		$resultcheckemailpt = $this->Daftaruser_model->cekemailpt($emailkan);
		$resultcheckuser    = $this->Daftaruser_model->cekuserkandidat($user);
		$resultcheckpt	    = $this->Daftaruser_model->cekuserpt($user);
		$resultcheckadmin	= $this->Daftaruser_model->cekuseradmin($user);
		if (($resultcheckemail > 0)||($resultcheckemailpt > 0)) {
			$this->session->set_flashdata('emailsalah', 'true');
			redirect('register/register_kandidat');
		}
		elseif (($resultcheckuser > 0)||($resultcheckpt > 0)||($resultcheckadmin > 0)) {
			$this->session->set_flashdata('usersalah', 'true');
			redirect('register/register_kandidat');
		}
		else {
		$this->Daftaruser_model->daftarkandidat($data,'kandidat');
		$where = array(
			  			'username' => $data['username'],
			  			'password' => md5($pass)
			  			);

		$result=$this->db->get_where('kandidat',$where)->row_array();
		$data_session = array(
						    'nama' => $result['nama'],
						    'status' => "login"
						    );
		$this->session->set_userdata($data_session);
		redirect(base_url('Kandidat'));
			}		
		}	
	}
	public function DaftarPerusahaan()
	{
		$this->form_validation->set_rules('comname','Company Name','trim|required');
		$this->form_validation->set_rules('alamat','Addres','trim|required');
		$this->form_validation->set_rules('passpt', 'Password', 'trim|required|min_length[8]|alpha_numeric');
		$this->form_validation->set_rules('repasspt', 'Re-Password', 'trim|required|matches[passpt]');
		$this->form_validation->set_rules('emailpt', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('userpt', 'Username', 'required');
		$this->form_validation->set_rules('tlppt', 'Number Telephone', 'trim|required|min_length[12]');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('home/header1');
			$this->load->view('home/home_pt/register');
			$this->load->view('home/footer');
		}
		else{
		$pass		 = $this->input->post('passpt');
		$pass2		 = $this->input->post('repasspt');
		$emailkan 	 = $this->input->post('emailpt');
		$user 		 = $this->input->post('userpt');
		$namapt		 = $this->input->post('comname');
		
		$data = array 
		(
		'id_perusahaan'		 => $this->Penomoran_model->IDDaftarPerusahaan(),
		'nm_perusahaan'  	 => $namapt,
		'alamat_perusahaan'  => $this->input->post('alamat'),
		'email' 	 	 	 => $emailkan ,
		'telp' 	 		 	 => $this->input->post('tlppt'),
		'username' 	 		 => $user,
		'password'		 	 => md5($pass)
		);
		$resultcheckemail   = $this->Daftaruser_model->cekemailkandidat($emailkan);
		$resultcheckemailpt = $this->Daftaruser_model->cekemailpt($emailkan);
		$resultcheckuser    = $this->Daftaruser_model->cekuserkandidat($user);
		$resultcheckpt	    = $this->Daftaruser_model->cekuserpt($user);
		$resultcheckadmin	= $this->Daftaruser_model->cekuseradmin($user);
		if (($resultcheckemail > 0)||($resultcheckemailpt > 0)) {
			$this->session->set_flashdata('emailsalah', 'true');
			redirect('register/register_perusahaan');
		}
		elseif (($resultcheckuser > 0)||($resultcheckpt > 0)||($resultcheckadmin > 0)) {
			$this->session->set_flashdata('usersalah', 'true');
			redirect('register/register_perusahaan');
		}
		else {
		$this->Daftaruser_model->daftarperusahaan($data,'perusahaan');
		$where = array(
			  			'username' => $data['username'],
			  			'password' => md5($pass)
			  			);

		$result=$this->db->get_where('perusahaan',$where)->row_array();
		$data_session = array(
						    'nama' => $result['nm_perusahaan'],
						    'status' => "login",
						    'role' => "perusahaan"
						    );
		$this->session->set_userdata($data_session);
		redirect(base_url('perusahaan'));
			}		
		}	
	}
 }

?>