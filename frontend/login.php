<!DOCTYPE html>
<html>
<head>
    <title>Login Game Sifu</title>
</head>
<body>
    <h2>Silakan Login</h2>
    <?php 
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "<p style='color:red'>Login Gagal! Username atau Password salah.</p>";
        } else if($_GET['pesan'] == "belum_login"){
            echo "<p style='color:red'>Anda harus login untuk mengakses dashboard.</p>";
        }
    }
    ?>

    <form action="../backend/proses_login.php" method="POST">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>
        
        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>
        
        <button type="submit">Masuk</button>
    </form>
</body>
</html>