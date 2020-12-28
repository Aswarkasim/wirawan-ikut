<!-- Featured Topics Section -->


<div class="container space-sm-2 space-bottom-lg-3">
  <div class="w-md-80 text-center mx-md-auto mb-9">
    <h2>Paket Saat Ini</h2>
    <p>Discover your perfect program in our courses.</p>
  </div>

  <div class="row mb-5">

    <?php
    foreach ($paket as $row) { ?>
      <article class="col-md-6 col-lg-4 mb-5">
        <!-- Article -->
        <div class="card border h-100">
          <div class="card-img-top position-relative">
            <img class="card-img-top" src="<?= base_url($row->cover) ?>" alt="Image Description">

            <div class="position-absolute bottom-0 left-0 mb-3 ml-4">
              <div class="d-flex align-items-center flex-wrap">
              </div>
            </div>
          </div>

          <div class="card-body">
            <small class="d-block small font-weight-bold text-cap mb-2"><?= $row->type; ?></small>

            <div class="mb-3">
              <h3>
                <a class="text-inherit" href="course-description.html">
                  <?= $row->nama_paket; ?>
                </a>
              </h3>
            </div>

            <div class="d-flex align-items-center">
              <div class="avatar-group">
              </div>
              <div class="d-flex align-items-center ml-auto">
                <!-- <div class="small text-muted">
                 <i class="fa fa-book-reader d-block d-sm-inline-block mb-1 mb-sm-0 mr-1"></i>
                 10 lessons
               </div>
               <small class="text-muted mx-2">|</small> -->
                <div class="small text-muted">
                  <i class="fa fa-clock d-block d-sm-inline-block mb-1 mb-sm-0 mr-1"></i>
                  <?= $row->waktu . ' Menit'; ?>
                </div>
              </div>
            </div>
          </div>

          <div class="card-footer border-0 pt-0">
            <div class="d-flex justify-content-between align-items-center">
              <div class="mr-2">
                <!-- <small class="d-block text-muted text-lh-sm"><del>$114.99</del></small> -->
                <span class="d-block h5 text-lh-sm mb-0"><?= 'Rp. ' . nominal($row->harga); ?></span>
              </div>
              <a class="btn btn-sm btn-primary transition-3d-hover" href="<?= base_url('home/paket/detail/' . $row->id_paket); ?>">Ikuti Ujian <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- End Article -->
      </article>

    <?php } ?>


  </div>
  <!-- End Featured Topics Carousel -->

  <div class="text-center">
    <a class="font-weight-bold" href="courses-listing.html">Lihat Semua paket <i class="fa fa-angle-right fa-sm ml-1"></i></a>
  </div>



</div>