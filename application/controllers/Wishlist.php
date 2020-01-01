<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Wishlist extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('MWishlist', 'modal');
		$this->load->library('template');
	}

	public function index($value='')
	{
		$data = array('title' => 'Master User', 'datakategori' => $this->modal->getData());
		$this->template->admin('konten/wishlist',$data);
	}

	public function simpan()
	{
		$idkategori = $this->input->post('IDWISHLIST');
        $nama_kategori = $this->input->post('IDBUKU');
        $list_pengguna = $this->input->post('IDUSER');
		$data = array (
			'IDWISHLIST' => $idkategori,
            'IDBUKU' => $nama_kategori,
            'IDUSER' => $list_pengguna);

			$this->modal->insert($data);
			$this->session->set_flashdata('sukses', "Data Berhasil Disimpan");
		redirect('Wishlist');
	}

	public function ubah($id=null)
	{
		$idkategori = $this->input->post('IDWISHLIST');
        $nama_kategori = $this->input->post('IDBUKU');
        $list_pengguna = $this->input->post('IDUSER');
		$data = array (
			'IDWISHLIST' => $idkategori,
            'IDBUKU' => $nama_kategori,
            'IDUSER' => $list_pengguna);

		$this->modal->change($data, $idkategori);
		$this->session->set_flashdata('sukses', "Data Berhasil Diupdate");
		redirect('Wishlist');
	}

	public function hapus($id)
	{
		$this->modal->remove($id);
		$this->session->set_flashdata('sukses', "Data Berhasil Dihapus");
		redirect('Wishlist');
	}
}

?>