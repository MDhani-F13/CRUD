<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class MWishlist extends CI_model
{
	public function getData()
	{
		$data = $this->db->get('wishlist');
		return $data;
	}
	
	public function insert($data)
	{
		$this->db->insert('wishlist', $data);
	}

	public function change($data, $id)
	{
		$this->db->where('IDWISHLIST', $id);
		$this->db->update('wishlist', $data);
	}

	public function remove($id)
	{
		$this->db->where('IDWISHLIST', $id);
		$this->db->delete('wishlist');
	}


	
}

?>