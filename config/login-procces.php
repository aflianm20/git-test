<?php 

$username   = $_POST['username'];
$pass       = MD5($_POST['password']);

include 'koneksi.php';

$users = mysqli_query($connect, "SELECT * FROM user WHERE username='$username' AND password='$pass'");
$chek = mysqli_num_rows($users);
if($chek>0){
    session_start();
    $row = mysqli_fetch_array($users);

    if($row['hak']=="admin"){
        $_SESSION['hak'] = "admin";
        $_SESSION['first_name'] = $row['first_name'];
        $_SESSION['last_name'] = $row['last_name'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['jabatan'] = $row['jabatan'];
        $_SESSION['alamat'] = $row['alamat'];
        $_SESSION['deskripsi'] = $row['deskripsi'];
        $_SESSION['foto'] = $row['foto'];
        $_SESSION['instagram'] = $row['instagram'];
        echo "<script type='text/javascript'>
                    alert('Selamat Datang $username');
                    window.location='../index.php'
                    </script>";
    }
    
}else{
    echo "<script type='text/javascript'>
                    alert('Password Salah!');
                    window.location='../login.php'
                    </script>";
}

?>