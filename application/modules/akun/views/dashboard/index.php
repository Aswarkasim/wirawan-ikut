  <h4 class="pt-2"><strong> Paket Saya</strong></h4>
  <hr>

  <div class="row mt-5">

    <?php if ($mypaket == null) {
      echo '<p class="alert alert-soft-success btn-block"><i class="fas fa-stroopwafel"></i> Anda tidak memiliki paket tes</p>';
    }
    foreach ($mypaket as $row) { ?>

      <article class="col-md-4">
        <!-- Article -->
        <div class="card border">
          <div class="card-img-top position-relative">

            <div class="card-body">

              <div class="mb-3">
                <p class="text-mute"><?= $row->type; ?></p>
                <h5><?= $row->nama_paket; ?></h5>
                <small>Aktif sampai <br> <b><?= format_indo($row->aktif_sampai) ?></b></small>
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

    <?php } ?>
  </div>


  <h4 class="pt-2"><strong> Paket Tersedia</strong></h4>
  <hr>
  <div class="row mt-2">
    <?php
    $id_user   = $this->session->userdata('id_user');
    $this->load->model('Akun_model', 'AM');
    foreach ($paket as $row) {
      $member  = $this->AM->myPaketDetail($id_user, $row->id_paket);

      if ($member == null) {
    ?>

        <article class="col-md-4">
          <!-- Article -->
          <div class="card border">
            <div class="card-img-top position-relative">

              <div class="card-body">

                <div class="mb-3">
                  <p class="text-mute"><?= $row->type; ?></p>
                  <h5><?= $row->nama_paket; ?></h5>
                  <!-- <small>Aktif sampai <b>8 Februari 2020</b></small> -->
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

    <?php }
    } ?>
  </div>







  </div>