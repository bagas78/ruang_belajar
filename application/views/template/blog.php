<?php print_r($header) ?>

  <style type="text/css">

  .img-post {
        height: 328px;
        width: auto;
        background-size: cover;
        background-position: center;
  }

    @media (max-width: 575.98px) { 
      .img-post {
        height: 228px;
        width: auto;
        background-size: cover;
        background-position: center;
      }
    } 
    
    @media (max-width: 767.98px) {
      .img-post {
        height: 228px;
        width: auto;
        background-size: cover;
        background-position: center;
      }
    }
  </style>

  <!--Main layout-->
  <main class="mt-5 pt-5">
    <div class="container">

      <!--Section: Post-->
      <section class="mt-4">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-8 mb-4">

            <!--Featured Image-->
            <div class="card mb-4 wow fadeIn">
              <div class="img-post" style="background-image: url(<?php echo empty(@$banner) ? base_url('assets/images/study2.png') : base_url('admin/assets/uploads/'.$banner."?".time()); ?>);"></div>
            </div>
            <!--/.Featured Image-->

            <!--Card-->
            <div class="card mb-4 wow fadeIn">

              <!--Card content-->
              <div class="card-body">
                <?= @$content ?>
              </div>

            </div>
            <!--/.Card-->

            <!--Card-->
            <div class="card mb-4 wow fadeIn">

              <div class="card-header font-weight-bold">
                <span>About author</span>
              </div>

              <!--Card content-->
              <div class="card-body">
                <div class="media d-block d-md-flex mt-3">
                  <div class="d-flex mb-3 mx-auto z-depth-1" style="background-image: url(<?php echo base_url("admin/assets/uploads/home-author.jpg?".time()) ?>); background-position: center; background-size: cover; width: 100px; height: 100px "></div>
                  <!-- <img class="d-flex mb-3 mx-auto z-depth-1" src="<?php echo base_url('assets/images/avatar-8.jpg') ?>" alt="Generic placeholder image" style="width: 100px;"> -->
                  <div class="media-body text-center text-md-left ml-md-3 ml-0">
                    <?php echo $this->db->get("t_text")->row("text_author") ?>
                  </div>
                </div>

              </div>

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-4 mb-4">

            <!--Card: Jumbotron-->
            <div class="img-post card mb-4 wow fadeIn" style="background-image: url(<?php echo empty(@$side_banner) ? base_url('assets/images/card1.jpg') : base_url('admin/assets/uploads/'.$side_banner."?".time()); ?>)">

              <!-- Content -->
              <div class="card-body text-white text-center">
                
              </div>
              <!-- Content -->
            </div>
            <!--Card: Jumbotron-->

            <!--Card-->
            <div class="card mb-4 wow fadeIn">

              <div class="card-header">Navigation Menu</div>

              <!--Card content-->
              <div class="card-body">
                <style type="text/css">
                  .img-nav {
                    width: 70px; 
                    height: 70px;
                    background-size: cover;
                  }
                </style>
                <ul class="list-unstyled">
                  <li class="media">
                    <div class="d-flex mr-3 img-nav" style="background-image: url(<?php echo base_url("admin/assets/uploads/home-kompetensi-inti.jpg?".time()) ?>);"></div>
                    <div class="media-body">
                      <a href="<?php echo base_url("kompetensi/inti") ?>">
                        <h5 class="mt-0 mb-1 font-weight-bold">Kompetensi Inti</h5>
                      </a>
                      Detail tentang kompetensi inti ...
                    </div>
                  </li>
                  <li class="media my-2">
                    <div class="d-flex mr-3 img-nav" style="background-image: url(<?php echo base_url("admin/assets/uploads/home-kompetensi-dasar.jpg?".time()) ?>);"></div>
                    <div class="media-body">
                      <a href="<?php echo base_url("kompetensi/dasar") ?>">
                        <h5 class="mt-0 mb-1 font-weight-bold">Kompetensi Dasar</h5>
                      </a>
                      Detail tentang kompetensi dasar ...
                    </div>
                  </li>
                  <li class="media my-2">
                    <div class="d-flex mr-3 img-nav" style="background-image: url(<?php echo base_url("admin/assets/uploads/home-latihan-soal.jpg?".time()) ?>);"></div>
                    <div class="media-body">
                      <a href="<?php echo base_url("soal/list_soal") ?>">
                        <h5 class="mt-0 mb-1 font-weight-bold">Latihan Soal</h5>
                      </a>
                      Detail tentang latihan soal...
                    </div>
                  </li>
                  <li class="media my-2">
                    <div class="d-flex mr-3 img-nav" style="background-image: url(<?php echo base_url("admin/assets/uploads/home-tujuan-pembelajaran.jpg?".time()) ?>);"></div>
                    <div class="media-body">
                      <a href="<?php echo base_url("tujuan/tujuan_pembelajaran") ?>">
                        <h5 class="mt-0 mb-1 font-weight-bold">Tujuan Pembelajaran</h5>
                      </a>
                      Detail tujuan pembelajaran ...
                    </div>
                  </li>
                </ul>

              </div>

            </div>
            <!--/.Card-->

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Post-->

    </div>
  </main>
  <!--Main layout-->
  <script type="text/javascript">
    // $(document).$(document).ready(function() {
      $("p img").removeAttr("style");
    // });
  </script>
<?php print_r($footer) ?>