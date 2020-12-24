<!-- Nav -->
<div class="text-center mt-2">
  <ul class="nav nav-segment nav-pills scrollbar-horizontal mb-7" role="tablist">
    <li class="nav-item">
      <a class="nav-link <?= $this->uri->segment('2') == 'dashboard' ? 'active' : ''; ?>" href="<?= base_url('akun/dashboard'); ?>" role="tab">Dashboard</a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?= $this->uri->segment('2') == 'profil' ? 'active' : ''; ?>" href="<?= base_url('akun/profil'); ?>" role="tab">Profil</a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?= $this->uri->segment('2') == 'tagihan' ? 'active' : ''; ?>" href="<?= base_url('akun/tagihan'); ?>" role="tab">Tagihan</a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?= $this->uri->segment('2') == 'password' ? 'active' : ''; ?>" href="<?= base_url('akun/password'); ?>" role="tab">Password</a>
    </li>
  </ul>
</div>
<!-- End Nav -->