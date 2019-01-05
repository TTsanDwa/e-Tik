<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-md-3">
				<div class="card my-5">
					<div class="card-header text-white text-center font-weight-bold" style="background: #00994d">
						Login
					</div>

					<div class="card-body">
						<form action="<?= base_url('prosesLogincus') ?>" method="POST">
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="username" placeholder="Username" class="form-control">
							</div>

							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" placeholder="Password" class="form-control">
							</div>

							<button class="btn btn-block text-white" style="background: #00994d">Login</button>
						</form>
					</div>
				</div>
			</div>
			
		</div>
	</div>


	<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>