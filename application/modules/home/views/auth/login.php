<main id="content" role="main">
  <!-- Login Form -->
  <div class="container space-2 space-lg-3">
    <form action="<?= base_url('home/auth') ?>" method="POST" class="js-validate w-md-75 w-lg-50 mx-md-auto" novalidate="novalidate">
      <!-- Title -->
      <div class="mb-5 mb-md-7">
        <h1 class="h2 mb-0">Selamat Datang Kembali</h1>
        <p>Login untuk mengikuti tes</p>
      </div>
      <!-- End Title -->

      <!-- Form Group -->
      <?= isset($error) ? '<i class="fas fa-warning"></i><div class="text-danger">' . $error . '</div>'  : "" ?>

      <div class="js-form-message form-group">
        <label class="input-label" for="signinSrEmail">Email address</label>
        <input type="email" class="form-control" name="email" id="signinSrEmail" placeholder="Email address" aria-label="Email address" required="" data-msg="Please enter a valid email address.">
      </div>
      <!-- End Form Group -->

      <!-- Form Group -->
      <div class="js-form-message form-group">
        <label class="input-label" for="signinSrPassword">
          <span class="d-flex justify-content-between align-items-center">
            Password
            <a class="link-underline text-capitalize font-weight-normal" href="<?= base_url('home/auth/forgot'); ?>">Lupa password?</a>
          </span>
        </label>
        <input type="password" class="form-control" name="password" id="signinSrPassword" placeholder="********" aria-label="********" required="" data-msg="Your password is invalid. Please try again.">
      </div>
      <!-- End Form Group -->

      <!-- Button -->
      <div class="row align-items-center mb-5">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <span class="font-size-1 text-muted">Belum punya akun?</span>
          <a class="font-size-1 font-weight-bold" href="<?= base_url('home/auth/register'); ?>">Register sekarang</a>
        </div>

        <div class="col-sm-6 text-sm-right">
          <button type="submit" class="btn btn-primary transition-3d-hover">Mulai</button>
        </div>
      </div>
      <!-- End Button -->
    </form>
  </div>
  <!-- End Login Form -->
</main>