<?php 
   class Chat_model extends CI_Model {
	
      public function GetDataPesan(){
        $data =$this->db->query("SELECT * FROM chat");
        return $data->result_array();
      }
      public function KirimPesan($data,$table)
	{
		return $this->db->insert($table,$data);
	}
  }
  ?>