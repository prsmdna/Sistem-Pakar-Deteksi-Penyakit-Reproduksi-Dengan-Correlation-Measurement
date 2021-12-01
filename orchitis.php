<?php
include 'function.php';
session_start();
$username = $_SESSION["username1"];
// $sql=mysqli_query($conn, "SELECT * FROM diagnosa where username = '$username'");
// $data=mysqli_fetch_array($sql);
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
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>



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
  <h5 class="card-header" style="text-align: center;">Hasil Diagnosa Penyakit</h5>
  <br>
  <img src="https://www.medicaboo.com/blog/wp-content/uploads/2018/07/homeopathic-medicine-for-orchitis-inflammation-of-testicles-image.jpg"
   class="rounded mx-auto d-block" alt="Hasil Detection">
   <p>
   <h2 style="text-align: center;">Anda Terdekteksi Penyakit ORCHITIS</h2>
   <br>
   <h2 style="text-align: center;">SOLUSI</h2>
   <h4 style="text-align: center;">Minum paracetamol untuk meredakan demam dan rasa nyeri.
Kompres testis dengan kantong es 15-20 menit sehari.
Gunakan celana khusus yang bisa menyangga testis.
Tidak berhubungan seks sampai orchitis sembuh.
Hindari mengangkat benda berat untuk sementara.
Istirahat dengan cukup.</h4>
   </p>

   <br>
  <h5 class="display-5 text-center">Silahkan Simpan Data Penyakit Anda</h5>
  <form action="" method="POST">
  <div class="mb-6">
  <label for="tanggal" class="form-label text-start">Tanggal</label>
  <input type="date" name="tanggal" class="form-control" value=" ">
  </div>
  <div class="mb-6">
  <label for="nama" class="form-label text-start">Nama Lengkap</label>
  <input type="text" name="nama" class="form-control" value="">
  </div>
  <div class="mb-6">
  <label for="umur" class="form-label text-start">Umur</label>
  <input type="text" name="umur" class="form-control" value="">
  </div>
  <div class="mb-6">
  <label for="penyakit" class="form-label text-start">Penyakit</label>
  <input type="text" name="penyakit" class="form-control" value="">
  </div>
  <br>
  <button class="btn btn-primary" name="proses">Simpan</button>
  </form>

<?php
if(isset($_POST["proses"])){
  mysqli_query($conn,"UPDATE diagnosa, users SET diagnosa.tanggal = '$_POST[tanggal]', diagnosa.nama = '$_POST[nama]', 
  diagnosa.umur = '$_POST[umur]', diagnosa.penyakit = '$_POST[penyakit]' WHERE users.id = diagnosa.id_users AND users.username = '$username'");
  header("Location:dashboard.php");
}
?>


<!-- <?php echo $data['tanggal'] ?>
<?php echo $data['nama'] ?>
<?php echo $data['umur'] ?>
<?php echo $data['penyakit'] ?>
<?php echo $data['penyakit'] ?> -->

  </body>
</html>