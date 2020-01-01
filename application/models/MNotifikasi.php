<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class MNotifikasi extends CI_model
{
	public function getData()
	{
		$data = $this->db->get('notifikasi');
		return $data;
	}
	
	public function insert($data)
	{
		$this->db->insert('notifikasi', $data);
	}

	public function change($data, $id)
	{
		$this->db->where('IDNOTIFIKASI', $id);
		$this->db->update('notifikasi', $data);
	}

	public function remove($id)
	{
		$this->db->where('IDNOTIFIKASI', $id);
		$this->db->delete('notifikasi');
	}


	
}

?>