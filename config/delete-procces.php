<?php

include 'koneksi.php';


$id = $_GET['id'];

$query = mysqli_query($connect, "DELETE FROM data_karyawan WHERE $id=id_kry");

if($query){

    echo "<script type='text/javascript'>
    alert('Berhasil Menghapus data!');
    window.location='../data-karyawan.php'
    </script>";
}else{
    echo "<script type='text/javascript'>
    alert('Gagal Menghapus data!');
    window.location='../data-karyawan.php'
    </script>";
}    

?>