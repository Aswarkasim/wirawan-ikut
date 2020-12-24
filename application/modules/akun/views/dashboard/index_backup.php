<div class="col-lg-12">
  <!-- Card -->
  <div class="card">
    <div class="card-header">
      <h5 class="card-title">Dashboard</h5>
    </div>

    <!-- Body -->
    <div class="card-body">
      <div class="row">

        <?php foreach ($paket as $row) { ?>


          <article class="col-md-6 col-lg-6 mb-5">
            <!-- Article -->
            <div class="card border h-100">
              <div class="card-img-top position-relative">

                <div class="card-body">

                  <div class="mb-3">
                    <p class="text-mute"><?= $row->type; ?></p>
                    <h4><?= $row->nama_paket; ?></h4>
                    <small>Aktif sampai <b>8 Februari 2020</b></small>
                    <hr>
                  </div>

                </div>

                <div class="card-footer border-0 pt-0">
                  <div class="d-flex justify-content-between align-items-center">
                    <a class="btn btn-sm btn-primary transition-3d-hover" href="<?= base_url('home/paket/detail/' . $row->id_paket); ?>">Mulai <i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
              <!-- End Article -->
          </article>

        <?php
        }
        ?>

      </div>

    </div>
  </div>
  <!-- End Body -->
</div>
<!-- End Card -->
</div>