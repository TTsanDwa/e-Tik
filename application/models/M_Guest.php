<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Guest extends CI_Model {

	public function cekLoginCus($data){
		return $this->db->get_where('user', $data)->row_array();
	}

	public function cekLoginAdmin($data){
		return $this->db->get_where('user', $data)->num_rows();
	}

	public function getDataStasiun(){
		return $this->db->get('stasiun');
	}

	public function getDataTiket(){
		return $this->db->get('tiket');
	}

	public function getInfoTiket($id){
		$this->db->from('transaksi');
    	return $this->db->where('no_transaksi', $id)->limit(1)->get()->row_array();
	}

	public function cari_tiket($data){
		$this->db->select('jadwal.*, Asal.nama_stasiun AS Asal, Tujuan.nama_stasiun as Tujuan');
		$this->db->where($data);
		$this->db->like('tgl_berangkat', $this->input->post('tanggal'));
		$this->db->from('jadwal');
		$this->db->join('stasiun as Asal','jadwal.asal = Asal.id', 'left');
		$this->db->join('stasiun as Tujuan','jadwal.tujuan = Tujuan.id', 'left');
		return $this->db->get();
	}
	/*public function cari_tiket($id){
		$this->db->where('transaksi.id', $id)
		return $this->db->get('transaksi');
	}*/

	public function getDataInfoPesan($id){
		$this->db->select('jadwal.*, Asal.nama_stasiun AS Asal, Tujuan.nama_stasiun as Tujuan');
		$this->db->where('jadwal.id', $id);
		$this->db->join('stasiun as Asal','jadwal.asal = Asal.id', 'left');
		$this->db->join('stasiun as Tujuan','jadwal.tujuan = Tujuan.id', 'left');
		return $this->db->get('jadwal');
	}

	public function getTiket(){
		return $this->db->get('tiket');
	}

	public function insertPenumpang($data){
		return $this->db->insert('penumpang', $data);
	}

	public function insertUser($data){
		return $this->db->insert('user', $data);
	}

	public function insertPemesan($data){
		return $this->db->insert('tiket', $data);
	}

	public function insertTransaksi($data){
		return $this->db->insert('transaksi', $data);
	}

	public function getTransaksi(){
		return $this->db->get('transaksi');
	}

	public function cekInformasi($data){
		return $this->db->get_where('tiket', $data)->num_rows();
	}

	public function updatestatus($id){
		$data = array(
			'status' => 1,
		);

		$this->db->where('id', $id);
		return $this->db->update('transaksi', $data);
	}
	
}
