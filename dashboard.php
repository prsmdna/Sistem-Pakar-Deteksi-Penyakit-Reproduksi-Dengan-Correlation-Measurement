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
    <a class="navbar-brand text-light" href="dashboard.php">SELAMAT DATANG | <b>DETECTION OF REPRODUCTIVE SYSTEM DISEASES</b></a>
    
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
    <a class="nav-link text-light" href="gejala.php">DETECTION OF REPRODUCTIVE SYSTEM DISEASES</a><hr class="bg-white">
  </li>
</ul>
    </div>
    <div class="col-md-10 mt-5">
    <div class="card">
  <h5 class="card-header">PROFILE</h5>
  <div class="card-body">
    <img src="assets/img/profile.png" width="50px" height="50px">
    <br>
    
    <table class="table table-bordered table-hover">
  <br>
  <thead>
  <tr>
  <th>Nama Lengkap</th>
  <th>Alamat</th>
  <th>Umur</th>
  </tr>
  </thead>

  <?php
  include 'function.php';
  session_start();
  $username = $_SESSION["username1"];
  $hasil = mysqli_query($conn, "SELECT nama, alamat, umur FROM users where username = '$username'");
  while ($data = mysqli_fetch_array($hasil)){
    ?>
    <tbody>
    <tr>
    <td><?php echo $data['nama']?></td>
    <td><?php echo $data['alamat']?></td>
    <td><?php echo $data['umur']?></td>
    </tr>
    </tbody>
    <?php
  }
  ?>
  </table>
  <a class="btn btn-warning" href="update.php">Update Profil</a>
  <a class="btn btn-primary" href="riwayat_diagnosa.php">Riwayat Diagnosa</a>
 
  </div>
</div>
    </div>
    </div>
    <!-- End Bar-->
  </body>
</html>