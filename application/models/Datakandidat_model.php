<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datakandidat_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}
	public function kandidataktif(){
			$this->db->select('*');
			$this->db->from('kandidat');
			$this->db->where('status','Aktif');
			$query = $this->db->get();

			return $query->result();
	}
	public function kandidatnonaktif(){
			$this->db->select('*');
			$this->db->from('kandidat');
			$this->db->where('status','NonAktif');
			$query = $this->db->get();

			return $query->result();
	}
	public function aktifkankandidat($id_kandidat){
	$data = array (
			'status'   => 'Aktif',
		);

		$this->db->where('id_kandidat',$id_kandidat);
		$this->db->limit(1);
		return $this->db->update('kandidat',$data);
	}
	public function nonaktifkankandidat($id_kandidat){
	$data = array (
			'status'   => 'NonAktif',
		);

		$this->db->where('id_kandidat',$id_kandidat);
		$this->db->limit(1);
		return $this->db->update('kandidat',$data);
	}
	public function Datapelamar($id_kandidat)
	{
		$this->db->select('*');
		$this->db->from('kandidat');
		//$this->db->join('kandidat','kandidat.id_kandidat=pengalaman.id_kandidat');
		$this->db->where('id_kandidat',$id_kandidat);
		$query = $this->db->get();

		return $query->result();
	}
	public function kandidatperusahaan($id_kandidat)
	{
		$this->db->select('*');
		$this->db->from('kandidat');
		//$this->db->join('kandidat','kandidat.id_kandidat=pengalaman.id_kandidat');
		$this->db->where('id_kandidat',$id_kandidat);
		$query = $this->db->get();

		return $query->result_array();
	}
	public function Datapengalaman($id_kandidat)
	{
		$this->db->select('*');
		$this->db->from('pengalaman');
		//$this->db->join('kandidat','kandidat.id_kandidat=pengalaman.id_kandidat');
		$this->db->where('id_kandidat',$id_kandidat);
		$query = $this->db->get();

		return $query->result();
	}
	public function ubahprofile($data,$where)
	{
		return $this->db->update('kandidat',$data,$where);
	}
	public function ubahpengalaman($data,$where)
	{
		return $this->db->insert('pengalaman',$data,$where);
	}
	public function Hapuspengalaman($where)
	{
		return $this->db->delete('pengalaman',$where);
	}
	public function Ubahpendidikan($data,$where)
	{
		return $this->db->update('kandidat',$data,$where);
	}
	public function ubahcv($data,$where)
	{
		return $this->db->update('kandidat',$data,$where);
	}
	public function lamarpekerjaan($data)
	{
		return $this->db->insert('lamaran',$data);
	}
	public function Datalamaran($id_kandidat)
	{
		$this->db->select('*');
			$this->db->from('lamaran');
			$this->db->join('perusahaan','perusahaan.id_perusahaan=lamaran.id_perusahaan');
			$this->db->join('lowongan','lowongan.id_lowongan=lamaran.id_lowongan');
			$this->db->where('id_kandidat',$id_kandidat);
			$query = $this->db->get();

			return $query->result();
	}
	public function Lamaranterima($id_kandidat)
	{
		$this->db->select('*');
			$this->db->from('lamaran');
			$this->db->join('perusahaan','perusahaan.id_perusahaan=lamaran.id_perusahaan');
			$this->db->join('lowongan','lowongan.id_lowongan=lamaran.id_lowongan');
			$this->db->where('id_kandidat',$id_kandidat);
			$this->db->where('lamaran.status','Diterima');
			$query = $this->db->get();

			return $query->result();
	}
	public function Lamarantolak($id_kandidat)
	{
		$this->db->select('*');
			$this->db->from('lamaran');
			$this->db->join('perusahaan','perusahaan.id_perusahaan=lamaran.id_perusahaan');
			$this->db->join('lowongan','lowongan.id_lowongan=lamaran.id_lowongan');
			$this->db->where('id_kandidat',$id_kandidat);
			$this->db->where('lamaran.status','Ditolak');
			$query = $this->db->get();

			return $query->result();
	}
	public function JumlahLamaran($id_kandidat)
	{
		$this->db->select('*');
		$this->db->from('lamaran');
		$this->db->where('id_kandidat',$id_kandidat);
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function JumlahLamaranTerima($id_kandidat)
	{
		$this->db->select('*');
		$this->db->from('lamaran');
		$this->db->where('id_kandidat',$id_kandidat);
		$this->db->where('status','Diterima');
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function JumlahLamaranTolak($id_kandidat)
	{
		$this->db->select('*');
		$this->db->from('lamaran');
		$this->db->where('id_kandidat',$id_kandidat);
		$this->db->where('status','Ditolak');
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function Ceklamaran($id_kandidat,$id_lowongan)
		{
			$this->db->select('*');
			$this->db->from('lamaran');
			$this->db->where('id_kandidat',$id_kandidat);
			$this->db->where('id_lowongan',$id_lowongan);
			$query = $this->db->get();
			return $query->num_rows();
		}
		public function Jumlahkandidat()
		{

			$this->db->select('*');
			$this->db->from('kandidat');
			$this->db->where('status','Aktif');
			$query = $this->db->get();
			return $query->num_rows();
		}
		public function Jumlahnonaktif()
		{

			$this->db->select('*');
			$this->db->from('kandidat');
			$this->db->where('status','NonAktif');
			$query = $this->db->get();
			return $query->num_rows();
		}
}