<?php
require 'function.php';

if(isset($_POST["register"])){

  if(signup($_POST) > 0){
    echo "<script>
    alert('user baru berhasil ditambahkan');
    </script>"; header("Location: login.php");
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

    <link rel="stylesheet" type="text/css" href="css.css">
    <title></title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    
    <div class="container bg-light">
    <h4 class="text-center">Register</h4>
    <hr>
    <form action="" method="POST">
    <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="username" name="username" class="form-control" id="username">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="password">
  </div>
  <div class="mb-3">
    <label for="password2" class="form-label">Konfirmasi Password</label>
    <input type="password" class="form-control" name="password2" id="password2">
  </div>
  <div class="mb-3">
    <label for="nama" class="form-label">Nama Lengkap</label>
    <input type="text" class="form-control" name="nama" id="nama">
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" name="alamat" id="alamat">
  </div>
  <div class="mb-3">
    <label for="umur" class="form-label">Umur</label>
    <input type="number" class="form-control" name="umur" id="umur">
  </div>
  <button type="submit" name="register" class="btn btn-primary">Register</button>
</form>
    
    </div>
  </body>
</html>