<!DOCTYPE html>
<html>
<head>
    <title>Laporan</title>
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
    <div class="container">
    <h1>Daftar Transaksi</h1>
    <div class="row mt-2">
        <div class="col-md-12">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">no_transaksi</th>
                  <th scope="col">nama_pemesan</th>
                  <th scope="col">email</th>
                  <th scope="col">no_telepon</th>
                  <th scope="col">total_transaksi</th>
                  <th scope="col">status</th>
                </tr>
              </thead>
    <tbody>
        <?php foreach($laporan as $r){
        ?>
            <tr>
            <td><?php echo $r->id; ?></td>
            <td><?php echo $r->no_transaksi; ?></td>
            <td><?php echo $r->nama_pemesan; ?></td>
            <td><?php echo $r->email; ?></td>
            <td><?php echo $r->no_telepon; ?></td>
            <td><?php echo $r->total_transaksi; ?></td>
            <td><?php echo $r->status; ?></td>
        </tr>
           <?php } ?>
    </tbody>
    </table>
</body>
</html>