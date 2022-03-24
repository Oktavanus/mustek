<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
   require_once("koneksi.php");
?>

<title>Form Login</title>
<link rel="icon" href="img/foto/logo.jpg">
<div align='center'>
  <form action="proseslogin.php" method="post">
  <h1>Login Adminstrator</h1>
  <table>
  <tbody>
  <tr><td>Username</td><td> : <input name="username" type="text"></td></tr>
  <tr><td>Password</td><td> : <input name="password" type="password"></td></tr>
  <tr><td colspan="2" align="right"><input value="Login" type="submit"> <input value="Batal" type="reset"></td></tr>
  <tr></tr>
  </tbody>
  </table>
  </form>
</div>