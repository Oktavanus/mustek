<!DOCTYPE html>
<html>
<head>
  <title>Museum Tekstil Jakarta</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="img/home/logo.jpg">
  <!-- load file  -->
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/materialize.css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

  <!-- navbar -->
    <nav class="menu-header z-depth-0">
        <div class="nav-wrapper">
           <a href="home.php" class="brand-logo">Museum Tekstil</a>
           <a href="home.php" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

        <!-- Dropdown Structure -->
        <ul id='dropdown1' class='dropdown-content'>
          <li><a href="tentang1.php">Dinas Pariwisata & Kebudayaan</a></li>
          <li class="divider" tabindex="-3"></li>
          <li><a href="tentang3.php">Hubungi Kami</a></li>
          <li class="divider" tabindex="-3"></li>
        </ul>
        <!-- akhir dropdown -->

        <!-- Dropdown mobile Structure -->
        <ul id='dropdown2' class='dropdown-content'>
          <li><a href="tentang1.php">Dinas Pariwisata & Kebudayaan</a></li>
          <li class="divider" tabindex="-3"></li>
          <li><a href="tentang3.php">Hubungi Kami</a></li>
          <li class="divider" tabindex="-3"></li>
        </ul>
        <!-- akhir dropdown -->

        <!-- Dropdown Structure -->
        <ul id='dropdown3' class='dropdown-content'>
          <li><a href="koleksi.php">Menghias Wastra, Teknik Tenun</a></li>
          <li class="divider" tabindex="-3"></li>
          <li><a href="koleksi2.php">Menghias Wastra, Teknik Bukan Tenun</a></li>
          <li class="divider" tabindex="-3"></li>
          <li><a href="koleksi3.php">Busana, Dijahit Sesuai Bentuk Tubuh</a></li>
          <li class="divider" tabindex="-3"></li>
        </ul>
        <!-- akhir dropdown -->

        <!-- Dropdown mobile Structure -->
        <ul id='dropdown4' class='dropdown-content'>
          <li><a href="koleksi.php">Menghias Wastra, Teknik Tenun</a></li>
          <li class="divider" tabindex="-3"></li>
          <li><a href="koleksi2.php">Menghias Wastra, Teknik Bukan Tenun</a></li>
          <li class="divider" tabindex="-3"></li>
          <li><a href="koleksi3.php">Busana, Dijahit Sesuai Bentuk Tubuh</a></li>
          <li class="divider" tabindex="-3"></li>
        </ul>
        <!-- akhir dropdown -->

          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="home.php">HOME</a></li>
            <li><a href="bacaan.php">ARTIKEL</a></li>
            <li><a href="koleksi.php" class="dropdown-trigger" data-target="dropdown3">KOLEKSI</a></li>
            <li><a href="video.php">VIDEO</a></li>
            <li><a href="kegiatan.php">KEGIATAN</a></li>
            <li><a href="tentang3.php" class="dropdown-trigger" data-target="dropdown1">TENTANG KAMI</a></li>
          </ul>

          <ul class="sidenav" id="mobile-demo">
            <li><a href="home.php">HOME</a></li>
            <li><a href="bacaan.php">ARTIKEL</a></li>
            <li><a href="koleksi.php" class="dropdown-trigger" data-target="dropdown4">KOLEKSI</a></li>
            <li><a href="video.php">VIDEO</a></li>
            <li><a href="kegiatan.php">KEGIATAN</a></li>
            <li><a href="tentang3.php" class="dropdown-trigger" data-target="dropdown2">TENTANG KAMI</a></li>
        </ul>
        </div>
    </nav>
    <!-- akhir navbar -->

    <!-- Artikel -->
    <div class="container">
    <div class="align center">
    <div class="alas">
    <center><h2>Artikel</h2></center>

<?php
include "konek.php";
$has = mysql_query("select * from artikel order by tgl_artikel desc");
$num = mysql_num_rows($has);

if($num<1){
 echo'<center>Tidak Ada Artikel</center>';
}else{
while($data=mysql_fetch_array($has)){
 $art = substr($data['isi_artikel'],0,100);
  echo '
     <h3>'.$data['judul_artikel'].'</h3>
     <img width="800" height="480" src="photo-artikel/'.$data['photo_artikel'].'">
     <h6>Dipublikasikan pada '.$data['tgl_artikel'].'</h6>
     <h6>Oleh '.$data['penulis_artikel'].'</h6>
     <p>'.$art.'..</p>
        <a href="single.php?p='.$data['id_artikel'].'">Read More</a>
     <br><br>
  
   ';}
}
?>
</div>
</div>
</div>
    <!-- akhir Artikel -->

    <!-- footer -->
    <footer class="page-footer footer-section">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Museum Tekstil Jakarta</h5>
            <p class="grey-text text-lighten-4">Jl. Ks. Tubun No.2-4, RT.4/RW.2, Kota Bambu Sel., Palmerah, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11420</p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Hubungi Kami Melalui</h5>
            <ul>
              <a href="https://www.facebook.com/Museum-Tekstil-Jakarta" target=_blank><img src="img/logo/fb.png" title="Facebook"></a>
              <a href="https://twitter.com/tekstilmuseum" target=_blank><img src="img/logo/twitter.jpg" title="Twitter"></a>
              <a href="https://www.instagram.com/museum_tekstiljkt" target=_blank><img src="img/logo/ig.png" title="Instagram"></a>
            </ul>
          </div>
          <div class="col l4 offset-l2 s12 m12">
            <h5 class="white-text" style="font-size: 16px">Dinas Pariwisata dan Kebudayaan Provinsi DKI Jakarta</h5>
            <ul>
              <a href="http://jakarta-tourism.go.id/2017/" target=_blank><img src="img/logo/enjoy.png" title="Jakarta-Tourism"></a>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
          <p class="valign center">?? 2018 Copyright Museum Tekstil</p>
        </div>
      </div>
    </footer>
    <!-- akhir footer -->

  <!-- load file js -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/myscript.js"></script>
  <script type="text/javascript" src="js/materialize.js"></script>
</body>
</html>