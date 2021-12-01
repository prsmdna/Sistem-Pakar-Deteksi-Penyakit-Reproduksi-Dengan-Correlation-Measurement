<?php
require 'function.php';

if(isset($_POST["simpan"])){

  if(update($_POST) > 0){
    header("Location: dashboard.php");
  } else{
    echo mysqli_error($conn);
  } 
}
?>

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
    <a class="navbar-brand text-light" href="dashboard.php">SELAMAT DATANG | <b>MENTAL ILLNESS DETECTOR</b></a>
    
    <a href="logout.php"><button class="btn btn-danger" width="30%" type="submit">Sign Out</button></a>
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
    <a class="nav-link text-light" href="gejala.php">Mental Ilness Detector</a><hr class="bg-white">
  </li>
</ul>
    </div>
    <div class="col-md-10 mt-5">
    <div class="card">
  <h5 class="card-header">UPDATE PROFILE</h5>
  <div class="card-body">
    <img src="assets/img/profile.png" width="50px" height="50px">
    <br><br>
    
<!-- -->
    <div class="container">
    <form action="" method="POST">

    <div>
    <label for="nama" class="form-label">Nama Lengkap</label>
    <input type="text" name="nama" class="form-control" id="nama">
    </div>

    <div>
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" name="alamat" class="form-control" id="alamat">
    </div>

    <div>
    <label for="umur" class="form-label">Umur</label>
    <input type="number" name="umur" class="form-control" id="umur">
    </div>
    <br>
    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>
    </div>
<!-- -->

 
  </div>
</div>
    </div>
    </div>
    <!-- End Bar-->
  </body>
</html>