<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datalogin_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}
	public function cekloginkandidat($table,$where){
		return $this->db->get_where($table,$where);
	}
	public function cekloginperusahaan($table,$where){
		return $this->db->get_where($table,$where);
	}
	public function cekloginadmin($table,$where){
		return $this->db->get_where($table,$where);
	}
}
