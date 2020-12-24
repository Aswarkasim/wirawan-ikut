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


            <?php if ($paket->klasifikasi == 'SAINTEK') { ?>

              <tr>
                <td colspan="2"><strong>Tes Kemampuan Akademik</strong></td>
              </tr>
              <tr>
                <td width="400px">Matematika</td>
                <td>: 20</td>
              </tr>

              <tr>
                <td>Bahasa Inggris</td>
                <td>: 20</td>
              </tr>

              <tr>
                <td>Fisika</td>
                <td>: 20</td>
              </tr>

              <tr>
                <td>Kimia</td>
                <td>: 20</td>
              </tr>

              <tr>
                <td><strong> Rata-rata </strong></td>
                <td><strong> : <?= round($rerataTka, '2'); ?> </strong></td>
              </tr>

            <?php } else if ($paket->klasifikasi == 'SOSHUM') { ?>

              <tr>
                <td colspan="2"><strong>Tes Kemampuan Akademik</strong></td>
              </tr>
              <tr>
                <td width="400px">Matematika</td>
                <td>: <?= $mtkSoshum; ?></td>
              </tr>

              <tr>
                <td>Sejarah</td>
                <td>: <?= $sejarah; ?></td>
              </tr>

              <tr>
                <td>Geografi</td>
                <td>: <?= $geografi; ?></td>
              </tr>

              <tr>
                <td>Sosiologi</td>
                <td>: <?= $sosiologi; ?></td>
              </tr>

              <tr>
                <td>Ekonomi</td>
                <td>: <?= $ekonomi; ?></td>
              </tr>

              <tr>
                <td><strong> Rata-rata </strong></td>
                <td><strong> : <?= round($rerataTka, '2'); ?> </strong></td>
              </tr>

            <?php } ?>

            <tr>
              <td></td>
              <td></td>
            </tr>


            <tr>
              <td colspan="2"><strong>Tes Pengetahuan Skolastik</strong></td>
            </tr>
            <tr>
              <td width="400px">Kemampuan Penalaran Umum</td>
              <td>: <?= $kpu; ?></td>
            </tr>



            <tr>
              <td>Kemampuan Memahami Bacaan dan Menulis</td>
              <td>: <?= $pkmbm; ?></td>
            </tr>

            <tr>
              <td>Pengetahuan dan Pemahaman Umum</td>
              <td>: <?= $ppu; ?></td>
            </tr>

            <tr>
              <td>Pengetahuan Kuantitatif</td>
              <td>: <?= $pk; ?></td>
            </tr>

            <tr>
              <td><strong> Rata-rata </strong></td>
              <td><strong> : <?= round($rerataTps, '2'); ?> </strong></td>
            </tr>

            <!-- <tr>
              <td><strong> Rata-rata </strong></td>
              <td><strong> : <?= round($total, '2'); ?> </strong></td>
            </tr> -->


          </table>
          <a href="<?= base_url('home/paket/petunjuk/'); ?>" class="btn btn-primary text-white"> Selesai <i class="fa fa-angle-right"></i></a>
        </div>

      </article>
      <!-- End Blog Card -->



    </div>
  </div>
  <!-- End Blog Listing Section -->
</main>