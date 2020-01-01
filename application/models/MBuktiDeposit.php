<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class MBuktiDeposit extends CI_model
{
	public function getData()
	{
		$data = $this->db->get('buktideposit');
		return $data;
	}
	
	public function insert($data)
	{
		$this->db->insert('buktideposit', $data);
	}

	public function change($data, $id)
	{
		$this->db->where('IDBUKTI_DEPOSIT', $id);
		$this->db->update('buktideposit', $data);
	}

	public function remove($id)
	{
		$this->db->where('IDBUKTI_DEPOSIT', $id);
		$this->db->delete('buktideposit');
	}


	
}

?>