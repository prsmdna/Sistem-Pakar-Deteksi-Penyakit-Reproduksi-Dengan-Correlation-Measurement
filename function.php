<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "mental_ilness";

$conn = mysqli_connect($server, $user, $password, $database);

if ( ! $conn){
    die("Gagal terhubung dengan database :" . mysqli_connect_error());
}


function signup($data){
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    $nama = $data["nama"];
    $alamat = $data["alamat"];
    $umur = $data["umur"];

    //cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
    if(mysqli_fetch_assoc($result)){
        echo "<script>
        alert('username sudah tersedia');
        </script>";
        return false;
    }

    //cek konfirmasi password
    if($password2 !== $password){
        echo "<script>
        alert('konfirmasi password tidak sesuai');
        </script>";
        return false;
    }
        
    // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO users VALUES('','$username','$password','$nama','$alamat','$umur')");
    // mysqli_query($conn,"INSERT INTO diagnosa VALUES('','','$username','$nama','$umur','')");

    //membuat id_users otomatis
    $query=mysqli_query($conn, "SELECT max(id) as id_user FROM users");
    $result=mysqli_fetch_array($query);
    $id_users = $result['id_user'];
    mysqli_query($conn,"INSERT INTO diagnosa VALUES('','$id_users','$username','$nama','$umur','')");
    

    return mysqli_affected_rows($conn);
}

function update($data){
    global $conn;

    session_start();
    $username = $_SESSION["username1"];

    $nama = $data["nama"];
    $alamat = $data["alamat"];
    $umur = $data["umur"];

   

    // perbarui 
    mysqli_query($conn, "UPDATE users SET  nama = '$nama', alamat = '$alamat', umur = '$umur' WHERE username = '$username'");
    return mysqli_affected_rows($conn);
}

function delete($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM diagnosa WHERE id = $id");
    return mysqli_affected_rows($conn);
}
?>