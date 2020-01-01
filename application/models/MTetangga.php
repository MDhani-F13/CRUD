<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class MTetangga extends CI_model
{
	public function getData()
	{
		$data = $this->db->get('tetangga');
		return $data;
	}
	
	public function insert($data)
	{
		$this->db->insert('tetangga', $data);
	}

	public function change($data, $id)
	{
		$this->db->where('IDTETANGGA', $id);
		$this->db->update('tetangga', $data);
	}

	public function remove($id)
	{
		$this->db->where('IDTETANGGA', $id);
		$this->db->delete('tetangga');
	}


	
}

?>