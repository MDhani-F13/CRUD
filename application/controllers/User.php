<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class User extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('MUser', 'modal');
		$this->load->library('template');
	}

	public function index($value='')
	{
		$data = array('title' => 'Master User', 'datakategori' => $this->modal->getData());
		$this->template->admin('konten/user',$data);
	}

	public function simpan()
	{
		$idbuku = $this->input->post('IDUSER');
		$idrak = $this->input->post('IDWISHLIST');
		$isbncode = $this->input->post('IDKERANJANG');
		$judul = $this->input->post('IDTETANGGA');
		$pengarang = $this->input->post('IDRAK');
		$penerbit = $this->input->post('USERNAME');
		$jml_halaman = $this->input->post('PASSWORD');
		$tgl_terbit = $this->input->post('NAMA');
		$bahasa = $this->input->post('DESKRIPSI_PENGGUNA');
		$panjang = $this->input->post('NOMOR_HP');
		$lebar = $this->input->post('NOMOR_WA');
		$berat = $this->input->post('LINE');
		$jml_stock = $this->input->post('FOTO_KTP');
		$jml_stock_disewa = $this->input->post('LONG_POSISI');
        $deskripsi = $this->input->post('LAT_POSISI');
        $deskripsi1 = $this->input->post('DEPOSIT');
        $deskripsi2 = $this->input->post('MENERIMA_KTP');

		$data = array (
			'IDUSER' => $idbuku,
			'IDWISHLIST' => $idrak,
			'IDKERANJANG' => $isbncode,
			'IDTETANGGA' => $judul,
			'IDRAK' => $pengarang,
			'USERNAME' => $penerbit,
			'PASSWORD' => $jml_halaman,
			'NAMA' => $tgl_terbit,
			'DESKRIPSI_PENGGUNA' => $bahasa,
			'NOMOR_HP' => $panjang,
			'NOMOR_WA' => $lebar,
			'LINE' => $berat,
			'FOTO_KTP' => $jml_stock,
            'LONG_POSISI' => $jml_stock_disewa,
            'LAT_POSISI' => $deskripsi,
            'DEPOSIT' => $deskripsi1,
			'MENERIMA_KTP' => $deskripsi2);

			$this->modal->insert($data);
			$this->session->set_flashdata('sukses', "Data Berhasil Disimpan");
		redirect('User');
	}

	public function ubah($id=null)
	{
		$idbuku = $this->input->post('IDUSER');
		$idrak = $this->input->post('IDWISHLIST');
		$isbncode = $this->input->post('IDKERANJANG');
		$judul = $this->input->post('IDTETANGGA');
		$pengarang = $this->input->post('IDRAK');
		$penerbit = $this->input->post('USERNAME');
		$jml_halaman = $this->input->post('PASSWORD');
		$tgl_terbit = $this->input->post('NAMA');
		$bahasa = $this->input->post('DESKRIPSI_PENGGUNA');
		$panjang = $this->input->post('NOMOR_HP');
		$lebar = $this->input->post('NOMOR_WA');
		$berat = $this->input->post('LINE');
		$jml_stock = $this->input->post('FOTO_KTP');
		$jml_stock_disewa = $this->input->post('LONG_POSISI');
        $deskripsi = $this->input->post('LAT_POSISI');
        $deskripsi = $this->input->post('DEPOSIT');
        $deskripsi = $this->input->post('MENERIMA_KTP');

		$data = array (
			'IDUSER' => $idbuku,
			'IDWISHLIST' => $idrak,
			'IDKERANJANG' => $isbncode,
			'IDTETANGGA' => $judul,
			'IDRAK' => $penerbit,
			'USERNAME' => $jml_halaman,
			'PASSWORD' => $jml_halaman,
			'NAMA' => $tgl_terbit,
			'DESKRIPSI_PENGGUNA' => $bahasa,
			'NOMOR_HP' => $panjang,
			'NOMOR_WA' => $lebar,
			'LINE' => $berat,
			'FOTO_KTP' => $jml_stock,
            'LONG_POSISI' => $jml_stock_disewa,
            'LAT_POSISI' => $jml_stock_disewa,
            'DEPOSIT' => $jml_stock_disewa,
			'MENERIMA_KTP' => $deskripsi);


		$this->modal->change($data, $idbuku);
		$this->session->set_flashdata('sukses', "Data Berhasil Diupdate");
		redirect('User');
	}

	public function hapus($id)
	{
		$this->modal->remove($id);
		$this->session->set_flashdata('sukses', "Data Berhasil Dihapus");
		redirect('User');
	}
}

?>