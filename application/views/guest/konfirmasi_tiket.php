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

                </tr>
              </thead>
    <tbody>
				<?php foreach ($tiket as $tk):?>
				<tr>
					<td><?=$tk["nomor_tiket"] ?></td>
					<td><?=$tk["no_transaksi"] ?></td>
					<td><?=$tk["total_transaksi"] ?></td>
					<td><?=$tk["status"] ?></td>
				</tr>
			<?php endforeach; ?>

</tbody>
</table>