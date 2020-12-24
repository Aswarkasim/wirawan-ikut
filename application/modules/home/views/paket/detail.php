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
            <h2 class="h3 mb-0">Lakukan pembayaran untuk memulai ujian</h2>
          </div>
          <!-- End Title -->

          <!-- Product Content -->
          <div class="border-bottom pb-4 mb-4">
            <div class="media">
              <div class="avatar avatar-lg mr-3">
                <img class="avatar-img" src="<?= base_url($paket->cover); ?>" alt="Image Description">
              </div>
              <div class="media-body">
                <h2 class="h6"><?= $paket->nama_paket; ?></h2>

                <table class="table">
                  <tr>
                    <td width="200px">Type</td>
                    <td>: <?= $paket->type; ?></td>
                  </tr>
                  <tr>
                    <td>Klasifikasi</td>
                    <td>: <?= $paket->klasifikasi; ?></td>
                  </tr>
                  <tr>
                    <td>Biaya</td>
                    <td>: <?= $paket->harga; ?></td>
                  </tr>
                  <tr>
                    <td>Kode Bayar</td>
                    <td>: 3 digit angka ditambahkan dibelakang harga. Akan muncul saat membuat invoice</td>
                  </tr>
                </table>

              </div>
            </div>
          </div>
          <!-- End Product Content -->

          <!-- Fees -->
          <div class="border-bottom pb-4 mb-4">
            <div class="media align-items-center mb-3">
              <div class="media-body text-right">
                <span class="text-dark font-weight-bold">Total Bayar : <?= 'Rp. ' . nominal($paket->harga) ?></span>
                <br><a href="" data-toggle="modal" data-target="#exampleModal">Punya kupon?</a>
              </div>
            </div>

            <center>
              <a href="<?= base_url('home/paket/buatInvoice/' . $paket->id_paket); ?>" class="btn btn-primary text-white"><i class="fas fa-credit-card"></i> Buat Invoice</a>
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



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Kupon</h5>
        <button type="button" class="btn btn-xs btn-icon btn-soft-secondary" data-dismiss="modal" aria-label="Close">
          <svg aria-hidden="true" width="10" height="10" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
            <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z" />
          </svg>
        </button>
      </div>
      <form action="<?= base_url('home/paket/submitKupon/' . $paket->id_paket); ?>" method="POST">
        <div class="modal-body">
          <div class="row form-group">
            <label for="Token" class="col-sm-3 col-form-label input-label">Kupon</label>

            <div class="col-sm-9">
              <input type="text" class="form-control" name="kupon" id="Token" placeholder="Kupon" value="<?= set_value('kupon') ?>">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-white" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Buat Invoice</button>
        </div>
      </form>
    </div>
  </div>
</div>