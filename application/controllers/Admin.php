<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
	    parent::__construct();
	    //validasi jika user belum login
	    if($this->session->userdata('masuk') != TRUE){
	            $url=base_url('logincus');
	            redirect($url);
	        }
	    }

	public function report(){
        $data['judul'] = 'Laporan Transaksi Tiket Pemesanan';
        $data['laporan'] = $this->user_model->getLaporan();
        $this->load->view('laporan', $data);
    }

	public function logout(){
		session_destroy();
		redirect(base_url());
	}

	public function keHalamanDashboard(){
		if ($this->session->masuk == TRUE) {

			$data['stasiun'] = $this->M_Admin->getDataStasiun()->result();

			$this->load->view('admin/dashboard', $data);				
		} else {
			redirect(base_url('login'));
		}

	}

	public function keHalamanLaporan(){
		$data['laporan'] = $this->M_Admin->getLaporan()->result();

		$this->load->view('admin/laporan', $data);
	}

	public function tambah_stasiun(){

		$nama = $this->input->post('stasiun');

		$input = $this->M_Admin->tambah_stasiun($nama);

		redirect(base_url('admin/dashboard'));
	}

	public function hapus_stasiun($id){
		$delete = $this->M_Admin->delete_stasiun($id);

		redirect(base_url('admin/dashboard'));
	}

	public function keHalamanUbahStasiun($id){
		$data['data_stasiun'] = $this->M_Admin->getDataUbahStasiun($id)->row();

		$this->load->view('admin/ubah_stasiun', $data);
	}

	public function ubah_stasiun($value=''){
		$nama = $this->input->post('nama_stasiun');

		$ubah = $this->M_Admin->ubah_stasiun($nama);

		redirect(base_url('admin/dashboard'));
	}

	public function keHalamanKelolaJadwal(){
		$data['stasiun'] = $this->M_Admin->getDataStasiun()->result();

		$data['jadwal'] = $this->M_Admin->getJadwal()->result();

		$this->load->view('admin/kelola_jadwal', $data);
	}

	public function tambahJadwal(){
		$data = array(
			'nama_kereta' => $this->input->post('nama_kereta'),
			'asal' => $this->input->post('asal'),
			'tujuan' => $this->input->post('tujuan'),
			'tgl_berangkat' => $this->input->post('tgl_berangkat'),
			'tgl_sampai' => $this->input->post('tgl_sampai'),
			'kelas' => $this->input->post('kelas'),
			'harga' => $this->input->post('harga')
		);
		$this->M_Admin->tambah_jadwal($data);

		redirect(base_url('admin/dashboard/kelola-jadwal'));
	}
	public function hapusJadwal($id){
		$this->M_Admin->hapusJadwal($id);
		redirect(base_url('admin/dashboard/kelola-jadwal'));

	}

	public function keHalamanEditJadwal($id){
		$data['data_edit'] = $this->M_Admin->getDataEditJadwal($id)->row();
		$data['stasiun'] = $this->M_Admin->getDataStasiun()->result();

		$this->load->view('admin/edit_jadwal', $data);
	}

	public function edit_jadwal(){
		$data = array(
			'nama_kereta' => $this->input->post('nama_kereta'),
			'asal' => $this->input->post('asal'),
			'tujuan' => $this->input->post('tujuan'),
			'tgl_berangkat' => $this->input->post('tgl_berangkat'),
			'tgl_sampai' => $this->input->post('tgl_sampai'),
			'kelas' => $this->input->post('kelas')
		);

		$this->M_Admin->edit_jadwal($data);

		redirect(base_url('admin/dashboard/kelola-jadwal'));
	}
}
