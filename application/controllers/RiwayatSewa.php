<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class RiwayatSewa extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('MRiwayatSewa', 'modal');
		$this->load->library('template');
	}

	public function index($value='')
	{
		$data = array('title' => 'Master User', 'datakategori' => $this->modal->getData());
		$this->template->admin('konten/riwayat_sewa',$data);
	}

	public function simpan()
	{
		$idkategori = $this->input->post('IDSEWA');
		$nama_kategori = $this->input->post('IDBUKU');
		$data = array (
			'IDSEWA' => $idkategori,
			'IDBUKU' => $nama_kategori);

			$this->modal->insert($data);
			$this->session->set_flashdata('sukses', "Data Berhasil Disimpan");
		redirect('RiwayatSewa');
	}

	public function ubah($id=null)
	{
		$idkategori = $this->input->post('IDSEWA');
		$nama_kategori = $this->input->post('IDBUKU');
		$data = array (
			'IDSEWA' => $idkategori,
            'IDBUKU' => $nama_kategori);
            
		$this->modal->change($data, $idkategori);
		$this->session->set_flashdata('sukses', "Data Berhasil Diupdate");
		redirect('RiwayatSewa');
	}

	public function hapus($id)
	{
		$this->modal->remove($id);
		$this->session->set_flashdata('sukses', "Data Berhasil Dihapus");
		redirect('RiwayatSewa');
	}
}

?>