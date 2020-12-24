<main id="content" role="main">
  <!-- Login Form -->
  <div class="container space-2 space-lg-3">
    <form <?= base_url('home/auth/register') ?> method="POST" class="js-validate w-md-75 w-lg-50 mx-md-auto" novalidate="novalidate">
      <!-- Title -->
      <div class="mb-5 mb-md-7">
        <h1 class="h2 mb-0">Selamat Datang</h1>
        <p>Ayo daftar untuk mulai menguji kemampuanmu.</p>
      </div>
      <!-- End Title -->
      <div><?= validation_errors('<div class="text-danger">', '</div>') ?></div>

      <!-- Form Group -->
      <div class="js-form-message form-group">
        <label class="input-label" for="signinSrEmail">Email</label>
        <input type="email" class="form-control" name="email" id="signinSrEmail" placeholder="Email" aria-label="Email address" required="" data-msg="Please enter a valid email address.">
      </div>
      <!-- End Form Group -->

      <!-- Form Group -->
      <div class="js-form-message form-group">
        <label class="input-label" for="signinSrPassword">Password</label>
        <input type="password" class="form-control" name="password" id="signinSrPassword" placeholder="********" aria-label="********" required="" data-msg="Your password is invalid. Please try again.">
      </div>
      <!-- End Form Group -->

      <!-- Form Group -->
      <div class="js-form-message form-group">
        <label class="input-label" for="signinSrConfirmPassword">Konfirmasi Password</label>
        <input type="password" class="form-control" name="re_password" id="signinSrConfirmPassword" placeholder="********" aria-label="********" required="" data-msg="Password does not match the confirm password.">
      </div>
      <!-- End Form Group -->

      <!-- Button -->
      <div class="row align-items-center mb-5">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <span class="font-size-1 text-muted">Belum punya akun?</span>
          <a class="font-size-1 font-weight-bold" href="<?= base_url('home/auth'); ?>">Login</a>
        </div>

        <div class="col-sm-6 text-sm-right">
          <button type="submit" class="btn btn-primary transition-3d-hover">Mulai <i class="fa fa-angle-right"></i></button>
        </div>
      </div>
      <!-- End Button -->
    </form>
  </div>
  <!-- End Login Form -->
</main>