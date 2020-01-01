<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class BuktiDeposit extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('MBuktiDeposit', 'modal');
		$this->load->library('template');
	}

	public function index($value='')
	{
		$data = array('title' => 'Master Bukti Transfer', 'datakategori' => $this->modal->getData());
		$this->template->admin('konten/bukti_deposit',$data);
	}

	public function simpan()
	{
		$idbuktideposit = $this->input->post('IDBUKTI_DEPOSIT ');
        $iduser = $this->input->post('iduser');
        $fotodeposit = $this->input->post('FOTO_DEPOSIT');
        $nominaldeposit = $this->input->post('NOMINAL_DEPOSIT');
		$data = array (
            'IDBUKTI_DEPOSIT' => $idbuktideposit,
            'iduser' => $iduser,
            'FOTO_DEPOSIT' => $fotodeposit,
			'NOMINAL_DEPOSIT' => $nominaldeposit);

			$this->modal->insert($data);
			$this->session->set_flashdata('sukses', "Data Berhasil Disimpan");
		redirect('BuktiDeposit');
	}

	public function ubah($id=null)
	{
		$idbuktideposit = $this->input->post('IDBUKTI_DEPOSIT ');
        $iduser = $this->input->post('iduser');
        $fotodeposit = $this->input->post('FOTO_DEPOSIT');
        $nominaldeposit = $this->input->post('NOMINAL_DEPOSIT');
		$data = array (
            'IDBUKTI_DEPOSIT' => $idbuktideposit,
            'iduser' => $iduser,
            'FOTO_DEPOSIT' => $fotodeposit,
			'NOMINAL_DEPOSIT' => $nominaldeposit);
            
		$this->modal->change($data, $idbuktideposit);
		$this->session->set_flashdata('sukses', "Data Berhasil Diupdate");
		redirect('BuktiDeposit');
	}

	public function hapus($id)
	{
		$this->modal->remove($id);
		$this->session->set_flashdata('sukses', "Data Berhasil Dihapus");
		redirect('BuktiDeposit');
	}
}

?>