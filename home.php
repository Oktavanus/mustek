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
<body class="scrollspy" id="home">

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
    <!-- akhir nabvar -->

    <!--  slider -->
    <div class="slider">
      <ul class="slides">
        <li>
          <img src="img/slider/utama.jpg"> <!-- random image -->
          <div class="caption left-align">
            <h3>Ruang Pameran Utama!</h3>
            <h5 class="light grey-text text-lighten-3">Tempat untuk memamerkan koleksi museum wastra Indonesia.</h5>
          </div>
        </li>
        <li>
          <img src="img/slider/galeri1.jpg"> <!-- random image -->
          <div class="caption right-align">
            <h3>Galeri Batik!</h3>
            <h5 class="light grey-text text-lighten-3">Menampilkan sejumlah koleksi batik kuno dan perkembangannya dari masa ke masa.</h5>
          </div>
        </li>
        <li>
          <img src="img/slider/ruang.jpg"> <!-- random image -->
          <div class="caption center-align">
            <h3>Ruang Pengenalan Wastra!</h3>
            <h5 class="light grey-text text-lighten-3">Media pembelajaran tentang wastra tenun Indonesia dan Peralatan tenun yang lengkap.</h5>
          </div>
        </li>
        <li>
          <img src="img/slider/taman.jpg"> <!-- random image -->
          <div class="caption left-align">
            <h3>Taman Pewarnaan Alam!</h3>
            <h5 class="light grey-text text-lighten-3">Tempat mengenalkan berbagai jenis tanaman yang dapat digunakan sebagai bahan untuk pewarna kain.</h5>
          </div>
        </li>
        <li>
          <img src="img/slider/garden.jpg"> <!-- random image -->
          <div class="caption right-align">
            <h3>Taman Serat!</h3>
            <h5 class="light grey-text text-lighten-3">Tempat mengenalkan berbagai jenis tanaman yang menghasilkan serat untuk bahan baku kain.</h5>
          </div>
        </li>
        <li>
          <img src="img/slider/library.jpg"> <!-- random image -->
          <div class="caption center-align">
            <h3>Perpustakaan!</h3>
            <h5 class="light grey-text text-lighten-3">Menyediakan buku-buku tentang wastra yang cukup memadai dan sebagai media pembelajaran untuk mengeksplorasi wastra Indonesia.</h5>
          </div>
        </li>
        <li>
          <img src="img/slider/workshop.jpg"> <!-- random image -->
          <div class="caption left-align">
            <h3>Workshop Membatik!</h3>
            <h5 class="light grey-text text-lighten-3">Tempat belajar membuat batik bagi pengunjung, serta dilengkapi dengan peralatan yang memadai dan instruktur yang berpengalaman.</h5>
          </div>
        </li>
      </ul>
    </div>
    <!-- akhir slider -->

    <!-- layout awal -->
    <div class="container layout">
      <div class="row">
        <div class="col l12 m12 s12">
          <h1>Sejarah</h1>
        </div>

        <div class="col l12 m12 s12">
          <p>Museum Tekstil merupakan sebuah cagar budaya yang secara khusus mengumpulkan, mengawetkan, serta memamerkan karya-karya seni yang berkaitan dengan pertekstilan Indonesia. Bertempat di Jalan Aipda K.S. Tubun No.4, Kecamatan Tanah Abang, Jakarta Pusat, museum ini secara resmi dibuka pada tanggal 28 Juli 1976 dan berdiri dengan menempati gedung tua di atas areal seluas 16.410 meter persegi. Dalam sejarahnya, gedung yang digunakan sebagai museum ini dahulu merupakan rumah pribadi seorang warga keturunan Perancis yang hidup di abad ke-19. Namun gedung ini kemudian dijual pada seorang anggota konsulat Turki bernama Abdul Aziz Al Musawi Al Katiri. Pada tahun 1942, gedung ini dijual lagi kepada orang yang bernama Karel Cristian Cruq. Tidak begitu lama, gedung ini pun beralihtangan lagi dan dijadikan Markas Besar Barisan Keamanan Rakyat (BKR) pada saat menjelang kemerdekaan Indonesia. Setelah Indonesia merdeka, tepatnya pada tahun 1947, kepemilikan gedung ini dipegang oleh seseorang yang bernama Lie Sion Phin. Setelah beberapa kali beralih kepemilikan dan beralih fungsi, akhirnya pada tahun 1975, gedung ini diserahkan kepada Pemerintah DKI Jakarta dan dijadikan sebagai Museum Tekstil. Peresmian Museum Tekstil dilakukan oleh Ibu Tien Soeharto pada tanggal 28 Juni 1976.</p>
          <p>Sebagai sebuah museum tekstil terbesar di Indonesia, museum ini mempunyai koleksi-koleksi yang terhitung banyak, yakni sekitar 1.000 buah. Keistimewaan museum ini terletak pada koleksi-koleksinya yang kebanyakan merupakan koleksi tekstil tradisional Indonesia. Koleksi-koleksi tersebut dikelompokkan dalam empat bagian, yakni koleksi kain tenun, koleksi kain batik, koleksi peralatan, dan koleksi campuran. Wisatawan yang berkunjung ke museum ini dapat menyaksikan aneka kain batik bermotif geometris sederhana hingga yang bermotif rumit, seperti batik Yogyakarta, Solo, Pekalongan, Cirebon, Palembang, Madura, dan Riau. Selain itu, wisatawan juga dapat menyaksikan bendera Keraton Cirebon yang merupakan koleksi pilihan, karena usianya yang paling tua. Bendera itu terbuat dari bahan kapas berupa batik tulis yang berhias kaligrafi Arab. Bendera mirip plakat itu konon merupakan peninggalan bersejarah dari tahun 1776 M yang sangat disakralkan di Istana Cirebon. Pada saat itu bendera tersebut sering dipakai sebagai simbol syiar Islam.</p>
          <p>Selain memamerkan koleksi pertekstilan, di museum ini juga terdapat sebuah taman di halaman belakang yang diberi nama Taman Pewarna Alam. Taman seluas 2.000 meter persegi ini berisi pohon-pohon yang dapat digunakan sebagai bahan baku pewarna alam. Penanaman pohon-pohon itu bertujuan mendidik masyarakat agar mengenal dan mengetahui pohon-pohon yang dapat digunakan sebagai bahan baku pewarna alam. Keistimewaan lainnya yang terdapat di museum ini adalah kursus membatik. Kursus ini dilaksanakan bersamaan dengan hari-hari buka museum. Kursus membuat batik ini dilaksanakan di sebuah bangunan yang terletak di halaman paling belakang Museum Tekstil. Bangunan ini bergaya rumah panggung lebar yang tak mempunyai sekat di dalamnya. Semua bahan bangunannya terbuat dari kayu dengan cat berwarna coklat tua. Di ruangan ini tidak terdapat pendingin ruangan (AC), karena telah terdapat beberapa jendela yang mengelilingi ruangan untuk mengalirkan udara segar.</p>
        </div>
      </div>
    </div>
    <!-- akhir layout -->

    <!-- footer -->
    <footer class="page-footer footer-section">
      <div class="container">
        <div class="row">
          <div class="col l6 s12 m12">
            <h5 class="white-text">Museum Tekstil Jakarta</h5>
            <p class="grey-text text-lighten-4">Jl. Ks. Tubun No.2-4, RT.4/RW.2, Kota Bambu Sel., Palmerah, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11420</p>
          </div>
          <div class="col l4 offset-l2 s12 m12">
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
        <p class="valign center">© 2018 Copyright Museum Tekstil</p>
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