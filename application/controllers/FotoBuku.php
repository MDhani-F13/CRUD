<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class FotoBuku extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('MFotoBuku', 'modal');
		$this->load->library('template');
	}

	public function index($value='')
	{
		$data = array('title' => 'Master Buku', 'datakategori' => $this->modal->getData());
		$this->template->admin('konten/fotobuku',$data);
	}

	public function simpan()
	{
		$idfotobuku = $this->input->post('ID_FOTOBUKU');
		$idbuku = $this->input->post('idbuku');
		$fotobuku = $this->input->post('FOTOBUKU');
		

		$data = array (
			'ID_FOTOBUKU' => $idfotobuku,
			'idbuku' => $idbuku,
			'FOTOBUKU' => $fotobuku);

			$this->modal->insert($data);
			$this->session->set_flashdata('sukses', "Data Berhasil Disimpan");
		redirect('FotoBuku');
	}

	public function ubah($id=null)
	{
		$idfotobuku = $this->input->post('ID_FOTOBUKU');
		$idbuku = $this->input->post('idbuku');
		$fotobuku = $this->input->post('FOTOBUKU');
		

		$data = array (
			'ID_FOTOBUKU' => $idfotobuku,
			'idbuku' => $idbuku,
			'FOTOBUKU' => $fotobuku);

		$this->modal->change($data, $idfotobuku);
		$this->session->set_flashdata('sukses', "Data Berhasil Diupdate");
		redirect('FotoBuku');
	}

	public function hapus($id)
	{
		$this->modal->remove($id);
		$this->session->set_flashdata('sukses', "Data Berhasil Dihapus");
		redirect('FotoBuku');
	}
}

?>