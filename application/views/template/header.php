<?php 
  $class = $this->router->fetch_class();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>RUANG BELAJAR</title>
  <!-- data table -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/admin/assets/plugins/datatables/datatables.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('assets/theme') ?>/css/bootstrap.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?php echo base_url('assets/theme') ?>/css/mdb.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="<?php echo base_url('assets/theme') ?>/css/style.css?<?php echo time() ?>" rel="stylesheet">
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="<?php echo base_url('assets/theme') ?>/js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?php echo base_url('assets/theme') ?>/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url('assets/theme') ?>/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url('assets/theme') ?>/js/mdb.min.js"></script>
  <!-- data table -->
  <script type="text/javascript" src="<?php echo base_url() ?>/admin/assets/plugins/datatables/datatables.min.js"></script>
</head>

<body class="grey lighten-3">

  <!--Main Navigation-->
  <header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
      <div class="container">

        <!-- Brand -->
        <a class="navbar-brand waves-effect" href="<?php echo base_url() ?>">
          <strong style="color: #71C0FF;"><i class="fas fa-graduation-cap"></i> RUANG BELAJAR</strong>
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Left -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php echo ($class == 'welcome') ? 'active' : '' ?>">
              <a class="nav-link waves-effect" href="<?php echo base_url() ?>">Beranda
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item dropdown <?php echo ($class == 'kompetensi') ? 'active' : '' ?>">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Kompetensi
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo base_url('kompetensi/inti') ?>">Kompetensi Inti</a>
                <a class="dropdown-item" href="<?php echo base_url('kompetensi/dasar') ?>">Kompetensi Dasar</a>
              </div>
            </li>
            <li class="nav-item dropdown <?php echo ($class == 'tujuan') ? 'active' : '' ?>">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Tujuan
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo base_url('tujuan/indikator') ?>">Indikator</a>
                <a class="dropdown-item" href="<?php echo base_url('tujuan/tujuan_pembelajaran') ?>">Tujuan Pembelajaran</a>
              </div>
            </li>
            <li class="nav-item <?php echo ($class == 'materi') ? 'active' : '' ?>">
              <a class="nav-link waves-effect" href="<?php echo base_url("materi") ?>">Materi</a>
            </li>
            <li class="nav-item dropdown <?php echo ($class == 'soal') ? 'active' : '' ?>">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Latihan Soal
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo base_url('soal/list_soal') ?>">Pilihan Ganda</a>
                <a class="dropdown-item" href="<?php echo base_url('soal/list_soal_uraian') ?>">Uraian</a>
                <a class="dropdown-item" href="<?php echo base_url('soal/list_nilai') ?>">Lihat Nilai</a>
              </div>
            </li>
            <li class="nav-item <?php echo ($class == 'tentang') ? 'active' : '' ?>">
              <a class="nav-link waves-effect" href="<?php echo base_url("tentang") ?>">Tentang</a>
            </li>
          </ul>
          <ul class="navbar-nav pull-right">
            <li class="nav-item">
              <a class="nav-link waves-effect" href="<?php echo base_url('admin') ?>" style="color: #71C0FF;">
                <i class="fas fa-user"></i>
                ADMIN
              </a>
            </li>
          </ul>
        </div>

      </div>
    </nav>
    <!-- Navbar -->

  </header>
  <!--Main Navigation-->