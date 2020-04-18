<header id="home">
    <!-- Background Image -->
    <div class="bg-img" style="background-image: url('assets/img/IMG-20200215-WA0028.jpg');">
      <div class="overlay"></div>
    </div>
    <!-- /Background Image -->

    <!-- Nav -->
    <nav id="nav" class="navbar nav-transparent">
      <div class="container">

        <div class="navbar-header">
          <!-- Logo -->
          <div class="navbar-brand">
            <a href="index.html">
              <img class="logo" src="<?php echo base_url()?>assets/img/IMG-20200215-WA0029.jpg" alt="logo">
              <img class="logo-alt" src="<?php echo base_url()?>assets/img/IMG-20200215-WA0029.jpg" alt="logo">
            </a>
          </div>
          <!-- /Logo -->

          <!-- Collapse nav button -->
          <div class="nav-collapse">
            <span></span>
          </div>
          <!-- /Collapse nav button -->
        </div>

        <!--  Main navigation  -->
        <ul class="main-nav nav navbar-nav navbar-right">
          <li><a href="<?php echo base_url('Home')?>">Home</a></li>
          <li><a href="<?php echo base_url('kegiatan')?>">Kegiatan</a></li>
          <li><a href="<?php echo base_url('struktur')?>">Struktur</a></li>
          <li class="has-dropdown"><a href="">Galeri</a>
            <ul class="dropdown">
              <li><a href="<?php echo base_url('galeri')?>">Foto</a></li>
               <li><a href="<?php echo base_url('video')?>">Video</a></li>
            </ul>
          </li>
          <li><a href="<?php echo base_url('profil')?>">Profil</a></li>
          <li><a href="<?php echo base_url('pendaftaran')?>">Pendaftaran</a></li>
          <li><a href="<?php echo base_url('redaksi')?>">Redaksi</a></li>
          <li><a href="<?php echo base_url('kontak')?>">Contact</a></li>
        </ul>
        <!-- /Main navigation -->

      </div>
    </nav>
    <!-- /Nav -->

    <!-- home wrapper -->
    <div class="home-wrapper">
      <div class="container">
        <div class="row">

          <!-- home content -->
          <div class="col-md-10 col-md-offset-1">
            <div class="home-content">
              <h1 class="white-text">HONDA JAZZ SOCIETY BEKASI</h1>
              <p class="white-text">Morbi mattis felis at nunc. Duis viverra diam non justo. In nisl. Nullam sit amet magna in magna gravida vehicula. Mauris tincidunt sem sed arcu. Nunc posuere.
              </p>
              <button class="white-btn">Get Started!</button>
              <button class="main-btn">Learn more</button>
            </div>
          </div>
          <!-- /home content -->

        </div>
      </div>
    </div>
    <!-- /home wrapper -->

  </header>