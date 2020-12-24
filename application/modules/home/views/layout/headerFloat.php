<?php
$type = $this->Crud_model->listing('tbl_type');
?>

<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>
<div class="gagal" data-flashdata="<?= $this->session->flashdata('msg_er') ?>"></div>




<!-- ========== HEADER ========== -->
<header id="header" class="header header-box-shadow header-box-shadow-on-scroll header-floating-lg">
  <div id="logoAndNav" class="container">
    <div class="header-section header-floating-inner mx-lg-n3">
      <!-- Nav -->
      <nav class="js-mega-menu navbar navbar-expand-lg">
        <!-- Logo -->
        <a class="navbar-brand" href="#" aria-label="Front">
          <img src="<?= base_url('assets/front/'); ?>svg/logos/logo.svg" alt="Logo">
        </a>
        <!-- End Logo -->

        <!-- Responsive Toggle Button -->
        <button type="button" class="navbar-toggler btn btn-icon btn-sm rounded-circle" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
          <span class="navbar-toggler-default">
            <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
              <path fill="currentColor" d="M17.4,6.2H0.6C0.3,6.2,0,5.9,0,5.5V4.1c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,5.9,17.7,6.2,17.4,6.2z M17.4,14.1H0.6c-0.3,0-0.6-0.3-0.6-0.7V12c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,13.7,17.7,14.1,17.4,14.1z" />
            </svg>
          </span>
          <span class="navbar-toggler-toggled">
            <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
              <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z" />
            </svg>
          </span>
        </button>
        <!-- End Responsive Toggle Button -->

        <!-- Navigation -->
        <div id="navBar" class="collapse navbar-collapse">
          <ul class="navbar-nav">

            <li class="hs-has-sub-menu navbar-nav-item">
              <a id="blogMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="blogSubMenu">Ingin tes apa?</a>

              <!-- Blog - Submenu -->
              <div id="blogSubMenu" class="hs-sub-menu dropdown-menu hs-sub-menu-desktop-lg fadeOut animated" aria-labelledby="blogMegaMenu" style="min-width: 230px; display: none; animation-duration: 300ms;">
                <?php foreach ($type as $row) { ?>
                  <a class="dropdown-item" href="<?= base_url('home/paket/type/' . $row->id_type); ?>"><?= $row->nama_type; ?></a>
                <?php } ?>
              </div>
              <!-- End Submenu -->
            </li>

            <!-- Blog -->
            <li class="hs-has-sub-menu navbar-nav-item">
              <a href="<?= base_url('akun/dashboard'); ?>" class="hs-mega-menu-invoker nav-link">Dashboard</a>
            </li>
            <!-- End Blog -->


            <!-- Button -->
            <?php if (empty($this->session->userdata('id_user'))) { ?>
              <!-- Button -->
              <li class="navbar-nav-last-item">
                <a href="<?= base_url('home/auth'); ?>" class="btn btn-primary btn-sm">Ayo Mulai</a>
              </li>
              <!-- End Button -->
            <?php } ?>
            <!-- End Button -->
          </ul>
        </div>
        <!-- End Navigation -->
      </nav>
      <!-- End Nav -->
    </div>
  </div>
</header>
<!-- ========== END HEADER ========== -->