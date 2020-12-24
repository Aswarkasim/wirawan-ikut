<!-- Team Section -->
<div class="container space-2">
  <!-- Title -->
  <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-5 mb-md-9">

    <h2>Tim Kami</h2>
    <span>Berlatar belakang profesional di bidangnya</span>
  </div>
  <!-- End Title -->

  <div class="row mx-n2 mb-5">

    <?php foreach ($team as $row) { ?>
      <div class="col-sm-6 col-lg-4 px-2 mb-3">
        <!-- Team -->
        <div class="card h-100 transition-3d-hover">
          <div class="card-body">
            <center>
              <div class="avatar avatar-lg avatar-circle mb-4">
                <img class="avatar-img" src="<?= base_url($row->gambar); ?>" alt="Image Description">
              </div>
              <h5 class="text-lh-sm"><?= $row->nama_team; ?></h5>
              <span class="d-block small font-weight-bold text-cap mb-1"><?= $row->pekerjaan; ?></span>
              <hr>
              <p class="font-size-1"><?= character_limiter($row->deskripsi, '100') ?></p>
            </center>
          </div>

          <div class="card-footer border-0 pt-0">
            <!-- Social Networks -->
            <!-- <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-xs btn-icon btn-soft-secondary rounded" href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-xs btn-icon btn-soft-secondary rounded" href="#">
                  <i class="fab fa-google"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-xs btn-icon btn-soft-secondary rounded" href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
            </ul> -->
            <!-- End Social Networks -->
          </div>
        </div>
        <!-- End Team -->
      </div>
    <?php } ?>


  </div>

  <!-- Info -->
  <div class="text-center">
    <div class="d-inline-block font-size-1 border bg-white text-center rounded-pill py-3 px-4">
      Wanna work with us? <a class="font-weight-bold ml-3" href="hire-us.html">We are hiring <span class="fas fa-angle-right fa-sm ml-1"></span></a>
    </div>
  </div>
  <!-- End Info -->
</div>
<!-- End Team Section -->