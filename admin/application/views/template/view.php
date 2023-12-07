<?php 
  $class = $this->router->fetch_class();
  $method = $this->router->fetch_method();
  $level_akses = unserialize($this->session->userdata('level_akses'));
?>
<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ADMIN | RUANG BELAJAR</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Data tables -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/plugins/datatables/datatables.min.css"/>
    <!-- Select 2 -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/plugins/select2/css/select2.min.css"/>
    <!-- Data tables -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets') ?>/plugins/datatables/datatables.min.css"/>

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?= base_url('assets/theme') ?>/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?= base_url('assets/theme') ?>/vendor/font-awesome/css/all.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="<?= base_url('assets/theme') ?>/css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?= base_url('assets/theme') ?>/css/style.blue.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?= base_url('assets/theme') ?>/css/custom.css?<?php echo time() ?>">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="<?= base_url('assets/theme') ?>/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="<?= base_url('assets/theme') ?>/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    
    <!-- JavaScript files-->
    <script src="<?= base_url('assets/theme') ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/theme') ?>/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="<?= base_url('assets/theme') ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/theme') ?>/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="<?= base_url('assets/theme') ?>/vendor/chart.js/Chart.min.js"></script>
    <script src="<?= base_url('assets/theme') ?>/vendor/jquery-validation/jquery.validate.min.js"></script>
   
    <!-- Main File-->
    <script src="<?= base_url('assets/theme') ?>/js/front.js"></script>
    <!-- Data table -->
    <script type="text/javascript" src="<?= base_url('assets') ?>/plugins/datatables/datatables.min.js"></script>
    <!-- Select2 -->
    <script type="text/javascript" src="<?= base_url('assets') ?>/plugins/select2/js/select2.min.js"></script>
    <!-- CK Editor -->
    <script type="text/javascript" src="<?= base_url('assets') ?>/plugins/ckeditor/ckeditor.js"></script>
  </head>
  <body>
    <div class="page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="<?php echo base_url('home') ?>" class="navbar-brand d-none d-sm-inline-block">
                  <div class="brand-text d-none d-lg-inline-block"><span>Admin </span><strong>Panel</strong></div>
                  <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Logout    -->
                <li class="nav-item"><a href="<?php echo str_replace("admin/", "", base_url()) ?>" class="nav-link logout"> <span class="d-none d-sm-inline">Halaman Utama</span><i class="fas fa-sign-out-alt"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar" style="background-image: url(<?php echo base_url("assets/uploads/".$this->session->userdata('user_foto')."?".time()) ?>); background-position: center; background-size: cover; width: 60px; height: 60px; border-radius: 50% "></div>
            <div class="title">
              <h1 class="h4"><a href="<?php echo base_url("user") ?>"><?php echo ucwords($this->session->userdata('user_nama')); ?></a></h1>
              <p><?php echo ucfirst($this->session->userdata('level_nama')); ?></p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus-->
          <span class="heading">Main</span>
          <ul class="list-unstyled">
            <li class="<?= ($class == 'home') ? 'active' : '' ?>"><a href="<?= base_url('home') ?>"> <i class="icon-home"></i>Beranda </a></li>
            <?php if(in_array('administrator', $level_akses)): ?>
            <li class="<?= ($class == 'administrator') ? 'active' : '' ?>"><a href="#menu1" aria-expanded="false" data-toggle="collapse" class=""> <i class="far fa-id-card"></i>Administrator </a>
              <ul id="menu1" class="list-unstyled collapse <?= ($class == 'administrator') ? 'show' : '' ?>" style="">
                <li class="<?= ($method == 'index') ? 'active' : '' ?>"><a href="<?= base_url('administrator/index') ?>">Admin</a></li>
                <li class="<?= ($method == 'level') ? 'active' : '' ?>"><a href="<?= base_url('administrator/level') ?>">Akses Level</a></li>
              </ul>
            </li>
            <?php endif ?>
            <?php if(in_array('kompetensi', $level_akses)): ?>
            <li class="<?= ($class == 'kompetensi') ? 'active' : '' ?>"><a href="#menu2" aria-expanded="false" data-toggle="collapse" class=""> <i class="far fa-newspaper"></i>Kompetensi </a>
              <ul id="menu2" class="list-unstyled collapse <?= ($class == 'kompetensi') ? 'show' : '' ?>" style="">
                <li class="<?= ($method == 'komptensi_inti') ? 'active' : '' ?>"><a href="<?= base_url('kompetensi/komptensi_inti') ?>">Kompetensi Inti</a></li>
                <li class="<?= ($method == 'komptensi_dasar') ? 'active' : '' ?>"><a href="<?= base_url('kompetensi/komptensi_dasar') ?>">Kompetensi Dasar</a></li>
              </ul>
            </li>
            <?php endif ?>
            <?php if(in_array('tujuan', $level_akses)): ?>
            <li class="<?= ($class == 'tujuan') ? 'active' : '' ?>"><a href="#menu3" aria-expanded="false" data-toggle="collapse" class=""> <i class="far fa-newspaper"></i>Tujuan </a>
              <ul id="menu3" class="list-unstyled collapse <?= ($class == 'tujuan') ? 'show' : '' ?>" style="">
                <li class="<?= ($method == 'indikator') ? 'active' : '' ?>"><a href="<?= base_url('tujuan/indikator') ?>">Indikator</a></li>
                <li class="<?= ($method == 'tujuan_pembelajaran') ? 'active' : '' ?>"><a href="<?= base_url('tujuan/tujuan_pembelajaran') ?>">Tujuan Pembelajaran</a></li>
              </ul>
            </li>
            <?php endif ?>
            <?php if(in_array('siswa', $level_akses)): ?>
            <li class="<?= ($class == 'siswa') ? 'active' : '' ?>"><a href="#menu4" aria-expanded="false" data-toggle="collapse" class=""> <i class="far fa-newspaper"></i>Siswa </a>
              <ul id="menu4" class="list-unstyled collapse <?= ($class == 'siswa') ? 'show' : '' ?>" style="">
                <li class="<?= ($method == 'management_siswa') ? 'active' : '' ?>"><a href="<?= base_url('siswa/management_siswa') ?>">Siswa</a></li>
               <!--  <li class="<?= ($method == 'siswa_pekerjaan') ? 'active' : '' ?>"><a href="<?= base_url('siswa/siswa_pekerjaan') ?>">Rekap Pekerjaan</a></li> -->
              </ul>
            </li>
            <?php endif ?>
            <?php if(in_array('soal', $level_akses)): ?>
            <li class="<?= ($class == 'soal') ? 'active' : '' ?>"><a href="#menu5" aria-expanded="false" data-toggle="collapse" class=""> <i class="far fa-clone"></i>Soal </a>
              <ul id="menu5" class="list-unstyled collapse <?= ($class == 'soal') ? 'show' : '' ?>" style="">
                <li class="<?= ($method == 'index' && $class == 'soal') ? 'active' : '' ?>"><a href="<?= base_url('soal') ?>">Pilihan Ganda</a></li>
                <li class="<?= ($method == 'uraian' && $class == 'soal') ? 'active' : '' ?>"><a href="<?= base_url('soal/uraian') ?>">Uraian</a></li>
                <li class="<?= (($method == 'koreksi' || $method == 'koreksi_soal') && $class == 'soal') ? 'active' : '' ?>"><a href="<?= base_url('soal/koreksi') ?>">Koreksi Uraian</a></li>
                <li class="<?= ($method == 'list_work' && $class == 'soal') ? 'active' : '' ?>"><a href="<?= base_url('soal/list_work') ?>">Pekerjaan Siswa (Pilihan Ganda)</a></li>
                <li class="<?= ($method == 'list_work_uraian' && $class == 'soal') ? 'active' : '' ?>"><a href="<?= base_url('soal/list_work_uraian') ?>">Pekerjaan Siswa (Uraian)</a></li>
              </ul>
            </li>
            <?php endif ?>
            <?php if(in_array('tentang', $level_akses)): ?>
            <li class="<?= ($class == 'tentang') ? 'active' : '' ?>"><a href="#menu6" aria-expanded="false" data-toggle="collapse" class=""> <i class="far fa-id-card"></i>Tentang </a>
              <ul id="menu6" class="list-unstyled collapse <?= ($class == 'tentang') ? 'show' : '' ?>" style="">
                <li class="<?= ($method == 'index' && $class == 'tentang') ? 'active' : '' ?>"><a href="<?= base_url('tentang') ?>">Halaman tentang</a></li>
              </ul>
            </li>
            <?php endif ?>
            <?php if(in_array('materi', $level_akses)): ?>
            <li class="<?= ($class == 'materi') ? 'active' : '' ?>"><a href="#menu7" aria-expanded="false" data-toggle="collapse" class=""> <i class="far fa-file-word"></i>Materi </a>
              <ul id="menu7" class="list-unstyled collapse <?= ($class == 'materi') ? 'show' : '' ?>" style="">
                <li class="<?= ($method == 'index' && $class == 'materi') ? 'active' : '' ?>"><a href="<?= base_url('materi') ?>">Halaman materi</a></li>
              </ul>
            </li>
            <?php endif ?>
            <?php if(in_array('materi', $level_akses)): ?>
            <li class="<?= ($class == 'pengaturan') ? 'active' : '' ?>"><a href="#menu8" aria-expanded="false" data-toggle="collapse" class=""> <i class="far fa-sun"></i>Pengaturan </a>
              <ul id="menu8" class="list-unstyled collapse <?= ($class == 'pengaturan') ? 'show' : '' ?>" style="">
                <li class="<?= ($method == 'index' && $class == 'pengaturan') ? 'active' : '' ?>"><a href="<?= base_url('pengaturan') ?>">Halaman pengaturan</a></li>
              </ul>
            </li>
            <?php endif ?>

          </ul>
          <span class="heading">Other</span>
          <ul class="list-unstyled">
            <li><a href="<?= base_url('auth/logout') ?>"> <i class="fas fa-sign-out-alt"></i>Logout </a></li>
          </ul>
        </nav>
        <div class="content-inner">
          <?= $content ?>
          <!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>©Copyright Ruang Belajar 2019 - <?= date('Y'); ?></p>
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
  </body>
</html>

<script type="text/javascript">
  /*global $, document, Chart, LINECHART, data, options, window*/
$(document).ready(function () {

    'use strict';

    // ------------------------------------------------------- //
    // Line Chart
    // ------------------------------------------------------ //
    var legendState = true;
    if ($(window).outerWidth() < 576) {
        legendState = false;
    }

    var LINECHART = $('#lineCahrt');
    var myLineChart = new Chart(LINECHART, {
        type: 'line',
        options: {
            scales: {
                xAxes: [{
                    display: true,
                    gridLines: {
                        display: false
                    }
                }],
                yAxes: [{
                    display: true,
                    gridLines: {
                        display: false
                    }
                }]
            },
            legend: {
                display: legendState
            }
        },
        data: {
            labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September","Oktober", "November", "Desember"],
            datasets: [
                {
                    label: "Statistik Kunjungan <?php echo date('Y'); ?>",
                    fill: true,
                    lineTension: 0,
                    backgroundColor: "transparent",
                    borderColor: "#54e69d",
                    pointHoverBackgroundColor: "#44c384",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    borderWidth: 1,
                    pointBorderColor: "#44c384",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBorderColor: "#fff",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [
                                  <?php echo ($Januari[0]['view'] == null)? "0": $Januari[0]['view'] ?>,
                                  <?php echo ($Februari[0]['view'] == null)? "0": $Februari[0]['view'] ?>,
                                  <?php echo ($Maret[0]['view'] == null)? "0": $Maret[0]['view'] ?>,
                                  <?php echo ($April[0]['view'] == null)? "0": $April[0]['view'] ?>,
                                  <?php echo ($Mei[0]['view'] == null)? "0": $Mei[0]['view'] ?>,
                                  <?php echo ($Juni[0]['view'] == null)? "0": $Juni[0]['view'] ?>,
                                  <?php echo ($Juli[0]['view'] == null)? "0": $Juli[0]['view'] ?>,
                                  <?php echo ($Agustus[0]['view'] == null)? "0": $Agustus[0]['view'] ?>,
                                  <?php echo ($September[0]['view'] == null)? "0": $September[0]['view'] ?>,
                                  <?php echo ($Oktober[0]['view'] == null)? "0": $Oktober[0]['view'] ?>,
                                  <?php echo ($November[0]['view'] == null)? "0": $November[0]['view'] ?>,
                                  <?php echo ($Desember[0]['view'] == null)? "0": $Desember[0]['view'] ?>
                          ],
                    spanGaps: false
                }
            ]
        }
    });



    // ------------------------------------------------------- //
    // Line Chart 1
    // ------------------------------------------------------ //
    var LINECHART1 = $('#lineChart1');
    var myLineChart = new Chart(LINECHART1, {
        type: 'line',
        options: {
            scales: {
                xAxes: [{
                    display: true,
                    gridLines: {
                        display: false
                    }
                }],
                yAxes: [{
                    ticks: {
                        max: 40,
                        min: 0,
                        stepSize: 0.5
                    },
                    display: false,
                    gridLines: {
                        display: false
                    }
                }]
            },
            legend: {
                display: false
            }
        },
        data: {
            labels: ["A", "B", "C", "D", "E", "F", "G"],
            datasets: [
                {
                    label: "Total Overdue",
                    fill: true,
                    lineTension: 0,
                    backgroundColor: "transparent",
                    borderColor: '#6ccef0',
                    pointBorderColor: '#59c2e6',
                    pointHoverBackgroundColor: '#59c2e6',
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    borderWidth: 3,
                    pointBackgroundColor: "#59c2e6",
                    pointBorderWidth: 0,
                    pointHoverRadius: 4,
                    pointHoverBorderColor: "#fff",
                    pointHoverBorderWidth: 0,
                    pointRadius: 4,
                    pointHitRadius: 0,
                    data: [20, 28, 30, 22, 24, 10, 7],
                    spanGaps: false
                }
            ]
        }
    });



    // ------------------------------------------------------- //
    // Pie Chart
    // ------------------------------------------------------ //
    var PIECHART = $('#pieChart');
    var myPieChart = new Chart(PIECHART, {
        type: 'doughnut',
        options: {
            cutoutPercentage: 80,
            legend: {
                display: false
            }
        },
        data: {
            labels: [
                "First",
                "Second",
                "Third",
                "Fourth"
            ],
            datasets: [
                {
                    data: [300, 50, 100, 60],
                    borderWidth: [0, 0, 0, 0],
                    backgroundColor: [
                        '#44b2d7',
                        "#59c2e6",
                        "#71d1f2",
                        "#96e5ff"
                    ],
                    hoverBackgroundColor: [
                        '#44b2d7',
                        "#59c2e6",
                        "#71d1f2",
                        "#96e5ff"
                    ]
                }]
        }
    });


    // ------------------------------------------------------- //
    // Bar Chart
    // ------------------------------------------------------ //
    var BARCHARTHOME = $('#barChartHome');
    var barChartHome = new Chart(BARCHARTHOME, {
        type: 'bar',
        options:
        {
            scales:
            {
                xAxes: [{
                    display: false
                }],
                yAxes: [{
                    display: false
                }],
            },
            legend: {
                display: false
            }
        },
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "November", "December"],
            datasets: [
                {
                    label: "Data Set 1",
                    backgroundColor: [
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)'
                    ],
                    borderColor: [
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)',
                        'rgb(121, 106, 238)'
                    ],
                    borderWidth: 1,
                    data: [35, 49, 55, 68, 81, 95, 85, 40, 30, 27, 22, 15]
                }
            ]
        }
    });

});
</script>