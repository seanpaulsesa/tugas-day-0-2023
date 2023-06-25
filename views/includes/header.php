<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      <!-- Uncomment below if you prefer to use text as a logo -->
      <!-- <h1 class="logo"><a href="index.html">Butterfly</a></h1> -->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto <?php if(isset($_GET['page']) && $_GET['page'] == 'beranda') { echo 'active'; } ?>" href="?page=beranda">Beranda</a></li>
          <li><a class="nav-link scrollto <?php if(isset($_GET['page']) && $_GET['page'] == 'tentang-sekolah') { echo 'active'; } ?>" href="?page=tentang-sekolah">Tentang Sekolah Coding</a></li>
          <li><a class="nav-link scrollto <?php if(isset($_GET['page']) && $_GET['page'] == 'layanan') { echo 'active'; } ?>" href="?page=layanan">Layanan</a></li>
          <li><a class="nav-link scrollto <?php if(isset($_GET['page']) && $_GET['page'] == 'portofolio') { echo 'active'; } ?>" href="?page=portofolio">Portofolio</a></li>
          <li><a class="nav-link scrollto <?php if(isset($_GET['page']) && $_GET['page'] == 'tim') { echo 'active'; } ?>" href="?page=tim">Tim</a></li>
          <li class="dropdown"><a href="#"><span>Lainya</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a <?php if (isset($_GET['page']) && $_GET['page'] == 'jatuhkan')?>href="?page=jatuhkan">Jatuhkan</a></li>
              <li class="dropdown"><a href="#"><span>Penurunan yang dalam</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Jatuhkan 1</a></li>
                  <li><a href="#">Jatuhkan 2</a></li>
                  <li><a href="#">Jatuhkan 3</a></li>
                  <li><a href="#">Jatuhkan 4</a></li>
                  <li><a href="#">Jatuhkan 5</a></li>
                </ul>
              </li>
              <li><a <?php if (isset($_GET['page']) && $_GET['page'] == 'mitra') ?> href="?page=mitra">Mitra Sekolah Coding</a></li>
              <li><a <?php if (isset($_GET['page']) && $_GET['page'] == 'testimoni') ?> href="?page=testimoni">Testimoni Siswa Sekolah Coding</a></li>
              <li><a <?php if (isset($_GET['page']) && $_GET['page'] == 'galeri') ?> href="?page=galeri">Galeri Sekolah Coding</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto  <?php if (isset($_GET['page']) && $_GET['page'] == 'kontak') ?>" href="?page=kontak">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->