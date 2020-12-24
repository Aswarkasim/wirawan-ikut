<main id="content" role="main">
  <div class="position-relative">
    <!-- Hero Section -->
    <div class="gradient-y-overlay-lg-white bg-img-hero space-2">
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-lg-8">
            <h1 class="text-lh-sm"><?= $paket->nama_paket; ?></h1>
            <p><?= $paket->deskripsi; ?></p>

            <div class="d-flex align-items-center flex-wrap">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Hero Section -->

    <!-- Sidebar Content Section -->
    <div class="container space-top-md-2 position-md-absolute top-0 right-0 left-0">
      <div class="row justify-content-end">
        <div id="stickyBlockStartPoint" class="col-md-5 col-lg-4 position-relative z-index-2" style="">
          <div class="js-sticky-block card border">
            <div class="position-relative p-1">
              <!-- Video Popup -->
              <!-- <a class="js-fancybox video-player">
                <img class="card-img-top" src="<?= base_url($paket->cover) ?>" alt="Image Description">
              </a> -->
              <!-- End Video Popup -->
            </div>

            <div class="card-body">
              <h2 class="h4">Tentang tes ujian ini</h2>
              <div class="mb-3">
                <span class="h2 text-lh-sm mr-1 mb-0"><?= 'Rp. ' . nominal($paket->harga); ?></span>
                <!-- <span class="lead text-muted text-lh-sm"><del>$114.99</del></span> -->
              </div>

              <div class="mb-2">
                <a class="btn btn-block btn-primary transition-3d-hover" href="">Beli Sekarang</a>
                <a href="<?= base_url('home/soal'); ?>" class="btn btn-block btn-primary transition-3d-hover">Mulai Kerjakan</a>
              </div>



              <!-- Icon Block -->
              <div class="media text-body font-size-1 mb-2">
                <div class="min-w-3rem text-center mr-3">
                  <i class="fa fa-video"></i>
                </div>
                <div class="media-body">
                  <?= $paket->nama_type; ?>
                </div>
              </div>
              <!-- End Icon Block -->

              <!-- Icon Block -->
              <div class="media text-body font-size-1 mb-2">
                <div class="min-w-3rem text-center mr-3">
                  <i class="fa fa-file"></i>
                </div>
                <div class="media-body">
                  <?= count($soal) . ' Soal' ?>
                </div>
              </div>

              <!-- Icon Block -->
              <div class="media text-body font-size-1 mb-2">
                <div class="min-w-3rem text-center mr-3">
                  <i class="fa fa-clock"></i>
                </div>
                <div class="media-body">
                  <?= $paket->waktu . ' Menit wantu mengerjakan soal'; ?>
                </div>
              </div>
              <!-- End Icon Block -->

              <!-- Icon Block -->
              <div class="media text-body font-size-1 mb-2">
                <div class="min-w-3rem text-center mr-3">
                  <i class="fa fa-infinity"></i>
                </div>
                <div class="media-body">
                  Aktif 2 pekan
                </div>
              </div>
              <!-- End Icon Block -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Sidebar Content Section -->
  </div>

  <!-- Description Section -->
  <div class="container space-top-2 space-top-md-1">
    <div class="row">
      <div class="col-md-7 col-lg-8">
        <!-- Info -->
        <div class="pt-0 mt-0">
          <h3 class="mb-4">Pengetahuan apa yang kami ujiakan?</h3>

          <div class="row">
            <div class="col-lg-6">
              <!-- Icon Block -->
              <div class="media text-body font-size-1 mb-3">
                <i class="fas fa-check-circle text-success mt-1 mr-2"></i>
                <div class="media-body">
                  Learn to use Python professionally, learning both Python 2 and Python 3!
                </div>
              </div>
              <!-- End Icon Block -->
            </div>


          </div>
        </div>
        <!-- End Info -->



        <!-- Ratings & Reviews -->
        <div class="border-top pt-7 mt-7">

        </div>
        <!-- End Ratings & Reviews -->
      </div>
    </div>
  </div>
  <!-- End Description Section -->


</main>