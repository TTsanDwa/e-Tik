<div class="container-fluid">
	<div class="row justify-content-center my-5">
		<div class="col-md-5">
			<div class="card">
				<div class="card-header bg-dark text-white text-center">
					Konfirmasi Pembayaran
				</div>
				<div class="card-body">
					<form method="POST">
						<div class="form-group">
							<label>Kode Booking</label>
							<input name="idkonfirmasi" type="text" class="form-control" placeholder="Kode Booking">
						</div>
						
						<button class="btn btn-dark float-right text-white">Cek Kode Booking</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<h1>Data Booking</h1>
    <div class="row mt-2">
        <div class="col-md-12">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">Nomor Tiket</th>
                  <th scope="col">Nomor Transaksi</th>
                  <th scope="col">Total Transaksi</th>
                  <th scope="col">Status</th>
                  <th scope="col">Konfirmasi</th>
                  <!-- <th scope="col">Cetak</th> -->

                </tr>
              </thead>
    <tbody>
				<?php if(!empty($tiket)): ?>
				<tr>
					<td><?=$tiket["nomor_tiket"] ?></td>
					<td><?=$tiket["no_transaksi"] ?></td>
					<td><?=$tiket["total_transaksi"] ?></td>
					<td><?=$tiket["status"] ?></td>
					<td>
						<a class="btn btn-primary" href="<?= base_url('guest/updatestatus/'.$tiket["id"])?>">Konfirmasi</a>
					</td>
					<!-- <td>
						<a class="btn btn-primary" href="<?= base_url('guest/cetak/'.$tiket["id"])?>">Cetak</a>
					</td> -->
				</tr>
			<?php endif; ?>

</tbody>

</table>
</div>
</div>
</div>