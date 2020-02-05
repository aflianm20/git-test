<?php 
// koneksi database
include 'koneksi.php';
 
if(isset($_POST['simpan'])){
    

    $id_kry = $_POST['id'];
    $gaji_kry = $_POST['gaji_kry'];
    $jenis_kry = $_POST['jenis_kry'];
    $alamat_kry = $_POST['alamat_kry'];

    $results = mysqli_query($connect, "UPDATE data_karyawan SET gaji_kry='$gaji_kry',jenis_kry='$jenis_kry', alamat_kry='$alamat_kry'
                                        WHERE id_kry=$id_kry");

                                    
echo "<script type='text/javascript'>
alert('Data Berhasil Diubah!');
window.location='../data-karyawan.php'
</script>";
}
 
?>