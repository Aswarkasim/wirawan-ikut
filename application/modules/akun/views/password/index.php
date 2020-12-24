<div class="col-lg-12">

  <!-- Card -->

  <form action="<?= base_url('akun/password'); ?>" method="POST">

    <div class="row pt-5">
      <div class="col-md-12">
        <div class="form-group">
          <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-8">
              <?php echo validation_errors('<span class="text text-danger">', '</span>');
              if (isset($error)) {
                echo '<div class="text text-warning"><i class="fa fa-warning"></i> ';
                echo $error;
                echo '</div>';
              } ?>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-md-3">
              <label for="" class="pull-right">Password Lama</label>
            </div>
            <div class="col-md-8">
              <input type="password" class="form-control" name="password_lama" placeholder="Password">
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-md-3">
              <label for="" class="pull-right">Password</label>
            </div>
            <div class="col-md-8">
              <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-md-3">
              <label for="" class="pull-right">Retype Password</label>
            </div>
            <div class="col-md-8">
              <input type="password" class="form-control" name="re_password" placeholder="Ketik ulang password">
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-8">
              <button type="submit" class="btn btn-md btn-primary">Simpan</button>
            </div>
          </div>
        </div>

      </div>

    </div>

  </form>


</div>