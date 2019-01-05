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
	    </ul>
	    <span class="navbar-text">
	    	<a class='text-white' style="text-decoration:none" href="<?= base_url('logout') ?>">Logout</a>
	    </span>
	  </div>
	</nav>

	<div class="container-fluid my-5">
		<div class="row justify-content-center">
			<div class="col-md-4">
				<div class="card">
					<div class="card-header text-center text-white" style="background: linear-gradient(to right, #00994d, #00994d)">
						Ubah Stasiun
					</div>
					<div class="card-body">
						<form action="<?= base_url('ubahStasiun') ?>" method="POST">
							<input type="hidden" name="id" value="<?= $data_stasiun->id ?>">
							<div class="form-group">
								<label>Nama Stasiun</label>
								<input type="text" name="nama_stasiun" class="form-control" value="<?= $data_stasiun->nama_stasiun ?>">
							</div>

							<button class="btn btn-block text-white" style="background: linear-gradient(to right, #00994d, #00994d)">Ubah</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>