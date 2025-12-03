<?php
session_start();

if($_SESSION['status'] != "login"){
    header("Location: ../frontend/login.php?pesan=belum_login");
    exit(); // Stop script di sini
}
?>