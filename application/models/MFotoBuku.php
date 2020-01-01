<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class MFotoBuku extends CI_model
{
	public function getData()
	{
		$data = $this->db->get('fotobuku');
		return $data;
	}
	
	public function insert($data)
	{
		$this->db->insert('fotobuku', $data);
	}

	public function change($data, $id)
	{
		$this->db->where('ID_FOTOBUKU', $id);
		$this->db->update('fotobuku', $data);
	}

	public function remove($id)
	{
		$this->db->where('ID_FOTOBUKU', $id);
		$this->db->delete('fotobuku');
	}


	
}

?>