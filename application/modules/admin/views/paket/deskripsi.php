<div class="active tab-pane" id="deskripsi">

  <div class="post">

    <!-- Is Pembahasan -->
    <div class="btn-group">
      <?php if ($paket->is_active == 1) { ?>
        <button type="button" class="btn btn-success"><i class="fa fa-check"></i> Paket Aktif</button>
      <?php } else { ?>
        <button type="button" class="btn btn-danger"><i class="fa fa-times"></i> Paket Tidak Aktif</button>
      <?php } ?>
      <button type="button" class="btn <?php if ($paket->is_active == 1) {
                                          echo 'btn-success';
                                        } else {
                                          echo "btn-danger";
                                        } ?> dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        <span class="caret"></span>
        <span class="sr-only">Toggle Dropdown</span>
      </button>


      <ul class="dropdown-menu" role="menu">
        <?php if ($paket->is_active == 0) { ?>
          <li><a href="<?= base_url('admin/paket/is_active/' . $paket->id_paket . '/1') ?>"><i class="fa fa-check"></i> Aktif</a></li>
        <?php } else { ?>
          <li><a href="<?= base_url('admin/paket/is_active/' . $paket->id_paket . '/0') ?>"><i class="fa fa-times"></i> Tidak Aktif</a></li>
        <?php } ?>
      </ul>
    </div>


    <!-- Is Pembahasan -->
    <div class="btn-group">
      <?php if ($paket->is_pembahasan == 1) { ?>
        <button type="button" class="btn btn-success"><i class="fa fa-check"></i> Pembahasan Aktif</button>
      <?php } else { ?>
        <button type="button" class="btn btn-danger"><i class="fa fa-times"></i> Pembahasan Tidak Aktif</button>
      <?php } ?>
      <button type="button" class="btn <?php if ($paket->is_pembahasan == 1) {
                                          echo 'btn-success';
                                        } else {
                                          echo "btn-danger";
                                        } ?> dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        <span class="caret"></span>
        <span class="sr-only">Toggle Dropdown</span>
      </button>


      <ul class="dropdown-menu" role="menu">
        <?php if ($paket->is_pembahasan == 0) { ?>
          <li><a href="<?= base_url('admin/paket/is_pembahasan/' . $paket->id_paket . '/1') ?>"><i class="fa fa-check"></i> Aktif</a></li>
        <?php } else { ?>
          <li><a href="<?= base_url('admin/paket/is_pembahasan/' . $paket->id_paket . '/0') ?>"><i class="fa fa-times"></i> Tidak Aktif</a></li>
        <?php } ?>
      </ul>
    </div>

    <!-- Is Rangking -->
    <div class="btn-group">
      <?php if ($paket->is_rangking == 1) { ?>
        <button type="button" class="btn btn-success"><i class="fa fa-check"></i> Rangking Aktif</button>
      <?php } else { ?>
        <button type="button" class="btn btn-danger"><i class="fa fa-times"></i> Rangking Tidak Aktif</button>
      <?php } ?>
      <button type="button" class="btn <?php if ($paket->is_rangking == 1) {
                                          echo 'btn-success';
                                        } else {
                                          echo "btn-danger";
                                        } ?> dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        <span class="caret"></span>
        <span class="sr-only">Toggle Dropdown</span>
      </button>


      <ul class="dropdown-menu" role="menu">
        <?php if ($paket->is_rangking == 0) { ?>
          <li><a href="<?= base_url('admin/paket/is_rangking/' . $paket->id_paket . '/1') ?>"><i class="fa fa-check"></i> Aktif</a></li>
        <?php } else { ?>
          <li><a href="<?= base_url('admin/paket/is_rangking/' . $paket->id_paket . '/0') ?>"><i class="fa fa-times"></i> Tidak Aktif</a></li>
        <?php } ?>
      </ul>
    </div>


    <h4><strong><?= $paket->nama_paket; ?></strong></h4>
    <?= $paket->deskripsi; ?>
    <hr>

  </div>

</div>