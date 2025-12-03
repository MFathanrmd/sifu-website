<?php
// Panggil koneksi database (karena satu folder, langsung panggil saja)
include 'koneksi.php';

// Tangkap data yang dikirim dari form frontend
// 'username' dan 'password' di dalam kurung siku [] harus sama dengan 'name' di HTML tadi
$username = $_POST['username'];
$password = $_POST['password'];

// Amankan password (Hashing)
// Kita tidak boleh simpan password mentah, harus diacak biar aman dari hacker
$password_acak = password_hash($password, PASSWORD_DEFAULT);

// Masukkan data ke database
$query = "INSERT INTO users (username, password) VALUES ('$username', '$password_acak')";

// Cek apakah berhasil
if (mysqli_query($conn, $query)) {
    // Jika berhasil, tampilkan pesan dan alihkan ke halaman login
    echo "<script>
            alert('Pendaftaran Berhasil! Silakan Login.');
            window.location.href = '../frontend/login.php';
          </script>";
} else {
    // Jika gagal, tampilkan errornya
    echo "Pendaftaran Gagal: " . mysqli_error($conn);
}
?>