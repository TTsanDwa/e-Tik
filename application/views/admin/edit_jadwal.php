<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Admin</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light text-white" style="background: linear-gradient(to right, #00994d, #00994d); box-shadow: 2px 2px 2px #00331a; padding: 10px;">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
	    <a class="navbar-brand text-white" href="#">Admin Panel</a>
	    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	      <li class="nav-item active">
	        <a class="nav-link text-white" href="<?= base_url('admin/dashboard/') ?>">Home <span class="sr-only">(current)</span></a>
	      </li>
	    </ul>
	    <span class="navbar-text ">
	    	<a class='text-white' style="text-decoration:none" href="<?= base_url('logout') ?>">Logout</a>
	    </span>
	  </div>
	</nav>

	<div class="container-fluid my-5">
		<div class="row justify-content-center">
			<div class="col-md-4">
				<div class="card">
					<div class="card-header text-center text-white" style="background: linear-gradient(to right, #00994d, #00994d)">
						Edit Jadwal
					</div>
					<div class="card-body">
						<form action="<?= base_url('editJadwal') ?>" method="POST">
							<input type="hidden" name="id" value="<?= $data_edit->id ?>">
							<div class="form-group">
								<label>
									Nama Kereta
								</label>
								<input type="text" name="nama_kereta" class="form-control" required value="<?= $data_edit->nama_kereta ?>">	
							</div>

							<div class="form-group">
								<label>
									Asal Stasiun
								</label>
								<select name="asal" class="form-control" required >
									<optgroup label="TERPILIH">
										<option selected value="<?= $data_edit->asal ?>"><?= $data_edit->Asal ?></option>
									</optgroup>
									<optgroup label="PILIHAN">
										<?php foreach ($stasiun as $st): ?>
											<option value="<?= $st->id ?>"><?= $st->nama_stasiun ?></option>p
										<?php endforeach ?>
									</optgroup>
								</select>
							</div>

							<div class="form-group">
								<label>
									Tujuan Stasiun
								</label>
								<select name="tujuan" class="form-control" required >
									<optgroup label="TERPILIH">
										<option selected value="<?= $data_edit->tujuan ?>"><?= $data_edit->Tujuan ?></option>
									</optgroup>
									<optgroup label="PILIHAN">
										<?php foreach ($stasiun as $st): ?>
											<option value="<?= $st->id ?>"><?= $st->nama_stasiun ?></option>p
										<?php endforeach ?>
									</optgroup>
								</select>
							</div>

							<div class="form-group">
								<label>
									Tanggal Berangkat
								</label>
								<?php $date = date_create($data_edit->tgl_berangkat); ?>
								<input type="datetime-local" name="tgl_berangkat" min="<?= date('Y-m-d\TH:i')?>" value="<?= date_format($date, 'Y-m-d\TH:i'); ?>" class="form-control" required>	
							</div>

							<div class="form-group">
								<label>
									Tanggal Sampai
								</label>
								<?php $date = date_create($data_edit->tgl_sampai) ?>
								<input type="datetime-local" name="tgl_sampai" min="<?= $data_edit->tgl_sampai ?>" value="<?= date_format($date, 'Y-m-d\TH:i')?>" class="form-control" required>	
							</div>

							<div class="form-group">
								<label>
									Kelas
								</label>
								<select name="kelas" class="form-control" required >
									<optgroup label="TERPILIH">
										<option selected value="<?= $data_edit->kelas ?>"><?= $data_edit->kelas ?></option>
									</optgroup>
									<optgroup label="PILIHAN">
										<option value="Ekonomi">Ekonomi</option>
										<option value="Eksekutif">Eksekutif</option>
										<option value="Bisnis">Bisnis</option>
									</optgroup>
								</select>
							</div>

							<button class="btn btn-success btn-block">Simpan</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>