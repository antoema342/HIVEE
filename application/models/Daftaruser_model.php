<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftaruser_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}
	public function daftarkandidat($data,$table)
	{
		return $this->db->insert($table,$data);
	}
	public function daftarperusahaan($data,$table)
	{
		return $this->db->insert($table,$data);
	}
	public function cekemailkandidat($email)
	{
		$this->db->select('*');
		$this->db->from('kandidat');
		$this->db->where('email',$email);
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function cekuserkandidat($user)
	{
		$this->db->select('*');
		$this->db->from('kandidat');
		$this->db->where('username',$user);
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function cekemailpt($email)
	{
		$this->db->select('*');
		$this->db->from('perusahaan');
		$this->db->where('email',$email);
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function cekuserpt($user)
	{
		$this->db->select('*');
		$this->db->from('perusahaan');
		$this->db->where('username',$user);
		$query = $this->db->get();
		return $query->num_rows();
	}
		public function cekuseradmin($user)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('username',$user);
		$query = $this->db->get();
		return $query->num_rows();
	}
		public function JumlahKandidat()
	{
		$this->db->select('*');
		$this->db->from('kandidat');
		$query = $this->db->get();
		return $query->num_rows();
	}
		public function JumlahPerusahaan()
	{
		$this->db->select('*');
		$this->db->from('perusahaan');
		$query = $this->db->get();
		return $query->num_rows();
	}
}
?>