<div class="container">


  <div class="text-center mb-5">
    <h3 class="card-header-title">RANGKING <?= strtoupper($paket->nama_paket) ?></h3>
  </div>

  <!-- Table -->
  <div class="table-responsive">
    <table class="table table-borderless table-thead-bordered table-nowrap table-align-middle">
      <thead class="thead-light">
        <tr>
          <th>Rangking</th>
          <th>Name</th>
          <th>Nilai</th>
          <th style="width: 5%;"></th>
        </tr>
      </thead>
      <tbody>

        <?php $no = 1;
        foreach ($rangking as $row) { ?>

          <tr>
            <td>
              <div class="btn btn-primary btn-block"><?= $no++; ?></div>
            </td>
            <td>
              <div class="media align-items-center">
                <img class="avatar avatar-sm avatar-circle mr-3" src="<?= $row->foto != '' ? base_url($row->foto) : base_url('assets/img/blank_image.jpg'); ?>">

                <div class="media-body">
                  <a class="d-inline-block text-dark" href="#">
                    <h6 class="text-hover-primary mb-0"><?= $row->namalengkap; ?></h6>
                  </a>
                </div>
              </div>
            </td>
            <td>
              <div><?= $row->nilai; ?></div>
            </td>
          </tr>

        <?php } ?>

      </tbody>
    </table>
  </div>
  <br>
</div>