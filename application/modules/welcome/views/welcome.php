  <style type="text/css">
    .card-div-img {
      background-position: center; 
      background-size: cover; 
      width: 100%; 
      height: 200px;
    }
  </style>
  <!--Main layout-->
  <main class="mt-5 pt-5">
    <div class="container-fluid">

      <!--Section: Jumbotron-->
      <section class="card wow fadeIn" style="background-image: url(<?php echo base_url('admin/assets/uploads/home-banner.jpg?'.time()) ?>); background-size: cover;">

        <!-- Content -->
        <div class="card-body text-white text-center py-5 px-5 my-5">

          <h1 class="mb-4">
            <strong>RUANG BELAJAR</strong>
          </h1>
          <div>
            <?php echo $this->db->get("t_text")->row("text_banner") ?>
          </div>

        </div>
        <!-- Content -->
      </section>
      <!--Section: Jumbotron-->

      <hr class="my-5">

      <!--Section: Cards-->
      <section class="text-center">

        <!--Grid row-->
        <div class="row mb-4 wow fadeIn">

          <!--Grid column-->
          <div class="col-lg-4 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
                <div class="card-img-top card-div-img" style="background-image: url(<?php echo base_url('admin/assets/uploads/home-kompetensi-inti.jpg?'.time()) ?>);"></div>
                <!-- <img src="" class="card-img-top" alt=""> -->
                <a href="<?php echo base_url('kompetensi/inti') ?>">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <!--Card content-->
              <div class="card-body">
                <!--Title-->
                <h4 class="card-title">KOMPETENSI INTI</h4>
                <!--Text-->
                <!-- <p class="card-text">Ini adalah detail dari kompetensi inti. </p> -->
                <a href="<?php echo base_url('kompetensi/inti') ?>" class="btn btn-primary btn-md">Kunjungi
                  <i class="fas fa-arrow-right ml-2"></i>
                </a>
              </div>

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-4 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
                <div class="card-img-top card-div-img" style="background-image: url(<?php echo base_url('admin/assets/uploads/home-kompetensi-dasar.jpg?'.time()) ?>);"></div>
                <!-- <img src="<?php echo base_url('assets/images/card2.jpg') ?>" class="card-img-top" alt=""> -->
                <a href="<?php echo base_url('kompetensi/dasar') ?>">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <!--Card content-->
              <div class="card-body">
                <!--Title-->
                <h4 class="card-title">KOMPETENSI DASAR</h4>
                <!--Text-->
                <!-- <p class="card-text">Ini adalah detail dari kompetensi dasar. </p> -->
                <a href="<?php echo base_url('kompetensi/dasar') ?>" class="btn btn-primary btn-md">Kunjungi
                  <i class="fas fa-arrow-right ml-2"></i>
                </a>
              </div>

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-4 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
                <div class="card-img-top card-div-img" style="background-image: url(<?php echo base_url('admin/assets/uploads/home-tujuan-pembelajaran.jpg?'.time()) ?>);"></div>
                <!-- <img src="<?php echo base_url('assets/images/card3.png') ?>" class="card-img-top" alt=""> -->
                <a href="<?php echo base_url('tujuan/tujuan_pembelajaran') ?>">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <!--Card content-->
              <div class="card-body">
                <!--Title-->
                <h4 class="card-title">TUJUAN PEMBELAJARAN</h4>
                <!--Text-->
                <!-- <p class="card-text">Ini adalah detail dari kompetensi dasar. </p> -->
                <a href="<?php echo base_url('tujuan/tujuan_pembelajaran') ?>" class="btn btn-primary btn-md">Kunjungi
                  <i class="fas fa-arrow-right ml-2"></i>
                </a>
              </div>

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->
        <!--Grid row-->
        <div class="row mb-4 wow fadeIn">

          <!--Grid column-->
          <div class="col-lg-4 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
                <div class="card-img-top card-div-img" style="background-image: url(<?php echo base_url('admin/assets/uploads/home-tujuan-indikator.jpg?'.time()) ?>);"></div>
                <!-- <img src="<?php echo base_url('assets/images/card7.jpg') ?>" class="card-img-top" alt=""> -->
                <a href="<?php echo base_url('tujuan/indikator') ?>">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <!--Card content-->
              <div class="card-body">
                <!--Title-->
                <h4 class="card-title">INDIKATOR</h4>
                <!--Text-->
                <!-- <p class="card-text">Ini adalah detail dari indikator. </p> -->
                <a href="<?php echo base_url('tujuan/indikator') ?>" class="btn btn-primary btn-md">Kunjungi
                  <i class="fas fa-arrow-right ml-2"></i>
                </a>
              </div>

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-4 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
                <div class="card-img-top card-div-img" style="background-image: url(<?php echo base_url('admin/assets/uploads/home-materi.jpg?'.time()) ?>);"></div>
                <!-- <img src="<?php echo base_url('assets/images/card4.jpg') ?>" class="card-img-top" alt=""> -->
                <a href="<?php echo base_url("materi") ?>">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <!--Card content-->
              <div class="card-body">
                <!--Title-->
                <h4 class="card-title">MATERI</h4>
                <!--Text-->
                <!-- <p class="card-text">Ini adalah detail dari materi. </p> -->
                <a href="<?php echo base_url("materi") ?>" class="btn btn-primary btn-md">Materi
                  <i class="fas fa-arrow-right ml-2"></i>
                </a>
              </div>

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-4 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              <div class="view overlay">
                <div class="card-img-top card-div-img" style="background-image: url(<?php echo base_url('admin/assets/uploads/home-latihan-soal.jpg?'.time()) ?>);"></div>
                <!-- <img src="<?php echo base_url('assets/images/card5.jpg') ?>" class="card-img-top" alt=""> -->
                <a href="<?php echo base_url("soal") ?>">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <!--Card content-->
              <div class="card-body">
                <!--Title-->
                <h4 class="card-title">LATIHAN SOAL</h4>
                <!--Text-->
                <!-- <p class="card-text">Ini adalah detail dari latihan soal. </p> -->
                <a href="<?php echo base_url("soal") ?>" class="btn btn-primary btn-md">Kunjungi
                  <i class="fas fa-arrow-right ml-2"></i>
                </a>
              </div>

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Cards-->

    </div>
  </main>
  <!--Main layout-->

  <?php

    $ip      = $_SERVER['REMOTE_ADDR']; // Mendapatkan IP komputer user
    $tanggal = date("Ymd"); // Mendapatkan tanggal sekarang
    $waktu   = time(); //
                         
    // Mencek berdasarkan IPnya, apakah user sudah pernah mengakses hari ini
    $s = $this->db->query("SELECT * FROM t_statistik WHERE ip='$ip' AND tanggal='$tanggal'");

    // Kalau belum ada, simpan data user tersebut ke database
    if($s->num_rows() == 0){
      $this->db->query("INSERT INTO t_statistik(ip, tanggal, hits, online) VALUES('$ip','$tanggal','1','$waktu')");
    }
    // Jika sudah ada, update
    else{
      $this->db->query("UPDATE t_statistik SET hits=hits+1, online='$waktu' WHERE ip='$ip' AND tanggal='$tanggal'");
    }
?>