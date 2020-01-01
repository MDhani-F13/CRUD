<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class MKeranjang extends CI_model
{
	public function getData()
	{
		$data = $this->db->get('keranjang');
		return $data;
	}
	
	public function insert($data)
	{
		$this->db->insert('keranjang', $data);
	}

	public function change($data, $id)
	{
		$this->db->where('IDKERANJANG', $id);
		$this->db->update('keranjang', $data);
	}

	public function remove($id)
	{
		$this->db->where('IDKERANJANG', $id);
		$this->db->delete('keranjang');
	}


	
}

?>