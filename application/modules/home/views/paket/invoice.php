<main id="content" role="main">
  <!-- User Profile Section -->

  <!-- Blog Listing Section -->
  <div class="container space-bottom-3">
    <div class="w-md-75 w-lg-60 mx-md-auto">
      <!-- End Blog Card -->
      <article class="card mb-3 mb-sm-5">
        <div class="card shadow-soft p-4 mb-4">
          <!-- Title -->
          <div class="border-bottom pb-4 mb-4">
            <h2 class="h3 mb-0">ID Pembayaran : <?= '#' . $payment->id_payment; ?></h2>
          </div>
          <!-- End Title -->

          <!-- Product Content -->
          <div class="border-bottom pb-4 mb-4">
            <div class="media">
              <div class="avatar avatar-lg mr-3">
                <img class="avatar-img" src="<?= base_url($payment->cover); ?>" alt="Image Description">
              </div>
              <div class="media-body">
                <h2 class="h6"><?= $payment->nama_paket; ?></h2>

                <table class="table">
                  <tr>
                    <td width="150px">Biaya</td>
                    <td>: <?= 'Rp. ' . nominal($payment->harga); ?></td>
                  </tr>
                  <tr>
                    <td>Kode Bayar</td>
                    <td>: <?= $payment->kode; ?></td>
                  </tr>
                  <?php if ($payment->is_valid == null) { ?>
                    <tr>
                      <td>Status Bayar</td>
                      <td>: <?= $payment->is_pay == 0 ? "Belum dibayar" : '<i class="fa fa-spinner text-danger"></i> Menunggu'; ?></td>
                    </tr>
                  <?php } ?>
                  <?php if ($payment->is_pay == 1) {
                    if ($payment->is_valid != null) { ?>
                      <tr>
                        <td>Status Valid</td>
                        <td>: <?= $payment->is_valid == 0 ? '<i class="fa fa-times text-danger"></i> Tidak Valid' : '<i class="fa fa-check text-success"></i> Valid'; ?></td>
                      </tr>
                  <?php }
                  } ?>
                </table>

              </div>
            </div>
          </div>
          <!-- End Product Content -->

          <!-- Fees -->
          <div class="border-bottom pb-4 mb-4">
            <div class="media align-items-center mb-3">
              <div class="media-body text-right">
                <span class="text-dark font-weight-bold">Total Bayar : <?= 'Rp. ' . nominal($payment->jumlah_bayar) ?></span>
              </div>
            </div>

            <center>
              <?php if ($payment->is_pay == 0) { ?>
                <a href="<?= base_url('home/paket/is_pay/1/' . $payment->id_payment); ?>" class="btn btn-primary text-white"><i class="fas fa-credit-card"></i> Sudah dibayar?</a>
                <?php } else {
                if ($payment->is_valid == 0) { ?>
                  <a href="<?= base_url('home/paket/invoice/' . $payment->id_payment); ?>" class="btn btn-warning text-white"><i class="fa fa-spinner"></i> Cek Status?</a>
                <?php } else { ?>
                  <!-- <a href="<?= base_url('home/paket/start/' . $payment->id_paket); ?>" class="btn btn-primary text-white"> Mulai ! <i class="fa fa-angle-right"></i></a> -->
                  <a href="<?= base_url('home/paket/petunjuk/' . $payment->id_paket); ?>" class="btn btn-primary text-white"> Mulai ! <i class="fa fa-angle-right"></i></a>
              <?php }
              } ?>
            </center>
          </div>
          <!-- End Fees -->

          <div class="text-center">
            <h3>Perhatian !!</h3>
          </div>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio omnis voluptatibus odit, facilis, dolore quasi saepe ipsam magni eveniet, repudiandae tempore dolores tempora rerum repellendus praesentium exercitationem soluta sed totam?
          </p>
        </div>

      </article>
      <!-- End Blog Card -->



    </div>
  </div>
  <!-- End Blog Listing Section -->
</main>