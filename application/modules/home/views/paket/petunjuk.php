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
            <h2 class="h3 mb-0">Petunjuk Tes <?= strtoupper($paket->nama_paket)  ?></h2>
          </div>
          <!-- End Title -->

          <div class="text-center">
            <h3>Perhatian !!</h3>
          </div>
          <p>
            <?= $paket->petunjuk ?>
          </p>
          <a href="<?= base_url('home/paket/start/' . $paket->id_paket); ?>" class="btn btn-primary text-white"> Mulai ! <i class="fa fa-angle-right"></i></a><br>
          <a href="<?= base_url('home/paket/rangking/' . $paket->id_paket); ?>" class="btn btn-secondary text-white"><i class="fa fa-chart-line"> </i> Rangking</a>
        </div>

      </article>
      <!-- End Blog Card -->



    </div>
  </div>
  <!-- End Blog Listing Section -->
</main>