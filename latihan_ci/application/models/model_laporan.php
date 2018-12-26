<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_laporan extends CI_model{


	public function get_all()
	{
		$query = $this->db->select("*")
				 ->from('laporan')
				 ->order_by('noid', 'DESC')
				 ->get();
		return $query->result();
	}

	public function simpan($data)
	{
		
		$query = $this->db->insert("laporan", $data);

		if($query){
			return true;
		}else{
			return false;
		}

	}

	public function edit($noid)
	{
		
		$query = $this->db->where("noid", $noid)
				->get("laporan");

		if($query){
			return $query->row();
		}else{
			return false;
		}

	}

	public function update($data, $id)
	{
		
		$query = $this->db->update("laporan", $data, $id);

		if($query){
			return true;
		}else{
			return false;
		}

	}

	public function hapus($id)
	{
		
		$query = $this->db->delete("laporan", $id);

		if($query){
			return true;
		}else{
			return false;
		}

	}


}