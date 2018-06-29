<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kandidat extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->has_userdata('status')) {
			redirect('login');
		}else if($this->session->userdata('role') =='perusahaan'){
			redirect('perusahaan');
		}
		else if($this->session->userdata('role') =='admin'){
			redirect('Admin');
		}
	}

	public function index()
	{
		$id_kandidat = $this->session->userdata('id_kandidat');
		$data['profil'] = $this->Datakandidat_model->Datapelamar($id_kandidat);
		$data['pengalaman'] = $this->Datakandidat_model->Datapengalaman($id_kandidat);
		$this->load->view('kandidat/header',$data);
		$this->load->view('home/home_kandidat/content');
		$this->load->view('home/footer');
	}

	public function search()
	{
		$id_kandidat = $this->session->userdata('id_kandidat');
		$data['profil'] = $this->Datakandidat_model->Datapelamar($id_kandidat);
		$data['pengalaman'] = $this->Datakandidat_model->Datapengalaman($id_kandidat);
		$data['lowongan']=$this->Datalowongan_model->lowonganaktif();
		$this->load->view('kandidat/header',$data);
		$this->load->view('kandidat/search',$data);
		$this->load->view('home/footer');
	}

	public function detail($id_lowongan)
	{
		$id_kandidat = $this->session->userdata('id_kandidat');
		$data['profil'] = $this->Datakandidat_model->Datapelamar($id_kandidat);
		$data['pengalaman'] = $this->Datakandidat_model->Datapengalaman($id_kandidat);
		$data['lowongan']=$this->Datalowongan_model->lowonganwhere($id_lowongan);
		$data['more']=$this->Datalowongan_model->lowonganaktif();
		$data['checklam']=$this->Datakandidat_model->Ceklamaran($id_kandidat,$id_lowongan);
		$this->load->view('kandidat/header',$data);
		$this->load->view('kandidat/detail',$data);
		$this->load->view('home/footer');
	}

	public function history()
	{
		$id_kandidat = $this->session->userdata('id_kandidat');
		$data['jmllam']=$this->Datakandidat_model->JumlahLamaran($id_kandidat);
		$data['jmlter']=$this->Datakandidat_model->JumlahLamaranTerima($id_kandidat);
		$data['jmltol']=$this->Datakandidat_model->JumlahLamaranTolak($id_kandidat);
		$data['profil'] = $this->Datakandidat_model->Datapelamar($id_kandidat);
		$data['pengalaman'] = $this->Datakandidat_model->Datapengalaman($id_kandidat);
		$data['lamaran']=$this->Datakandidat_model->Datalamaran($id_kandidat);
		$data['lt']=$this->Datakandidat_model->Lamaranterima($id_kandidat);
		$data['ltol']=$this->Datakandidat_model->Lamarantolak($id_kandidat);
		$this->load->view('kandidat/header',$data);
		$this->load->view('kandidat/history');
		$this->load->view('home/footer');
	}

	public function profile()
	{

		$id_kandidat = $this->session->userdata('id_kandidat');
		$data['profil'] = $this->Datakandidat_model->Datapelamar($id_kandidat);
		$data['pengalaman'] = $this->Datakandidat_model->Datapengalaman($id_kandidat);
		$this->load->view('kandidat/header',$data);
		$this->load->view('kandidat/profile',$data);
		$this->load->view('home/footer');

	}

	public function change()
	{
		$this->load->view('kandidat/header');
		$this->load->view('kandidat/changepassword');
		$this->load->view('home/footer');
	}
	public function editprofil()
	{
		$config['upload_path'] = './assets/img/';
        $config['allowed_types'] = 'jpg|png|gif';
        $config['max_size']      = 100000;
        // load library upload
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('myfiles')) {
            $error = $this->upload->display_errors();
            // menampilkan pesan error
            print_r($error);
        } else {
       	  $result = $this->upload->data();   
	      $data = array(
	      'foto' => $result['file_name'],
	      'nama' => $this->input->post('nama'),
	      'jk' => $this->input->post('gender'),
	      'tgl_lahir' => date('Y-m-d',strtotime($this->input->post('tgl_lahir'))),
	      'email' => $this->input->post('email'),
	      'telp' => $this->input->post('telp'),
	      'alamat' => $this->input->post('alamat'),
	      'deskripsi' => $this->input->post('des')
	    );
	      $where=array(
	      	'id_kandidat'=>$this->session->userdata('id_kandidat'));
    
   		 $this->Datakandidat_model->ubahprofile($data,$where);
   		 redirect(base_url('Kandidat/profile'));
        }
	}
	public function ubahpengalaman()
	{

		$nama=$_POST['nama'];
		$posisi=$_POST['posisi'];
		$jabatan=$_POST['jabatan'];
		$lama=$_POST['lama'];
		$des=$_POST['des'];
		$data=array(
			'id_pengalaman'=>$this->Penomoran_model->IDPengalaman(),
			'nm_perusahaan'=>$nama,
			'jabatan'=>$jabatan,
			'posisi'=>$posisi,
			'lamakerja'=>$lama,
			'desc'=>$des,
			'id_kandidat'=>$this->session->userdata('id_kandidat')
		);
		 $where=array(
	      	'id_kandidat'=>$this->session->userdata('id_kandidat'));
		$this->Datakandidat_model->ubahpengalaman($data,$where);
		 redirect(base_url('Kandidat/profile'));
	}
	public function Hapuspengalaman($id_pengalaman)
	{
		$where=array(
			'id_pengalaman'=>$id_pengalaman
		);
		$this->Datakandidat_model->Hapuspengalaman($where);
		redirect(base_url('Kandidat/profile'));
	}
	public function Pendidikan()
	{
		$nama=$_POST['nama'];
		$tl=$_POST['tl'];
		$tm=$_POST['tm'];
		$kua=$_POST['kualifikasi'];
		$ju=$_POST['bidangstudi'];
		$tmb=$_POST['tambahan'];
		$data=array(
			'nm_instansi'=>$nama,
			'tahun_masuk'=>$tm,
			'tahun_lulus'=>$tl,
			'p_terakhir'=>$kua,
			'tambahan'=>$tmb,
			'jurusan'=>$ju);
		$where=array(
			'id_kandidat'=>$this->session->userdata('id_kandidat'));
		$this->Datakandidat_model->Ubahpendidikan($data,$where);
		redirect(base_url('Kandidat/profile'));
	}
	public function Uploadcv()
	{
		$config['upload_path'] = './assets/img/';
        $config['allowed_types'] = 'pdf|doc|docx';
        $config['max_size']      = 100000;
        // load library upload
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('myfiles')) {
            $error = $this->upload->display_errors();
            // menampilkan pesan error
            print_r($error);
        } else {
       	  $result = $this->upload->data();   
	      $data = array(
	      'cv' => $result['file_name']
	    );
	      $where=array(
	      	'id_kandidat'=>$this->session->userdata('id_kandidat'));
    
   		 $this->Datakandidat_model->ubahcv($data,$where);
   		 redirect(base_url('Kandidat/profile'));
        }
	}
	public function lamarpekerjaan($id_lowongan,$id_perusahaan)
	{
		$id_kandidat=$this->session->userdata('id_kandidat');
		$data=array(
			'id_lamaran'=>$this->Penomoran_model->IDlamaran(),
			'id_perusahaan'=>$id_perusahaan,
			'id_kandidat'=>$id_kandidat,
			'id_lowongan'=>$id_lowongan,
			'tgl_daftar'=>date('Y-m-d'),
			'status'=>'Direview'
		);
		$this->Datakandidat_model->lamarpekerjaan($data);
		redirect(base_url('Kandidat'));
	}

}
?>