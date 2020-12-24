<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg') ?>"></div>
<div class="gagal" data-flashdata="<?= $this->session->flashdata('msg_er') ?>"></div>


<header id="header" class="header left-aligned-navbar">
  <div class="header-section">
    <!-- Topbar -->
    <div class="container">
      <nav class="js-mega-menu navbar navbar-expand-lg z-index-999 hs-menu-initialized hs-menu-horizontal">
        <!-- Responsive Toggle Button -->
        <button type="button" class="navbar-toggler btn btn-xs btn-outline-secondary ml-auto" aria-label="Toggle navigation" aria-expanded="false" aria-controls="topBar" data-toggle="collapse" data-target="#topBar">
          Topbar
          <i class="fa fa-angle-down ml-2"></i>
        </button>
        <!-- End Responsive Toggle Button -->

        <div id="topBar" class="collapse navbar-collapse">
          <ul class="navbar-nav w-100">
            <li class="navbar-nav-item mr-auto">
              <a class="nav-link font-size-1 py-2 pl-0" href="../landings/index.html">
                <i class="fa fa-angle-left mr-1"></i>
                Main Demo
              </a>
            </li>



            <!-- Docs -->
            <li class="hs-has-mega-menu navbar-nav-item" data-hs-mega-menu-item-options="{
                    &quot;desktop&quot;: {
                      &quot;position&quot;: &quot;right&quot;,
                      &quot;maxWidth&quot;: &quot;260px&quot;
                    }
                  }">
              <a id="docsMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle font-size-1 py-2 pr-0" href="javascript:;" aria-haspopup="true" aria-expanded="false">Docs</a>

              <!-- Docs - Submenu -->
              <div class="hs-mega-menu dropdown-menu hs-mega-menu-desktop-lg hs-position-right animated" aria-labelledby="docsMegaMenu" style="min-width: 330px; max-width: 260px; animation-duration: 300ms; display: none;">
                <!-- Promo Item -->
                <div class="navbar-promo-item">
                  <a class="navbar-promo-link" href="../../documentation/index.html">
                    <div class="media align-items-center">
                      <img class="navbar-promo-icon" src="<?= base_url('assets/front/'); ?>svg/icons/icon-2.svg" alt="SVG">
                      <div class="media-body">
                        <span class="navbar-promo-title">
                          Documentation
                          <span class="badge badge-primary badge-pill ml-1">v3.2.2</span>
                        </span>
                        <small class="navbar-promo-text">Development guides</small>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- End Promo Item -->

                <!-- Promo Item -->
                <div class="navbar-promo-item">
                  <a class="navbar-promo-link" href="../../snippets/index.html">
                    <div class="media align-items-center">
                      <img class="navbar-promo-icon" src="<?= base_url('assets/front/'); ?>svg/icons/icon-1.svg" alt="SVG">
                      <div class="media-body">
                        <span class="navbar-promo-title">Snippets</span>
                        <small class="navbar-promo-text">Start building</small>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- End Promo Item -->

                <div class="navbar-promo-footer">
                  <!-- List -->
                  <div class="row no-gutters">
                    <div class="col-6">
                      <div class="navbar-promo-footer-item">
                        <span class="navbar-promo-footer-text">Check what's new</span>
                        <a class="navbar-promo-footer-text" href="../../documentation/changelog.html">
                          Changelog
                        </a>
                      </div>
                    </div>
                    <div class="col-6 navbar-promo-footer-ver-divider">
                      <div class="navbar-promo-footer-item">
                        <span class="navbar-promo-footer-text">Have a question?</span>
                        <a class="navbar-promo-footer-text" href="http://htmlstream.com/contact-us">
                          Contact us
                        </a>
                      </div>
                    </div>
                  </div>
                  <!-- End List -->
                </div>
              </div>
              <!-- End Docs - Submenu -->
            </li>
            <!-- End Docs -->
          </ul>
        </div>
      </nav>
    </div>
    <!-- End Topbar -->

    <div id="logoAndNav" class="container mt-lg-n2">
      <!-- Nav -->
      <nav class="js-mega-menu navbar navbar-expand-lg hs-menu-initialized hs-menu-horizontal">
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
              <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-icon rounded-circle mr-1" href="javascript:;" data-hs-unfold-options="{
                    &quot;target&quot;: &quot;#searchClassic&quot;,
                    &quot;type&quot;: &quot;css-animation&quot;,
                    &quot;animationIn&quot;: &quot;slideInUp&quot;
                   }" data-hs-unfold-target="#searchClassic" data-hs-unfold-invoker="">
                <i class="fas fa-search"></i>
              </a>

              <div id="searchClassic" class="hs-unfold-content dropdown-menu w-100 shadow border-0 rounded-0 px-3 mt-0 hs-unfold-hidden hs-unfold-content-initialized hs-unfold-css-animation animated" data-hs-target-height="0" data-hs-unfold-content="" data-hs-unfold-content-animation-in="slideInUp" data-hs-unfold-content-animation-out="fadeOut" style="animation-duration: 300ms;">
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

            <!-- Login Button -->
            <div class="d-inline-block ml-auto">
              <a href="<?= base_url('home/auth'); ?>" class="btn btn-primary">Ayo Mulai !</a>
            </div>
            <!-- End Login Button -->
          </div>
          <!-- End Secondary Content -->

          <!-- Responsive Toggle Button -->
          <button type="button" class="navbar-toggler navbar-nav-wrap-navbar-toggler btn btn-icon btn-sm rounded-circle" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
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

          <!-- Navigation -->
          <div id="navBar" class="navbar-nav-wrap-navbar collapse navbar-collapse">
            <ul class="navbar-nav">
              <!-- Courses -->
              <li class="hs-has-sub-menu navbar-nav-item">
                <a id="coursesMegaMenu" class="hs-mega-menu-invoker nav-link" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="coursesSubMenu">
                  <i class="fa fa-th font-size-1 mr-1"></i>
                  Courses
                </a>

                <!-- Courses - Submenu -->
                <div id="coursesSubMenu" class="hs-sub-menu dropdown-menu hs-sub-menu-desktop-lg animated" aria-labelledby="coursesMegaMenu" style="min-width: 270px; animation-duration: 300ms; display: none;">
                  <!-- Development -->
                  <div class="hs-has-sub-menu">
                    <a id="navLinkCoursesDevelopment" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuCoursesDevelopment">
                      <span class="min-w-4rem text-center opacity-lg mr-1">
                        <i class="fa fa-laptop-code font-size-1 mr-1"></i>
                      </span>
                      Development
                    </a>

                    <div id="navSubmenuCoursesDevelopment" class="hs-sub-menu dropdown-menu hs-sub-menu-desktop-lg animated" aria-labelledby="navLinkCoursesDevelopment" style="min-width: 270px; animation-duration: 300ms;">
                      <a class="dropdown-item" href="#">All Web Development</a>
                      <a class="dropdown-item" href="#">Web Development</a>
                      <a class="dropdown-item" href="#">Mobile apps</a>
                      <a class="dropdown-item" href="#">Programming languages</a>
                      <a class="dropdown-item" href="#">Game development</a>
                      <a class="dropdown-item" href="#">Databases</a>
                      <a class="dropdown-item" href="#">Software testing</a>
                      <a class="dropdown-item" href="#">Other</a>
                    </div>
                  </div>

                  <div class="dropdown-divider my-3"></div>

                  <div class="px-4">
                    <a class="btn btn-block btn-sm btn-primary transition-3d-hover" href="courses-listing.html">All Courses</a>
                  </div>
                </div>
                <!-- End Courses - Submenu -->
              </li>
              <!-- End Courses -->

              <!-- Search Form -->
              <li class="d-none d-lg-inline-block navbar-nav-item flex-grow-1 mx-2">
                <form class="input-group input-group-sm input-group-merge w-75">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-search"></i>
                    </div>
                  </div>
                  <input type="text" class="form-control" placeholder="What do you want to learn?" aria-label="What do you want to learn?">
                </form>
              </li>
              <!-- End Search Form -->

              <!-- Pages -->
              <li class="hs-has-sub-menu navbar-nav-item mr-lg-auto">

                <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">
                  <span class="avatar avatar-sm avatar-circle">
                    <img class="avatar-img" src="<?= base_url('assets/front/'); ?>img/160x160/img2.jpg" alt="Image Description">
                  </span>
                </a>

                <div id="pagesSubMenu" class="hs-sub-menu dropdown-menu hs-sub-menu-desktop-lg animated" aria-labelledby="pagesMegaMenu" style="min-width: 230px; animation-duration: 300ms; display: none;">
                  <a class="dropdown-item" href="<?= base_url('akun/dashboard'); ?>"><i class="fas fa-dashboard"></i> Dashboard</a>
                  <a class="dropdown-item" href="course-description.html">Course description</a>
                  <a class="dropdown-item" href="author.html">Author</a>
                </div>
              </li>
            </ul>
          </div>
          <!-- End Navigation -->
        </div>
      </nav>
      <!-- End Nav -->
    </div>
  </div>
</header>