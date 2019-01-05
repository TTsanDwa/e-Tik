<?php if ($this->session->flashdata('nomor') === null): ?>
	<div class="container-fluid">
		<div class="row justify-content-center my-5">		
			<div class="col-md-5">
				<div class="alert alert-danger">
					<h3>Anda Telah Merefresh Halaman !</h3>
					<p>Silahkan Melakukan Pemesanan Kembali Jika Anda Belum Mendapatkan Kode Pembayaran.</p>
				</div>
			</div>
		</div>
	</div>

<?php else: ?>

<div class="container-fluid">
	<div class="row justify-content-center my-5">
		
		<div class="col-md-5">
			<div class="alert alert-danger">
				<h3>PERINGATAN! JANGAN REFRESH HALAMAN !</h3>
				<p>Untuk Menghindari Kegagalan Sistem.</p>
			</div>
			<div class="card">
				<div class="card-body">
					<h1 class="text-success">SELAMAT!</h1>
					<h3>Anda Berhasil Melakukan Pemesanan Tiket</h3>
					<hr>
					<h5 class="text-danger text-center">Silahkan Lakukan Pembayaran Sesuai Total Berikut</h5>
					<br>
					<h3 class="text-center">BT09890273917</h3>
					<p class="text-center font-weight-bold mb-0">a/n PT.Kereta</p>
					<p class="text-center">BRI Kode Bank :001</p>
					<hr>

					<h5 class="text-center">Total Yang Harus Dibayar</h5>
					<h2 class="text-center" ><?= $this->session->flashdata('total') ?></h2>
					<br>
					<h5 class="text-center">Kode Pembayaran Anda</h5>
					<h2 class="text-center"><?= $this->session->flashdata('nomor') ?></h2>
					<br><br>
					<p class="text-danger">*Lakukan Konfirmasi Setelah Melakukan Pembayaran, Klik
						<a href="<?= base_url('konfirmasi') ?>">Konfirmasi Pembayaran</a>
					</p>
					<h4 class="text-center">TERIMA KASIH</h4>

				</div>
			</div>
		</div>
	</div>
</div>

<?php endif; ?>