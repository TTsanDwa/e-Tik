	<div class="jumbotron jumbotron-fluid"  style="background: linear-gradient(to right, #29ffc6, #20e3b2, #0cebeb);">
	  <div class="container">
	  	<div class="row text-white font-weight-bold">
	    	<div class="col-md-8">
	    		<br><br><br>
	   			<h1 class="display-4">Selamat Datang di <b>e-Tik</b></h1>
	    		<p class="lead">Pesan Tiket Keretamu Sekarang, Tanpa Antrian.</p>
	    	</div>
	    	<div class="col-md-4">
	    		<form action="<?= base_url('cariTiket') ?>" method="POST">
	    			<div class="form-group">
	    				<label>Stasiun Asal</label>
	    				<select name="asal" class="form-control">

	    					<<?php foreach ($stasiun as $st): ?>
	    						<option value="<?= $st->id ?>"><?= $st->nama_stasiun ?></option>			
	    					<?php endforeach ?>

	    				</select>
	    			</div>
	    			<div class="form-group">
	    				<label>Stasiun Tujuan</label>
	    				<select name="tujuan" class="form-control">
	    					<<?php foreach ($stasiun as $st): ?>
	    						<option value="<?= $st->id ?>"><?= $st->nama_stasiun ?></option>			
	    					<?php endforeach ?>
	    				</select>
	    			</div>

	    			<div class="form-group">
	    				<label>Tanggal Berangkat</label>
	    				<input type="date" name="tanggal" class="form-control" min="<?= date('Y-m-d')?>">
	    			</div>

	    			<div class="form-group">
	    				<label>Jumlah Penumpang</label>
	    				<select name="jumlah" class="form-control">
	    					<?php for ($i=1; $i <= 5 ; $i++): ?>
		    					<option value="<?= $i ?>"><?= $i ?> Penumpang</option>
		    				<?php endfor;?>
	    				</select>
	    			</div>

	    			<button class="btn btn-block text-white" style="background: #00994d">Cari Tiket</button>
	    		</form>
	    	</div>
	    </div>
	  </div>
	</div>
	<!-- CARI TIKET -->
	<div class="container">
		<hr>
		<?php if (!isset($tiket)): ?>
			
		<?php else: ?>

		<div class="table-responsive">
			<table class="table table-hover table-bordered">
				<thead class="text-white text-center" style="background: #00994d"> 
					<tr>
						<th>No</th>
						<th>Nama Kereta</th>
						<th>Tanggal Berangkat</th>
						<th>Tanggal Sampai</th>
						<th>Aksi</th>

					</tr>
				</thead>
				<tbody class="text-center">
					<?php if ($tiket == NULL): ?>
						<p class="text-center">Maaf tiket tidak tersedia</p>
					<?php endif ?>
					<?php $no = 1; ?>
					<?php foreach ($tiket as $tk):?>
						<tr>
							<td><?=$no++ ?></td>
							<td><?=$tk->nama_kereta ?></td>
							<td><?php $date = date_create($tk->tgl_berangkat); echo date_format($date, "d-m-y, h:i:s"); ?></td>
							<td><?php $date = date_create($tk->tgl_sampai); echo date_format( $date, "d-m-y, h:i:s"); ?></td>
							<td>
								<a class="btn text-white" href="<?= base_url('pesan/'.$tk->id.'?p='.$penumpang)?>" style="background: #00994d">Pesan</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
		<?php endif;	?>
	</div>
	