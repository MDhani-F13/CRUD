<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class MItemKeranjang extends CI_model
{
	public function getData()
	{
		$data = $this->db->get('itemkeranjang');
		return $data;
	}
	
	public function insert($data)
	{
		$this->db->insert('itemkeranjang', $data);
	}

	public function change($data, $id)
	{
		$this->db->where('IDITEM_KERANJANG', $id);
		$this->db->update('itemkeranjang', $data);
	}

	public function remove($id)
	{
		$this->db->where('IDITEM_KERANJANG', $id);
		$this->db->delete('itemkeranjang');
	}


	
}

?>