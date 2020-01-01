<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class DetailSewaBuku extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('MDetailSewaBuku', 'modal');
		$this->load->library('template');
	}

	public function index($value='')
	{
		$data = array('title' => 'Master Transaksi', 'datakategori' => $this->modal->getData());
		$this->template->admin('konten/detail_sewa',$data);
	}

	public function simpan()
	{
		$idsewa = $this->input->post('idsewa');
		$iduser = $this->input->post('iduser');
		$data = array (
			'idsewa' => $idsewa,
			'iduser' => $iduser);

			$this->modal->insert($data);
			$this->session->set_flashdata('sukses', "Data Berhasil Disimpan");
		redirect('DetailSewaBuku');
	}

	public function ubah($id=null)
	{
		$idsewa = $this->input->post('idsewa');
		$iduser = $this->input->post('iduser');
		$data = array (
			'idsewa' => $idsewa,
            'iduser' => $iduser);
            
		$this->modal->change($data, $idsewa);
		$this->session->set_flashdata('sukses', "Data Berhasil Diupdate");
		redirect('DetailSewaBuku');
	}

	public function hapus($id)
	{
		$this->modal->remove($id);
		$this->session->set_flashdata('sukses', "Data Berhasil Dihapus");
		redirect('DetailSewaBuku');
	}
}

?>