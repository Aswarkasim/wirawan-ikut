<div class="row mt-5">
  <div class="col-lg-12">



    <!-- Table -->
    <div class="table-responsive">
      <table class="table table-borderless table-thead-bordered table-nowrap table-align-middle">
        <thead class="thead-light">
          <tr>
            <th>Paket</th>
            <th>Validasi</th>
            <th>Status</th>
            <th>Besaran</th>
            <th style="width: 5%;"></th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($payment as $row) { ?>
            <tr>
              <td>
                <a href="<?= base_url('home/paket/detail/' . $row->id_paket) ?>"><b><?= $row->nama_paket; ?></b></a></td>
              <td>
                <?php if ($row->is_valid == null) { ?>
                  <span class="badge badge-soft-warning"><i class="fa fa-spinner"></i> Menunggu</span>
                <?php } else if ($row->is_valid == 0) { ?>
                  <span class="badge badge-soft-danger"><i class="fa fa-times"></i> Tidak valid</span>
                <?php } else { ?>
                  <span class="badge badge-soft-success"><i class="fa fa-check"></i> Valid</span>
                <?php } ?>
              </td>
              <td><span class="badge <?= $row->is_pay == 1 ? 'badge-soft-success' : 'badge-soft-warning'; ?> "><?= $row->is_pay == 1 ? 'Telah dibayar' : 'Belum dibayar'; ?></span></td>
              <td><?= 'Rp. ' . nominal($row->jumlah_bayar); ?></td>
              <td><a class="btn btn-xs btn-white" href="javascript:;"><i class="fas fa-times mr-1"></i> Hapus</a></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    <!-- End Table -->
  </div>
</div>