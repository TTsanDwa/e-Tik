<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['transaksi'] = 'guest/keHalamanTransaksi';
$route['pesanTiket'] = 'guest/pesanTiket';
$route['pesan/(:any)'] = 'guest/pesan/$1';

$route['register'] = 'guest/register';

$route['editJadwal'] = 'admin/edit_jadwal';
$route['admin/dashboard/editjadwal/(:any)'] = 'admin/keHalamanEditJadwal/$1';
$route['hapusJadwal/(:any)'] = 'admin/hapusJadwal/$1';
$route['tambahJadwal'] = 'admin/tambahJadwal';
$route['admin/dashboard/kelola-jadwal'] = 'admin/keHalamanKelolaJadwal';
$route['admin/dashboard/laporan'] = 'admin/keHalamanLaporan';

$route['cariTiket'] = 'guest/cari_tiket';

$route['ubahStasiun'] = 'admin/ubah_stasiun';
$route['admin/dashboard/ubah/(:any)'] = 'admin/keHalamanUbahStasiun/$1';
$route['hapusStasiun/(:any)'] = 'admin/hapus_stasiun/$1';
$route['tambahStasiun'] = 'admin/tambah_stasiun'; 

$route['admin/dashboard'] = 'admin/keHalamanDashboard';
$route['guest/halaman_depan'] = 'guest/keHalamanDepan';
$route['guest/halaman_awal'] = 'guest/keHalamanAwal';

$route['logout'] = 'admin/logout';
$route['logoutcus'] = 'guest/logout';

$route['registrasi'] = 'guest/keHalamanRegistrasi';

$route['prosesLogin'] = 'admin/login';
$route['prosesLogincus'] = 'guest/logincus';
$route['login'] = 'admin/keHalamanLogin';
$route['logincus'] = 'guest/keHalamanLoginCus';

$route['konfirmasi'] = 'guest/keHalamanKonfirmasi';
$route['default_controller'] = 'guest/keHalamanDepan';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
