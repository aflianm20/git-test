<?php 

    if(isset($_POST['submit'])){
        $nik_kry = $_POST['nik_kry'];
        $nama_kry = $_POST['nama_kry'];
        $gaji_kry = $_POST['gaji_kry'];
        $jenis_kry = $_POST['jenis_kry'];
        $alamat_kry= $_POST['alamat_kry'];
        

        include ('koneksi.php');

        $query = mysqli_query($connect, "INSERT INTO data_karyawan VALUES(NULL, '$nik_kry','$nama_kry','$gaji_kry','$jenis_kry','$alamat_kry')");
        if ($query){
            echo "<script type='text/javascript'>
                    alert('Berhasil Menambahkan data!');
                    window.location='../add.php'
                    </script>";
        }else{
            echo "<script type='text/javascript'>
                    alert('Gagal Menambahkan data!');
                    window.location='../add.php'
                    </script>";
        }

    }

?>