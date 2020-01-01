<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class MRakBuku extends CI_model
{
	public function getData()
	{
		$data = $this->db->get('rakbuku');
		return $data;
	}
	
	public function insert($data)
	{
		$this->db->insert('rakbuku', $data);
	}

	public function change($data, $id)
	{
		$this->db->where('IDRAK', $id);
		$this->db->update('rakbuku', $data);
	}

	public function remove($id)
	{
		$this->db->where('IDRAK', $id);
		$this->db->delete('rakbuku');
	}


	
}

?>