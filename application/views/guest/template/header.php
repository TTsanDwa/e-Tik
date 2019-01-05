<!DOCTYPE html>
<html>
<head>
	<title><?= $judul ?></title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light" style="background: linear-gradient(to right, #00994d, #00994d); box-shadow: 2px 2px 2px #00331a; padding: 10px;">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
	    <a class="navbar-brand text-white font-weight-bold" href="#">e-Tik</a>
	    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	      <li class="nav-item active">
	        <a class="nav-link text-white" href="<?= base_url() ?>">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link text-white" href="<?= base_url('konfirmasi') ?>">Konfirmasi Pembayaran</a>
	      </li>
	    </ul>
	    <?php if($this->session->userdata('masuk') != TRUE): ?>
		    <span class="navbar-text " style="word-spacing: -50px;">
		    	<a class='text-white' style="text-decoration:none " href="<?= base_url('logincus') ?>">Login</a>
		    </span>
		    <span class="navbar-text">
		    	<a class='text-white' style="text-decoration:none " href="<?= base_url('registrasi') ?>">Registrasi</a>
		    </span>
		<?php else: ?>
		    <span class="navbar-text">
		    	<a class='text-white' style="text-decoration:none " href="<?= base_url('logout') ?>">Logout</a>
		    </span>
		<?php endif; ?>
	  </div>
	</nav>