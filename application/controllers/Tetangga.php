<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Tetangga extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('MTetangga', 'modal');
		$this->load->library('template');
	}

	public function index($value='')
	{
		$data = array('title' => 'Master User', 'datakategori' => $this->modal->getData());
		$this->template->admin('konten/tetangga',$data);
	}

	public function simpan()
	{
		$idkategori = $this->input->post('IDTETANGGA');
        $nama_kategori = $this->input->post('IDUSER');
        $list_pengguna = $this->input->post('LISTIDPENGGUNA');
		$data = array (
			'IDTETANGGA' => $idkategori,
            'IDUSER' => $nama_kategori,
            'LISTIDPENGGUNA' => $list_pengguna);

			$this->modal->insert($data);
			$this->session->set_flashdata('sukses', "Data Berhasil Disimpan");
		redirect('Tetangga');
	}

	public function ubah($id=null)
	{
		$idkategori = $this->input->post('IDTETANGGA');
        $nama_kategori = $this->input->post('IDUSER');
        $list_pengguna = $this->input->post('LISTIDPENGGUNA');
		$data = array (
			'IDTETANGGA' => $idkategori,
            'IDUSER' => $nama_kategori,
            'LISTIDPENGGUNA' => $list_pengguna);

		$this->modal->change($data, $idkategori);
		$this->session->set_flashdata('sukses', "Data Berhasil Diupdate");
		redirect('Tetangga');
	}

	public function hapus($id)
	{
		$this->modal->remove($id);
		$this->session->set_flashdata('sukses', "Data Berhasil Dihapus");
		redirect('Tetangga');
	}
}

?>