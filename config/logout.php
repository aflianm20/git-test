<?php 
    session_start();
    session_destroy();
    echo "<script type='text/javascript'>
                    alert('Berhasil Logout!');
                    window.location='../login.php'
                    </script>";
?>
