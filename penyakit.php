
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="user.css">
    <title>Halaman Dashboard</title>
  </head>
  <body>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="#">SELAMAT DATANG | <b>DETECTION OF REPRODUCTIVE SYSTEM DISEASES</b></a>
    
    <button class="btn btn-danger" width="30%" type="submit">Sign Out</button>
    </div>
  </div>
</nav>
    <!-- End Navbar -->

    <!-- Menu Bar -->
    <div class="row no-gutters mt-5">
    <div class="col-md-2 bg-dark mt-2 pt-4">
    <ul class="nav flex-column">
  <li class="nav-item mb-1">
    <a class="nav-link active text-light" aria-current="page" href="dashboard.php">Profile</a><hr class="bg-white">
  </li>
  <li class="nav-item mb-1">
    <a class="nav-link text-light" href="penyakit.php">Daftar Penyakit</a><hr class="bg-white">
  </li>
  <li class="nav-item mb-1">
    <a class="nav-link text-light" href="gejala.php">DETECTION OF REPRODUCTIVE SYSTEM DISEASES</a><hr class="bg-white">
  </li>
</ul>
    </div>

<div class="col-md-10 mt-5">
    <div class="card">
  <h5 class="card-header">Daftar Penyakit</h5>
  <div class="container">
  <table class="table table-bordered table-hover">
  <br>
  <thead>
  <tr>
  <th>ID PENYAKIT</th>
  <th>NAMA PENYAKIT</th>
  </tr>
  </thead>

  <?php
  include 'function.php';
  $hasil = mysqli_query($conn, "select * from penyakit");
  while ($data = mysqli_fetch_array($hasil)){
    ?>
    <tbody>
    <tr>
    <td><?php echo $data['id_penyakit']?></td>
    <td><?php echo $data['nama_penyakit']?></td>
    </tr>
    </tbody>
    <?php
  }
  ?>
  </table>
  </div>
</div>

    </div>
    </div>
    <!-- End Bar-->
  </body>
</html>