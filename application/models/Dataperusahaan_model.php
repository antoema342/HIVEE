<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataperusahaan_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}
	public function perusahaanaktif(){
			$this->db->select('*');
			$this->db->from('perusahaan');
			$this->db->where('status','Aktif');
			$query = $this->db->get();

			return $query->result();
	}
	public function profilperusahaan($id_perusahaan){
			$this->db->select('*');
			$this->db->from('perusahaan');
			$this->db->where('id_perusahaan',$id_perusahaan);
			$query = $this->db->get();

			return $query->result();
	}
	public function profiles($id_perusahaan){
			$this->db->select('*');
			$this->db->from('perusahaan');
			$this->db->where('id_perusahaan',$id_perusahaan);
			$query = $this->db->get();

			return $query->result_array();
	}
	public function perusahaannonaktif(){
			$this->db->select('*');
			$this->db->from('perusahaan');
			$this->db->where('status','NonAktif');
			$query = $this->db->get();

			return $query->result();
	}
	public function aktifkanperusahaan($id_perusahaan){
	$data = array (
			'status'   => 'Aktif',
		);

		$this->db->where('id_perusahaan',$id_perusahaan);
		$this->db->limit(1);
		return $this->db->update('perusahaan',$data);
	}
	public function nonaktifkanperusahaan($id_perusahaan){
	$data = array (
			'status'   => 'NonAktif',
		);

		$this->db->where('id_perusahaan',$id_perusahaan);
		$this->db->limit(1);
		return $this->db->update('perusahaan',$data);
	}
	public function Updatelamaran($id_kandidat,$id_lowongan)
	{
		$this->db->query("UPDATE lamaran SET status='Diterima' WHERE id_kandidat='$id_kandidat' AND id_lowongan='$id_lowongan'");
	}
	public function tolaklamaran($id_kandidat,$id_lowongan)
	{
		$this->db->query("DELETE FROM lamaran WHERE id_kandidat='$id_kandidat' AND id_lowongan='$id_lowongan'");
	}
	public function Jumlahperusahaan()
		{

			$this->db->select('*');
			$this->db->from('perusahaan');
			$this->db->where('status','Aktif');
			$query = $this->db->get();
			return $query->num_rows();
		}
		public function Jumlahperusahaannonaktif()
		{

			$this->db->select('*');
			$this->db->from('perusahaan');
			$this->db->where('status','NonAktif');
			$query = $this->db->get();
			return $query->num_rows();
		}
	public function ubahprofile($data,$where)
	{
		return $this->db->update('perusahaan',$data,$where);
	}
	public function lamaranadmin()
	{
		$this->db->select('*');
		$this->db->from('lamaran');
		$this->db->join('perusahaan','perusahaan.id_perusahaan=lamaran.id_perusahaan');
		$this->db->join('lowongan','lowongan.id_lowongan=lamaran.id_lowongan');
		$this->db->join('kandidat','kandidat.id_kandidat=lamaran.id_kandidat');
		$query = $this->db->get();
		return $query->result();
	}
	public function lamaranterima()
	{
		$this->db->select('*');
		$this->db->from('lamaran');
		$this->db->join('perusahaan','perusahaan.id_perusahaan=lamaran.id_perusahaan');
		$this->db->join('lowongan','lowongan.id_lowongan=lamaran.id_lowongan');
		$this->db->join('kandidat','kandidat.id_kandidat=lamaran.id_kandidat');
		$this->db->where('lamaran.status','Diterima');
		$query = $this->db->get();
		return $query->result();
	}
	public function lamarantolak()
	{
		$this->db->select('*');
		$this->db->from('lamaran');
		$this->db->join('perusahaan','perusahaan.id_perusahaan=lamaran.id_perusahaan');
		$this->db->join('lowongan','lowongan.id_lowongan=lamaran.id_lowongan');
		$this->db->join('kandidat','kandidat.id_kandidat=lamaran.id_kandidat');
		$this->db->where('lamaran.status','Ditolak');
		$query = $this->db->get();
		return $query->result();
	}
}