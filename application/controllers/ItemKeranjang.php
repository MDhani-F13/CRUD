<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class ItemKeranjang extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('MItemKeranjang', 'modal');
		$this->load->library('template');
	}

	public function index($value='')
	{
		$data = array('title' => 'Master User', 'datakategori' => $this->modal->getData());
		$this->template->admin('konten/itemkeranjang',$data);
	}

	public function simpan()
	{
		$idsewa = $this->input->post('IDITEM_KERANJANG');
		$tanggalsewa = $this->input->post('IDKERANJANG');
		$tanggalkembali = $this->input->post('IDBUKU');
		$idpenyedia = $this->input->post('JUMLAHBUKU');
		$hargasewa = $this->input->post('HARGA_PERHARI');

		$data = array (
			'IDITEM_KERANJANG' => $idsewa,
			'IDKERANJANG' => $tanggalsewa,
			'IDBUKU' => $tanggalkembali,
			'JUMLAHBUKU' => $idpenyedia,
			'HARGA_PERHARI' => $hargasewa);

			$this->modal->insert($data);
			$this->session->set_flashdata('sukses', "Data Berhasil Disimpan");
		redirect('ItemKeranjang');
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
		redirect('ItemKeranjang');
	}

	public function hapus($id)
	{
		$this->modal->remove($id);
		$this->session->set_flashdata('sukses', "Data Berhasil Dihapus");
		redirect('ItemKeranjang');
	}
}

?>