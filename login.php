<?php
require 'function.php';

if(isset($_POST["login"])){
  session_start();
  $username = $_POST["username"];
  $password = $_POST["password"];
  $_SESSION["username1"] = $username;

  $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' AND password = '$password'");

  $cek = mysqli_num_rows($result);
  if($cek==1){
    $_SESSION['userweb']=$username;
    header("Location:dashboard.php");
    exit;
  } else{
    echo "<script>
        alert('Maaf Username atau Password salah !');
        </script>";
  }

  // //cek username
  // if(mysqli_num_rows($result) == 1 ){

  //   //cek password
  //   $row = mysqli_fetch_assoc($result);
  //   if(password_verivy($password, $row["password"]) ){
  //     header("Location: dashboard.php");
  //     exit;
  //   }
  // }
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
    <h4 class="text-center">LOGIN DETECTION OF REPRODUCTIVE SYSTEM DISEASES</h4>
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
  <button type="submit" name="login" class="btn btn-primary">Login</button>
</form>
    <div class="signup mt-2">
    <a href="signup.php"><button type="sign-up" class="btn btn-success">Sign Up</Button></a>
    </div>
    </div>
  </body>
</html>