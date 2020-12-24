<?php

$this->load->view('home/layout/head');
$this->load->view('home/layout/header');
?>



<div class="container">
  <div class="col-lg-12 mt-5">

    <!-- Card -->
    <div class="card mb-3">
      <div class="card-header">
        <h5 class="card-title">Data Profil</h5>
      </div>
      <form action="<?= base_url('akun/profil/update'); ?>" method="POST">
        <div class="card-body">

          <div class="row">
            <div class="col-md-6">
              <!-- Body -->


              <!-- Form Group -->
              <div class="row form-group">
                <label class="col-sm-3 col-form-label input-label">Foto Profil</label>

                <div class="col-sm-9">
                  <div class="media align-items-center">
                    <label class="avatar avatar-xl avatar-circle mr-4" for="avatarUploader">
                      <img id="avatarImg" class="avatar-img" src="<?= $profil->foto != '' ? base_url($profil->foto) : base_url('assets/img/blank_image.jpg'); ?>" alt="Image Description">
                    </label>

                    <div class="media-body">
                      <button type="button" class="btn btn-primary  btn-xs" data-toggle="modal" data-target="#exampleModalUpload">
                        <i class="fa fa-upload"></i> Upload
                      </button>

                      <a class="btn btn-xs btn-white mb-2 mb-sm-0 hapus-foto" href="<?= base_url('akun/profil/hapusFoto'); ?>"><i class="fa fa-times"></i> Hapus</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Form Group -->

              <!-- Form Group -->
              <div class="row form-group">
                <label for="firstNameLabel" class="col-sm-3 col-form-label input-label">Nama Lengkap</label>

                <div class="col-sm-9">
                  <input type="text" class="form-control" name="namalengkap" id="firstNameLabel" placeholder="Nama Lengkap" value="<?= $profil->namalengkap; ?>">
                </div>
              </div>
              <!-- End Form Group -->


              <div class="row form-group">
                <label for="Email" class="col-sm-3 col-form-label input-label">Email</label>

                <div class="col-sm-9">
                  <input type="email" class="form-control" name="email" id="Email" placeholder="Email" value="<?= $profil->email; ?>">
                </div>
              </div>

              <!-- Form Group -->
              <div class="row form-group">
                <label for="TanggalLahir" class="col-sm-3 col-form-label input-label">Tanggal Lahir</label>
                <div class="col-sm-9">
                  <input type="date" class="form-control" name="tanggal_lahir" id="TanggalLahir" placeholder="Nama Lengkap" value="<?= $profil->tanggal_lahir; ?>">
                </div>
              </div>
              <!-- End Form Group -->

              <!-- Form Group -->
              <div class="row form-group">
                <label class="col-sm-3 col-form-label input-label">Gender</label>

                <div class="col-sm-9">
                  <div class="input-group input-group-md-down-break">
                    <!-- Custom Radio -->
                    <div class="form-control">
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" name="gender" value="Laki-laki" id="genderTypeRadio1" <?= $profil->gender == 'Laki-laki' ? 'checked' : ''; ?>>
                        <label class="custom-control-label" for="genderTypeRadio1">Laki-laki</label>
                      </div>
                    </div>
                    <!-- End Custom Radio -->

                    <!-- Custom Radio -->
                    <div class="form-control">
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" name="gender" value="Perempuan" id="genderTypeRadio2" <?= $profil->gender == 'Perempuan' ? 'checked' : ''; ?>>
                        <label class="custom-control-label" for="genderTypeRadio2">Perempuan</label>
                      </div>
                    </div>
                    <!-- End Custom Radio -->
                  </div>
                </div>
              </div>
              <!-- End Form Group -->

            </div>
            <!-- End Body -->


            <div class="col-md-6">

              <!-- Form Group -->
              <div class="row form-group">
                <label for="phoneLabel" class="col-sm-3 col-form-label input-label">No. Hp.</label>

                <div class="col-sm-9">
                  <input type="text" value="<?= $profil->nohp; ?>" class="js-masked-input form-control" name="nohp" id="phoneLabel">
                </div>
              </div>
              <!-- End Form Group -->

              <!-- Form Group -->
              <div class="row form-group">
                <label for="instagramLabel" class="col-sm-3 col-form-label input-label">Instagram</label>

                <div class="col-sm-9">
                  <input type="text" class="form-control" value="<?= $profil->instagram; ?>" name="instagram" id="instagramLabel" placeholder="@example">
                </div>
              </div>
              <!-- End Form Group -->

              <div class="row form-group">
                <label for="facebookLabel" class="col-sm-3 col-form-label input-label">Facebook</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" value="<?= $profil->facebook; ?>" name="facebook" id="facebookLabel" placeholder="">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Footer -->
        <div class="card-footer d-flex justify-content-end">
          <span class="mx-2"></span>
          <a href="<?= base_url('akun/dashboard'); ?>" class="btn btn-warning text-white mr-2"><i class="fa fa-angle-left"></i> Kembali</a>
          <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Simpan</button>
        </div>
        <!-- End Footer -->

      </form>
    </div>
    <!-- End Card -->


  </div>


  <!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModalUpload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ubah Foto Profil</h5>
          <button type="button" class="btn btn-xs btn-icon btn-soft-secondary" data-dismiss="modal" aria-label="Close">
            <i class="fa fa-times"></i>
          </button>
        </div>
        <?= form_open_multipart('akun/profil/uploadFoto') ?>
        <div class="modal-body">
          <div class="row form-group">
            <label for="FOtoProfil" class="col-sm-3 col-form-label input-label">Foto Profil</label>
            <div class="col-sm-9">
              <input type="file" class="form-control" name="foto" id="FOtoProfil">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-white btn-sm" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary btn-sm"> <i class="fa fa-upload"></i> Upload</button>
        </div>
        <?= form_close() ?>
      </div>
    </div>
  </div>
</div>

<?php
$this->load->view('home/layout/footer');
