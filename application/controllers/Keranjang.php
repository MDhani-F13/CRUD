<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Keranjang extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('MKeranjang', 'modal');
		$this->load->library('template');
	}

	public function index($value='')
	{
		$data = array('title' => 'Master User', 'datakategori' => $this->modal->getData());
		$this->template->admin('konten/keranjang',$data);
	}

	public function simpan()
	{
		$idsewa = $this->input->post('IDKERANJANG');
		$tanggalsewa = $this->input->post('IDUSER');
		$tanggalkembali = $this->input->post('TGL_SEWABUKU');
		$idpenyedia = $this->input->post('TGL_KEMBALIBUKU');
		$hargasewa = $this->input->post('HARGATOTAL');

		$data = array (
			'IDKERANJANG' => $idsewa,
			'IDUSER' => $tanggalsewa,
			'TGL_SEWABUKU' => $tanggalkembali,
			'TGL_KEMBALIBUKU' => $idpenyedia,
			'HARGATOTAL' => $hargasewa);

			$this->modal->insert($data);
			$this->session->set_flashdata('sukses', "Data Berhasil Disimpan");
		redirect('Keranjang');
	}

	public function ubah($id=null)
	{
		$idsewa = $this->input->post('IDKERANJANG');
		$tanggalsewa = $this->input->post('IDUSER');
		$tanggalkembali = $this->input->post('TGL_SEWABUKU');
		$idpenyedia = $this->input->post('TGL_KEMBALIBUKU');
		$hargasewa = $this->input->post('HARGATOTAL');

		$data = array (
			'IDKERANJANG' => $idsewa,
			'IDUSER' => $tanggalsewa,
			'TGL_SEWABUKU' => $tanggalkembali,
			'TGL_KEMBALIBUKU' => $idpenyedia,
            'HARGATOTAL' => $hargasewa);
            
		$this->modal->change($data, $idsewa);
		$this->session->set_flashdata('sukses', "Data Berhasil Diupdate");
		redirect('Keranjang');
	}

	public function hapus($id)
	{
		$this->modal->remove($id);
		$this->session->set_flashdata('sukses', "Data Berhasil Dihapus");
		redirect('Keranjang');
	}
}

?>