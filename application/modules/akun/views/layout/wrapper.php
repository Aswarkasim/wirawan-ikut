<?php

$id_user = $this->session->userdata('id_user');
$user = $this->Crud_model->listingOne('tbl_user', 'id_user', $id_user);

$this->load->view('home/layout/head');
$this->load->view('home/layout/header');
?>

<main id="content" role="main" class="bg-light">
  <!-- Breadcrumb Section -->
  <div class="bg-navy" style="background-image: url(<?= base_url('assets/front/'); ?>svg/components/abstract-shapes-20.svg);">
    <div class="container space-1 space-top-lg-2 space-bottom-lg-3">
      <div class="row align-items-center">
        <div class="col">
        </div>

        <div class="col-auto">
          <div class="d-none d-lg-block">
            <a class="btn btn-sm btn-soft-light" href="<?= base_url('home/auth/logout'); ?>">Log out</a>
          </div>

          <!-- Responsive Toggle Button -->
          <button type="button" class="navbar-toggler btn btn-icon btn-sm rounde-circle d-lg-none" aria-label="Toggle navigation" aria-expanded="false" aria-controls="sidebarNav" data-toggle="collapse" data-target="#sidebarNav">
            <span class="navbar-toggler-default">
              <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="M17.4,6.2H0.6C0.3,6.2,0,5.9,0,5.5V4.1c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,5.9,17.7,6.2,17.4,6.2z M17.4,14.1H0.6c-0.3,0-0.6-0.3-0.6-0.7V12c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,13.7,17.7,14.1,17.4,14.1z"></path>
              </svg>
            </span>
            <span class="navbar-toggler-toggled">
              <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z"></path>
              </svg>
            </span>
          </button>
          <!-- End Responsive Toggle Button -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Breadcrumb Section -->

  <!-- Content Section -->
  <div class="container space-1 space-top-lg-0 mt-lg-n10">
    <div class="row">
      <div class="col-lg-3">
        <!-- Navbar -->
        <div class="navbar-expand-lg navbar-expand-lg-collapse-block navbar-light">
          <div id="sidebarNav" class="collapse navbar-collapse navbar-vertical">
            <!-- Card -->
            <div class="card mb-5">
              <div class="card-body">
                <!-- Avatar -->
                <div class="d-none d-lg-block text-center mb-5">
                  <div class="avatar avatar-xxl avatar-circle mb-3">
                    <img class="avatar-img" src="<?= $user->foto != '' ? base_url($user->foto) : base_url('assets/img/blank_image.jpg'); ?>" alt="Image Description">
                  </div>

                  <h4 class="card-title"><?= $this->session->userdata('namalengkap');  ?></h4>
                </div>
                <!-- End Avatar -->

                <a href="<?= base_url('akun/profil'); ?>" class="btn btn-outline-primary btn-block"><i class="fa fa-edit"></i> Edit profil</a>

              </div>
            </div>
            <!-- End Card -->
          </div>
        </div>
        <!-- End Navbar -->
      </div>

      <div class="col-lg-9">
        <!-- Card -->
        <div class="card mb-3 mb-lg-5">
          <!-- Body -->
          <div class="card-body">
            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <?php include('nav.php') ?>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <?php include('content.php') ?>
            </div>
          </div>

        </div>
        <!-- End Card -->

      </div>
    </div>
    <!-- End Row -->
  </div>
  <!-- End Content Section -->
</main>



<?php
$this->load->view('home/layout/footer');
