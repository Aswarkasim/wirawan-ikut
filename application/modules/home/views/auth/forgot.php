<main id="content" role="main">
  <!-- Login Form -->
  <div class="container space-2 space-lg-3">
    <form class="js-validate w-md-75 w-lg-50 mx-md-auto" novalidate="novalidate">
      <!-- Title -->
      <div class="mb-5 mb-md-7">
        <h1 class="h2 mb-0">Forgot your password?</h1>
        <p>Enter your email address below and we'll get you back on track.</p>
      </div>
      <!-- End Title -->

      <!-- Form Group -->
      <div class="js-form-message form-group">
        <label class="input-label" for="signinSrEmail">Email address</label>
        <input type="email" class="form-control" name="email" id="signinSrEmail" placeholder="Email address" aria-label="Email address" required="" data-msg="Please enter a valid email address.">
      </div>
      <!-- End Form Group -->

      <!-- Button -->
      <div class="row align-items-center mb-5">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <a class="font-size-1 font-weight-bold" href="<?= base_url('home/auth'); ?>"><i class="fas fa-angle-left fa-sm mr-1"></i> Kembali ke halaman login</a>
        </div>

        <div class="col-sm-6 text-sm-right">
          <button type="submit" class="btn btn-primary transition-3d-hover">Request Reset Link</button>
        </div>
      </div>
      <!-- End Button -->
    </form>
  </div>
  <!-- End Login Form -->
</main>