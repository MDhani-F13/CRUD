<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class MRiwayatSewa extends CI_model
{
	public function getData()
	{
		$data = $this->db->get('listsewa_buku');
		return $data;
	}
	
	public function insert($data)
	{
		$this->db->insert('listsewa_buku', $data);
	}

	public function change($data, $id)
	{
		$this->db->where('IDSEWA', $id);
		$this->db->update('listsewa_buku', $data);
	}

	public function remove($id)
	{
		$this->db->where('IDSEWA', $id);
		$this->db->delete('listsewa_buku');
	}


	
}

?>