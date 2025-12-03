<?php 
include '../backend/auth_check.php'; 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Sifu</title>
</head>
<body>
    
    <h1>Selamat Datang, <?php echo $_SESSION['username']; ?>!</h1>
    
    <p>Ini adalah halaman khusus admin/member.</p>

    <a href="../backend/logout.php">Logout</a>

</body>
</html>