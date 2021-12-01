<?php
require 'function.php';

$id = $_GET['id'];
if(delete($id) > 0){
    echo "<script>alert('Data berhasil dihapus'); 
    document.location.href = 'riwayat_diagnosa.php';
    </script>";
    
} else{
    echo "<script>alert ('data gagal dihapus')</script>";
}


?>