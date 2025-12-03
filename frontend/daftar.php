<!DOCTYPE html>
<html>
<head>
    <title>Daftar Game Sifu</title>
</head>
<body>
    <h2>Daftar Akun Baru</h2>
    
    <form action="../backend/proses_daftar.php" method="POST">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>
        
        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>
        
        <button type="submit">Daftar Sekarang</button>
    </form>
</body>
</html>