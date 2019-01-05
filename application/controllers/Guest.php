<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends CI_Controller {

	public function keHalamanLoginCus(){
		$this->load->view('guest/logincus');
	}

	public function logincus(){
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);

		$cek = $this->M_Guest->cekLoginCus($data);

		if ($cek['level'] == 2) {
			$sess = array(
				'masuk' => TRUE
			);

			$this->session->set_userdata($sess);

			redirect(base_url('guest/halaman_depan'));

		} else if($cek['level'] == 1){
			$sess = array(
				'masuk' => TRUE
			);

			$this->session->set_userdata($sess);
			redirect(base_url('admin/dashboard'));
		}else{
			redirect(base_url('logincus'));
		}

	}

	public function logout(){
		session_destroy();
		redirect(base_url('guest/halaman_awal'));
	}

		public function keHalamanAwal(){
		$data['judul'] = 'Halaman Depan';
		$data['stasiun'] = $this->M_Guest->getDataStasiun()->result();

		$this->load->view('guest/template/header', $data);
		$this->load->view('guest/halaman_depan');
		$this->load->view('guest/template/footer');
	}
	
	public function keHalamanDepan(){
		$data['judul'] = 'Halaman Depan';
		$data['stasiun'] = $this->M_Guest->getDataStasiun()->result();

		$this->load->view('guest/template/header', $data);
		$this->load->view('guest/halaman_depan');
		$this->load->view('guest/template/footer');
	}

	public function keHalamanKonfirmasi(){
		$data['judul'] = 'Halaman Konfirmasi';
		$idkonfirmasi=$this->input->post('idkonfirmasi');

		if (!empty($idkonfirmasi)){
			$data['nomor_tiket'] = $idkonfirmasi;
			$data['tiket'] = $this->M_Guest->getInfoTiket($idkonfirmasi);
		}
		

		$this->load->view('guest/template/header', $data);
		$this->load->view('guest/halaman_konfirmasi');
		$this->load->view('guest/template/footer');
	}

	public function keHalamanRegistrasi(){
		$this->load->view('guest/registrasi');
	}

	public function cari_tiket(){
		$data = array(
			'asal' => $this->input->post('asal'),
			'tujuan' => $this->input->post('tujuan')
		);

		$data['tiket'] = $this->M_Guest->cari_tiket($data)->result();
		$data['penumpang'] = $this->input->post('jumlah');


		$data['judul'] = 'Halaman Depan';
		$data['stasiun'] = $this->M_Guest->getDataStasiun()->result();

		$this->load->view('guest/template/header', $data);
		$this->load->view('guest/halaman_depan');
		$this->load->view('guest/template/footer');
	}

	public function infoTiket($id){
		$data = array(
			'nomor_tiketr' => $this->input->post('idkonfirmasi')
		);

		$data['tiket'] = $this->M_Guest->get($id);

		$this->load->view('guest/template/header', $data);
		$this->load->view('guest/halaman_konfirmasi');
		$this->load->view('guest/template/footer');

	}

	public function pesan($id){
		if($this->session->userdata('masuk') != TRUE){
            $url=base_url('logincus');
            redirect($url);
        }

		$data['judul'] = 'Formulir Data Diri';

		$data['info'] = $this->M_Guest->getDataInfoPesan($id)->row();
		$data['id_jadwal'] = $id;

		$this->load->view('guest/template/header', $data);
		$this->load->view('guest/data_diri');
		$this->load->view('guest/template/footer');
	}

	public function registrasi(){
		$this->load->view('guest/template/header', $data);
		$this->load->view('guest/registrasi');
		$this->load->view('guest/template/footer');
	}

	public function register(){
		$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'level' => '2',
			);

			$this->M_Guest->insertUser($data);

		redirect('logincus');
	}

	public function pesanTiket(){
		$penumpang = $this->input->post('penumpang');

		//Generate Nomor Transaksi
		$cek = $this->M_Guest->getTransaksi()->num_rows()+1;

		$no_tiket = 'ETK00'.$cek;
		$no_transaksi = 'BT007'.$cek;
		$harga = $this->input->post('harga');
		$total_transaksi = $penumpang*$harga;

		//Input Pembayaran
		$data = array(
			'nomor_tiket' => $no_tiket,
			'no_transaksi' => $no_transaksi,
			'total_transaksi' => $total_transaksi,
			'status' => 0
			 );

		$this->M_Guest->insertTransaksi($data);


		//Generate Nomor Tiket
		$cek = $this->M_Guest->getTiket()->num_rows()+1;

		

		//Input data penumpang
		for ($i=1; $i <= $penumpang ; $i++) { 
			$data = array(
				'nomor_tiket' => $no_tiket,
				'nama' => $this->input->post('nama'.$i),
				'no_identitas' => $this->input->post('identitas'.$i), 
			);

			$this->M_Guest->insertPenumpang($data);
		}

		//INput data pemesan
		$data = array(
			'nomor_tiket' => $no_tiket,
			'id_jadwal' => $this->input->post('id_jadwal'), 
			'nama_pemesan' => $this->input->post('nama_pemesan'), 
			'email' => $this->input->post('email'), 
			'no_telepon' => $this->input->post('no_telp'), 
			'alamat' => $this->input->post('alamat'), 
		);

		$this->M_Guest->insertPemesan($data);


		$this->session->set_flashdata('nomor', $no_transaksi);
		$this->session->set_flashdata('total', $total_transaksi);

		redirect('transaksi', $total_transaksi);
		
	}

	public function keHalamanTransaksi(){
		$data['judul'] = 'Konfirmasi Pembayaran';

		$this->load->view('guest/template/header', $data);
		$this->load->view('guest/template/footer');
		$this->load->view('guest/transaksi');
	}

	public function updatestatus($id){
		$ubah = $this->M_Guest->updatestatus($id);

		redirect(base_url('konfirmasi'));

	}

	public function cetak(){
        $data['judul'] = 'Cetak Tiket';
        $data['tiket'] = $this->M_Guest->getTiket();
        $this->load->view('guest/konfirmasi_tiket', $data);
    }


}
