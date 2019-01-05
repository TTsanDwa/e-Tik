<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Admin</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light " style="background: linear-gradient(to right, #00994d, #00994d); box-shadow: 2px 2px 2px #00331a; padding: 10px;">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
	    <a class="navbar-brand text-white" href="#">Admin Panel</a>
	    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	      <li class="nav-item active">
	        <a class="nav-link text-white" href="<?= base_url('admin/dashboard') ?>">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link text-white" href="<?= base_url('admin/dashboard/kelola-jadwal') ?>">Kelola Jadwal </a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link text-white" href="<?= base_url('admin/dashboard/laporan') ?>">Laporan Transaksi </a>
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
						Daftar Stasiun
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Stasiun</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; ?>
									<?php foreach ($stasiun as $st): ?>
										
									<tr>
										<td><?= $no++ ?></td>
										<td><?= $st->nama_stasiun ?></td>
										<td>
											<a class="text-danger" href="<?= base_url('hapusStasiun/'.$st->id) ?>">Hapus</a>
											<a href="<?= base_url('admin/dashboard/ubah/'.$st->id) ?>">Ubah</a>
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
						Tambah Stasiun
					</div>
					<div class="card-body">
						<form action="<?= base_url('tambahStasiun') ?>" method="POST">
							<div class="form-group">
								<label>
									Nama Stasiun
								</label>
								<input type="text" name="stasiun" class="form-control" placeholder="Nama Stasiun">	
							</div>

							<button class="btn btn-success btn-block">Tambah</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>