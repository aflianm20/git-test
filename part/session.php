<?php 
    session_start();

    if($_SESSION['username'] == ''){
        header("location: 403.php");
    }
?>