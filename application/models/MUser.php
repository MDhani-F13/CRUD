<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class MUser extends CI_model
{
	public function getData()
	{
		$data = $this->db->get('user');
		return $data;
	}
	
	public function insert($data)
	{
		$this->db->insert('user', $data);
	}

	public function change($data, $id)
	{
		$this->db->where('IDUSER', $id);
		$this->db->update('user', $data);
	}

	public function remove($id)
	{
		$this->db->where('IDUSER', $id);
		$this->db->delete('user');
	}


	
}

?>