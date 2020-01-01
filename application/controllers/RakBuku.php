<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class RakBuku extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('MRakBuku', 'modal');
		$this->load->library('template');
	}

	public function index($value='')
	{
		$data = array('title' => 'Master User', 'datakategori' => $this->modal->getData());
		$this->template->admin('konten/rak_buku',$data);
	}

	public function simpan()
	{
		$idbuktideposit = $this->input->post('IDRAK ');
        $iduser = $this->input->post('IDUSER');
        $fotodeposit = $this->input->post('LONG_RAK1');
        $nominaldeposit = $this->input->post('LAT_RAK1');
        $fotodeposit = $this->input->post('LONG_RAK2');
        $nominaldeposit = $this->input->post('LATRAK1');
        
        $data = array (
            'IDRAK' => $idbuktideposit,
            'IDUSER' => $iduser,
            'LONG_RAK1' => $fotodeposit,
            'LAT_RAK1' => $fotodeposit,
            'LONG_RAK2' => $fotodeposit,
			'LATRAK1' => $nominaldeposit);

			$this->modal->insert($data);
			$this->session->set_flashdata('sukses', "Data Berhasil Disimpan");
		redirect('RakBuku');
	}

	public function ubah($id=null)
	{
		$idbuktideposit = $this->input->post('IDRAK ');
        $iduser = $this->input->post('IDUSER');
        $fotodeposit = $this->input->post('LONG_RAK1');
        $nominaldeposit = $this->input->post('LAT_RAK1');
        $fotodeposit = $this->input->post('LONG_RAK2');
        $nominaldeposit = $this->input->post('LATRAK1');
        
        $data = array (
            'IDRAK' => $idbuktideposit,
            'IDUSER' => $iduser,
            'LONG_RAK1' => $fotodeposit,
            'LAT_RAK1' => $fotodeposit,
            'LONG_RAK2' => $fotodeposit,
			'LATRAK1' => $nominaldeposit);
            
		$this->modal->change($data, $idbuktideposit);
		$this->session->set_flashdata('sukses', "Data Berhasil Diupdate");
		redirect('RakBuku');
	}

	public function hapus($id)
	{
		$this->modal->remove($id);
		$this->session->set_flashdata('sukses', "Data Berhasil Dihapus");
		redirect('RakBuku');
	}
}

?>