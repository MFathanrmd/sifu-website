<?php
// Aktifkan session
session_start();

// menghubungkan ke database
include 'koneksi.php';

// Tangkap data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Cari user di database berdasarkan username
$query = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $query);

// Cek apakah usernamenya ada
if(mysqli_num_rows($result) > 0){
    // Kalau ada, ambil datanya
    $data_user = mysqli_fetch_assoc($result);
    
    // Cek apakah passwordnya cocok
    if(password_verify($password, $data_user['password'])){
        
        // Mengecek apkh password sdh Benar (Tanda pengenal bahwa user sudah login)
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        
        // Alihkan ke halaman Dashboard
        header("Location: ../frontend/dashboard.php");
        
    } else {
        // Password Salah
        header("Location: ../frontend/login.php?pesan=gagal");
    }
} else {
    // Username Tidak Ditemukan
    header("Location: ../frontend/login.php?pesan=gagal");
}
?>