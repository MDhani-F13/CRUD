<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class MSewaBuku extends CI_model
{
	public function getData()
	{
		$data = $this->db->get('sewbuku');
		return $data;
	}
	
	public function insert($data)
	{
		$this->db->insert('sewbuku', $data);
	}

	public function change($data, $id)
	{
		$this->db->where('idsewa', $id);
		$this->db->update('sewbuku', $data);
	}

	public function remove($id)
	{
		$this->db->where('idsewa', $id);
		$this->db->delete('sewbuku');
	}


	
}

?>