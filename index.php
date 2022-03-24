<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>

<title>Halaman Sukses Login</title>
<link rel="icon" href="img/foto/logo.jpg">
<div align='center'>
   Selamat Datang, <b><?php echo $username;?></b> <a href="logout.php"><b>Logout</b></a>
</div>
<a href="formartikel.php">Lanjut untuk update Artikel</a><br><br>
<a href="formjadwal.php">Lanjut untuk update Kegiatan</a>