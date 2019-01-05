<!DOCTYPE html>
<html>
<head>
	<title>Kelola Jadwal Admin</title>
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
	      <li class="nav-item active">
	        <a class="nav-link text-white" href="<?= base_url('admin/dashboard/kelola-jadwal') ?>">Kelola Jadwal </a>
	      </li>
	    </ul>
	    <span class="navbar-text">
	    	<a class='text-white' style="text-decoration:none " href="<?= base_url('logout') ?>">Logout</a>
	    </span>
	  </div>
	</nav>

	<div class="container-fluid my-5">
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header text-white" style="background: linear-gradient(to right, #00994d, #00994d)">
						Daftar Jadwal
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama kereta</th>
										<th>Asal</th>
										<th>Tujuan</th>
										<th>Tanggal Berangkat</th>
										<th>Tanggal Sampai</th>
										<th>Kelas</th>
										<th>Harga</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; ?>
									<?php foreach ($jadwal as $jd): ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $jd->nama_kereta ?></td>										
											<td><?= $jd->Asal ?></td>										
											<td><?= $jd->Tujuan ?></td>										
											<td><?= $jd->tgl_berangkat ?></td>										
											<td><?= $jd->tgl_sampai ?></td>										
											<td><?= $jd->kelas ?></td>
											<td>Rp <?= $jd->harga ?></td>
											<td>
												<div class="btn-group btn-group-sm">
													<a class="btn btn-danger" href="<?= base_url('hapusJadwal/'.$jd->id) ?>">Hapus</a>
													<a class="btn btn-primary" href="<?= base_url('admin/dashboard/editjadwal/'.$jd->id) ?>">Edit</a>
												</div>
											</td>									
										</tr>
									<?php endforeach ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<div class="card-header text-white" style="background: linear-gradient(to right, #00994d, #00994d)">
						Tambah Jadwal
					</div>
					<div class="card-body">
						<form action="<?= base_url('tambahJadwal') ?>" method="POST">
							<div class="form-group">
								<label>
									Nama Kereta
								</label>
								<input type="text" name="nama_kereta" placeholder="Nama Kereta" class="form-control" required>	
							</div>

							<div class="form-group">
								<label>
									Asal Stasiun
								</label>
								<select name="asal" class="form-control" required>
									<?php foreach ($stasiun as $st): ?>
										<option value="<?= $st->id ?>"><?= $st->nama_stasiun ?></option>p
									<?php endforeach ?>
								</select>
							</div>

							<div class="form-group">
								<label>
									Tujuan Stasiun
								</label>
								<select name="tujuan" class="form-control" required>
									<?php foreach ($stasiun as $st): ?>
										<option value="<?= $st->id ?>"><?= $st->nama_stasiun ?></option>p
									<?php endforeach ?>
								</select>
							</div>

							<div class="form-group">
								<label>
									Tanggal Berangkat
								</label>
								<input type="datetime-local" name="tgl_berangkat" min="<?= date('Y-m-d\TH:i')?>" value="<?= date('Y-m-d\TH:i')?>" class="form-control" required>	
							</div>

							<div class="form-group">
								<label>
									Tanggal Sampai
								</label>
								<input type="datetime-local" name="tgl_sampai" min="<?= date('Y-m-d\TH:i')?>" value="<?= date('Y-m-d\TH:i')?>" class="form-control" required>	
							</div>

							<div class="form-group">
								<label>
									Kelas
								</label>
								<select name="kelas" class="form-control" required>
									<option value="Ekonomi">Ekonomi</option>
									<option value="Eksekutif">Eksekutif</option>
									<option value="Bisnis">Bisnis</option>
								</select>
							</div>

							<div class="form-group">
								<label>
									Harga
								</label>
								<input type="number" name="harga"  placeholder="Harga"  class="form-control">
							</div>

							<button class="btn btn-success btn-block">Tambah Jadwal</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>