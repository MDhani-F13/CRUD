<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class MDetailSewaBuku extends CI_model
{
	public function getData()
	{
		$data = $this->db->get('detail_sewa1');
		return $data;
	}
	
	public function insert($data)
	{
		$this->db->insert('detail_sewa1', $data);
	}

	public function change($data, $id)
	{
		$this->db->where('iduser', $id);
		$this->db->update('detail_sewa1', $data);
	}

	public function remove($id)
	{
		$this->db->where('iduser', $id);
		$this->db->delete('detail_sewa1');
	}


	
}

?>