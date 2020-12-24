<?php
$type = $this->Crud_model->listing('tbl_type');
?>

<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>
<div class="gagal" data-flashdata="<?= $this->session->flashdata('msg_er') ?>"></div>


<!-- ========== HEADER ========== -->
<header id="header" class="header left-aligned-navbar pt-5">
  <div class="header-section">
    <!-- Topbar -->
    <div class="container">
      <nav class="js-mega-menu navbar navbar-expand-lg z-index-999">
        <!-- Responsive Toggle Button -->
        <button type="button" class="navbar-toggler btn btn-xs btn-outline-secondary ml-auto" aria-label="Toggle navigation" aria-expanded="false" aria-controls="topBar" data-toggle="collapse" data-target="#topBar">
          Topbar
          <i class="fa fa-angle-down ml-2"></i>
        </button>
        <!-- End Responsive Toggle Button -->

      </nav>
    </div>
    <!-- End Topbar -->

    <div id="logoAndNav" class="container mt-lg-n2">
      <!-- Nav -->
      <nav class="js-mega-menu navbar navbar-expand-lg">
        <div class="navbar-nav-wrap">
          <!-- Logo -->
          <a class="navbar-brand navbar-nav-wrap-brand" href="<?= base_url(); ?>" aria-label="Front">
            <img src="<?= base_url('assets/front/'); ?>svg/logos/logo.svg" alt="Logo">
          </a>
          <!-- End Logo -->

          <!-- Secondary Content -->
          <div class="navbar-nav-wrap-content">
            <!-- Search Classic -->
            <div class="hs-unfold d-lg-none d-inline-block position-static">
              <a class="js-hs-unfold-invoker btn btn-xs btn-icon rounded-circle" href="javascript:;" data-hs-unfold-options='{
                  "target": "#searchClassic",
                  "type": "css-animation",
                  "animationIn": "slideInUp"
                 }'>
                <i class="fas fa-search"></i>
              </a>

              <div id="searchClassic" class="hs-unfold-content dropdown-menu w-100 border-0 rounded-0 px-3 mt-0">
                <form class="input-group input-group-sm input-group-merge">
                  <input type="text" class="form-control" placeholder="What do you want to learn?" aria-label="What do you want to learn?">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <i class="fas fa-search"></i>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- End Search Classic -->

            <!-- Account -->
            <div class="hs-unfold">

              <?php if ($this->session->userdata('id_user')) { ?>
                <a class="js-hs-unfold-invoker rounded-circle" href="javascript:;" data-hs-unfold-options='{
                  "target": "#accountDropdown",
                  "type": "css-animation",
                  "event": "hover",
                  "duration": 50,
                  "delay": 0,
                  "hideOnScroll": "true"
                 }'>
                  <span class="avatar avatar-xs avatar-circle">
                    <img class="avatar-img" src="<?= base_url('assets/front/'); ?>img/100x100/img1.jpg" alt="Image Description">
                  </span>
                </a>

                <div id="accountDropdown" class="hs-unfold-content dropdown-menu dropdown-menu-sm-right dropdown-menu-no-border-on-mobile p-0" style="min-width: 245px;">
                  <div class="card">
                    <!-- Header -->
                    <div class="card-header p-4">
                      <a class="media align-items-center" href="#">
                        <div class="avatar mr-3">
                          <img class="avatar-img" src="<?= base_url('assets/front/'); ?>img/100x100/img1.jpg" alt="Image Description">
                        </div>
                        <div class="media-body">
                          <span class="d-block font-weight-bold">Nataly Gaga <span class="badge badge-success ml-1">Pro</span></span>
                          <span class="d-block small text-muted">natalygaga@gmail.com</span>
                        </div>
                      </a>
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <div class="card-body py-3">
                      <a class="dropdown-item px-0" href="#">
                        <span class="dropdown-item-icon">
                          <i class="fas fa-user"></i>
                        </span>
                        Dasboard
                      </a>
                      <a class="dropdown-item px-0" href="#">
                        <span class="dropdown-item-icon">
                          <i class="fas fa-credit-card"></i>
                        </span>
                        Tagihan
                      </a>

                      <div class="dropdown-divider"></div>

                      <a class="dropdown-item px-0" href="#">
                        <span class="dropdown-item-icon">
                          <i class="fas fa-question-circle"></i>
                        </span>
                        Help
                      </a>
                      <a class="dropdown-item px-0" href="#">
                        <span class="dropdown-item-icon">
                          <i class="fas fa-power-off"></i>
                        </span>
                        Log out
                      </a>
                    </div>
                    <!-- End Body -->
                  </div>
                </div>
              <?php } else { ?>

                <a href="<?= base_url('home/auth'); ?>" class="btn btn-primary">Ayo Mulai</a>
              <?php } ?>
            </div>
            <!-- End Account -->
          </div>
          <!-- End Secondary Content -->

          <!-- Responsive Toggle Button -->
          <button type="button" class="navbar-toggler navbar-nav-wrap-navbar-toggler btn btn-icon btn-sm rounded-circle" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
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
          <div id="navBar" class="navbar-nav-wrap-navbar collapse navbar-collapse">
            <ul class="navbar-nav">
              <!-- Courses -->
              <?php foreach ($type as $row) { ?>
                <li class="hs-has-sub-menu navbar-nav-item">
                  <a id="coursesMegaMenu" class="hs-mega-menu-invoker nav-link" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="coursesSubMenu">
                    <i class="fa fa-th font-size-1 mr-1"></i>
                    Paket Tes
                  </a>

                  <!-- Courses - Submenu -->


                  <div id="coursesSubMenu" class="hs-sub-menu dropdown-menu" aria-labelledby="coursesMegaMenu" style="min-width: 270px;">
                    <!-- Development -->
                    <div class="hs-has-sub-menu">
                      <a id="" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuCoursesDevelopment">
                        <span class="min-w-4rem text-center opacity-lg mr-1">
                          <i class="fa fa-laptop-code font-size-1 mr-1"></i>
                        </span>
                        <?= $row->nama_type; ?>
                      </a>

                      <div id="" class="hs-sub-menu">
                      </div>
                    </div>
                    <!-- End Development -->

                    <div class="dropdown-divider my-3"></div>

                    <div class="px-4">
                      <a class="btn btn-block btn-sm btn-primary transition-3d-hover" href="#">All Courses</a>
                    </div>
                  </div>

                  <!-- End Courses - Submenu -->
                </li>
              <?php } ?>
              <!-- End Courses -->

              <!-- End Search Form -->

            </ul>
          </div>
          <!-- End Navigation -->
        </div>
      </nav>
      <!-- End Nav -->
    </div>
  </div>
</header>
<!-- ========== END HEADER ========== -->