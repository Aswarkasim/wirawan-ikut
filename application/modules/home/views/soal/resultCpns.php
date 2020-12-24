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
            <h2 class="h3 mb-0">Hasil Uji Tes </h2>
          </div>
          <!-- End Title -->

          <div class="text-center">
            <h3>Hasil</h3>
          </div>
          <table class="table">
            <tr>
              <td width="300px">Tes Wawasan Kebangsaan</td>
              <td>: <?= $twk; ?></td>
            </tr>
            <tr>
              <td>Tes Intelegensia Umum</td>
              <td>: <?= $tiu; ?></td>
            </tr>
            <tr>
              <td>Tes Karakteristik Pribadi</td>
              <td>: <?= $tkp; ?></td>
            </tr>
          </table>
          <a href="<?= base_url('home/paket/petunjuk/' . $id_paket); ?>" class="btn btn-primary text-white"> Selesai <i class="fa fa-angle-right"></i></a>
        </div>

      </article>
      <!-- End Blog Card -->



    </div>
  </div>
  <!-- End Blog Listing Section -->
</main>