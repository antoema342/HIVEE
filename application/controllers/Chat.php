<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {
public function __construct()
	{
		parent::__construct();
	}
	public function index(){
		$data=$this->Chat_model->GetDataPesan();
		$this->load->view('chat/chatbox',array('data'=>$data));
	}
	public function send(){
		$nama="Pratama";
		$pesan=$this->input->post('pesan');
		$tanggal=date("Y-m-d H:i:s", time()+60*60*5);
		$data = array 
		(
		'nama'	 => $nama,
		'pesan'  		 => $pesan,
		'timestamps' 	 	 => $tanggal ,
		);
		$data=$this->Chat_model->KirimPesan($data,'chat');
		$data=$this->Chat_model->GetDataPesan();
		$this->load->view('chat/chatbox',array('data'=>$data));
	}
}