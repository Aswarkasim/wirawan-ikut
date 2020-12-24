<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Course | Front - Responsive Website Template</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../favicon.ico">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?= base_url('assets/front/vendor/'); ?>font-awesome/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/front/vendor/'); ?>hs-mega-menu/dist/hs-mega-menu.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/front/vendor/'); ?>fancybox/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/front/vendor/'); ?>slick-carousel/slick/slick.css">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="<?= base_url('assets/front/'); ?>css/theme.css">
</head>

<body>
    <!-- ========== HEADER ========== -->
    <header id="header" class="header left-aligned-navbar">
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

                    <div id="topBar" class="collapse navbar-collapse">
                        <ul class="navbar-nav w-100">
                            <li class="navbar-nav-item mr-auto">
                                <a class="nav-link font-size-1 py-2 pl-0" href="../landings/index.html">
                                    <i class="fa fa-angle-left mr-1"></i>
                                    Main Demo
                                </a>
                            </li>

                            <!-- Demos -->
                            <li class="hs-has-mega-menu navbar-nav-item" data-hs-mega-menu-item-options='{
                    "desktop": {
                      "position": "right",
                      "maxWidth": "900px"
                    }
                  }'>
                                <a id="demosMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle font-size-1 py-2" href="javascript:;" aria-haspopup="true" aria-expanded="false">Demos</a>

                                <!-- Demos - Mega Menu -->
                                <div class="hs-mega-menu dropdown-menu w-100" aria-labelledby="demosMegaMenu">
                                    <div class="row no-gutters">
                                        <div class="col-lg-8">
                                            <div class="navbar-promo-card-deck">
                                                <!-- Promo Item -->
                                                <div class="navbar-promo-card navbar-promo-item">
                                                    <a class="navbar-promo-link" href="index.html">
                                                        <div class="media align-items-center">
                                                            <img class="navbar-promo-icon" src="../../assets/svg/icons/icon-67.svg" alt="SVG">
                                                            <div class="media-body">
                                                                <span class="navbar-promo-title">Course <span class="badge badge-success badge-pill ml-1">New</span></span>
                                                                <span class="navbar-promo-text">Learn On-demand demo</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- End Promo Item -->

                                                <!-- Promo Item -->
                                                <div class="navbar-promo-card navbar-promo-item">
                                                    <a class="navbar-promo-link" href="../app-marketplace/index.html">
                                                        <div class="media align-items-center">
                                                            <img class="navbar-promo-icon" src="../../assets/svg/icons/icon-45.svg" alt="SVG">
                                                            <div class="media-body">
                                                                <span class="navbar-promo-title">App Marketplace</span>
                                                                <span class="navbar-promo-text">Marketplace app demo</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- End Promo Item -->
                                            </div>

                                            <div class="navbar-promo-card-deck">
                                                <!-- Promo Item -->
                                                <div class="navbar-promo-card navbar-promo-item">
                                                    <a class="navbar-promo-link" href="../help-desk/index.html">
                                                        <div class="media align-items-center">
                                                            <img class="navbar-promo-icon" src="../../assets/svg/icons/icon-4.svg" alt="SVG">
                                                            <div class="media-body">
                                                                <span class="navbar-promo-title">Help Desk</span>
                                                                <span class="navbar-promo-text">Help desk demo</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- End Promo Item -->

                                                <!-- Promo Item -->
                                                <div class="navbar-promo-card navbar-promo-item">
                                                    <a class="navbar-promo-link disabled" href="javascript:;">
                                                        <div class="media align-items-center">
                                                            <img class="navbar-promo-icon" src="../../assets/svg/icons/icon-13.svg" alt="SVG">
                                                            <div class="media-body">
                                                                <span class="navbar-promo-title">Real Estate</span>
                                                                <span class="navbar-promo-text">Coming soon...</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- End Promo Item -->
                                            </div>

                                            <div class="navbar-promo-card-deck">
                                                <!-- Promo Item -->
                                                <div class="navbar-promo-card navbar-promo-item">
                                                    <a class="navbar-promo-link disabled" href="javascript:;">
                                                        <div class="media align-items-center">
                                                            <img class="navbar-promo-icon" src="../../assets/svg/icons/icon-19.svg" alt="SVG">
                                                            <div class="media-body">
                                                                <span class="navbar-promo-title">Job</span>
                                                                <span class="navbar-promo-text">Coming soon...</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- End Promo Item -->

                                                <!-- Promo Item -->
                                                <div class="navbar-promo-card navbar-promo-item">
                                                    <a class="navbar-promo-link disabled" href="javascript:;">
                                                        <div class="media align-items-center">
                                                            <img class="navbar-promo-icon" src="../../assets/svg/icons/icon-28.svg" alt="SVG">
                                                            <div class="media-body">
                                                                <span class="navbar-promo-title">New demo</span>
                                                                <span class="navbar-promo-text">Coming soon...</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- End Promo Item -->
                                            </div>
                                        </div>

                                        <!-- Promo -->
                                        <div class="col-lg-4 navbar-promo d-none d-lg-block">
                                            <a class="d-block navbar-promo-inner" href="#">
                                                <div class="position-relative">
                                                    <img class="img-fluid rounded mb-3" src="../../assets/img/380x227/img1.jpg" alt="Image Description">
                                                </div>
                                                <span class="navbar-promo-text font-size-1">Front makes you look at things from a different perspectives.</span>
                                            </a>
                                        </div>
                                        <!-- End Promo -->
                                    </div>
                                </div>
                                <!-- End Demos - Mega Menu -->
                            </li>
                            <!-- End Demos -->

                            <!-- Docs -->
                            <li class="hs-has-mega-menu navbar-nav-item" data-hs-mega-menu-item-options='{
                    "desktop": {
                      "position": "right",
                      "maxWidth": "260px"
                    }
                  }'>
                                <a id="docsMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle font-size-1 py-2 pr-0" href="javascript:;" aria-haspopup="true" aria-expanded="false">Docs</a>

                                <!-- Docs - Submenu -->
                                <div class="hs-mega-menu dropdown-menu" aria-labelledby="docsMegaMenu" style="min-width: 330px;">
                                    <!-- Promo Item -->
                                    <div class="navbar-promo-item">
                                        <a class="navbar-promo-link" href="../../documentation/index.html">
                                            <div class="media align-items-center">
                                                <img class="navbar-promo-icon" src="../../assets/svg/icons/icon-2.svg" alt="SVG">
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
                                                <img class="navbar-promo-icon" src="../../assets/svg/icons/icon-1.svg" alt="SVG">
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
                <nav class="js-mega-menu navbar navbar-expand-lg">
                    <div class="navbar-nav-wrap">
                        <!-- Logo -->
                        <a class="navbar-brand navbar-nav-wrap-brand" href="index.html" aria-label="Front">
                            <img src="../../assets/svg/logos/logo.svg" alt="Logo">
                        </a>
                        <!-- End Logo -->

                        <!-- Secondary Content -->
                        <div class="navbar-nav-wrap-content">
                            <!-- Search Classic -->
                            <div class="hs-unfold d-lg-none d-inline-block position-static">
                                <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-icon rounded-circle mr-1" href="javascript:;" data-hs-unfold-options='{
                    "target": "#searchClassic",
                    "type": "css-animation",
                    "animationIn": "slideInUp"
                   }'>
                                    <i class="fas fa-search"></i>
                                </a>

                                <div id="searchClassic" class="hs-unfold-content dropdown-menu w-100 shadow border-0 rounded-0 px-3 mt-0">
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
                                <button type="button" class="btn btn-sm btn-primary d-none d-lg-inline-block" data-toggle="modal" data-target="#loginModal">Get Started</button>
                                <button type="button" class="btn btn-xs btn-icon rounded-circle d-lg-none" data-toggle="modal" data-target="#loginModal">
                                    <i class="fas fa-user-circle"></i>
                                </button>
                            </div>
                            <!-- End Login Button -->
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
                                <li class="hs-has-sub-menu navbar-nav-item">
                                    <a id="coursesMegaMenu" class="hs-mega-menu-invoker nav-link" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="coursesSubMenu">
                                        <i class="fa fa-th font-size-1 mr-1"></i>
                                        Courses
                                    </a>

                                    <!-- Courses - Submenu -->
                                    <div id="coursesSubMenu" class="hs-sub-menu dropdown-menu" aria-labelledby="coursesMegaMenu" style="min-width: 270px;">
                                        <!-- Development -->
                                        <div class="hs-has-sub-menu">
                                            <a id="navLinkCoursesDevelopment" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuCoursesDevelopment">
                                                <span class="min-w-4rem text-center opacity-lg mr-1">
                                                    <i class="fa fa-laptop-code font-size-1 mr-1"></i>
                                                </span>
                                                Development
                                            </a>

                                            <div id="navSubmenuCoursesDevelopment" class="hs-sub-menu dropdown-menu" aria-labelledby="navLinkCoursesDevelopment" style="min-width: 270px;">
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
                                        <!-- End Development -->

                                        <!-- Business -->
                                        <div class="hs-has-sub-menu">
                                            <a id="navLinkCoursesBusiness" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuCoursesBusiness">
                                                <span class="min-w-4rem text-center opacity-lg mr-1">
                                                    <i class="fa fa-chart-bar font-size-1 mr-1"></i>
                                                </span>
                                                Business
                                            </a>

                                            <div id="navSubmenuCoursesBusiness" class="hs-sub-menu dropdown-menu" aria-labelledby="navLinkCoursesBusiness" style="min-width: 270px;">
                                                <a class="dropdown-item" href="#">All Business</a>
                                                <a class="dropdown-item" href="#">Finance</a>
                                                <a class="dropdown-item" href="#">Entrepreneurship</a>
                                                <a class="dropdown-item" href="#">Communications</a>
                                                <a class="dropdown-item" href="#">Management</a>
                                                <a class="dropdown-item" href="#">Sales</a>
                                                <a class="dropdown-item" href="#">Strategy</a>
                                                <a class="dropdown-item" href="#">Operations</a>
                                                <a class="dropdown-item" href="#">Project management</a>
                                                <a class="dropdown-item" href="#">Business law</a>
                                                <a class="dropdown-item" href="#">Data &amp; Analytics</a>
                                                <a class="dropdown-item" href="#">Other</a>
                                            </div>
                                        </div>
                                        <!-- Business -->

                                        <!-- Finance & Accounting -->
                                        <div class="hs-has-sub-menu">
                                            <a id="navLinkCoursesFinanceAccounting" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuCoursesFinanceAccounting">
                                                <span class="min-w-4rem text-center opacity-lg mr-1">
                                                    <i class="fa fa-wallet font-size-1 mr-1"></i>
                                                </span>
                                                Finance &amp; Accounting
                                            </a>

                                            <div id="navSubmenuCoursesFinanceAccounting" class="hs-sub-menu dropdown-menu" aria-labelledby="navLinkCoursesFinanceAccounting" style="min-width: 270px;">
                                                <a class="dropdown-item" href="#">All Finance &amp; Accounting</a>
                                                <a class="dropdown-item" href="#">Accounting &amp; Bookkeeping</a>
                                                <a class="dropdown-item" href="#">Compliance</a>
                                                <a class="dropdown-item" href="#">Economics</a>
                                                <a class="dropdown-item" href="#">Finance</a>
                                                <a class="dropdown-item" href="#">Other</a>
                                            </div>
                                        </div>
                                        <!-- End Finance & Accounting -->

                                        <!-- IT & Software -->
                                        <div class="hs-has-sub-menu">
                                            <a id="navLinkCoursesITSoftware" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuCoursesITSoftware">
                                                <span class="min-w-4rem text-center opacity-lg mr-1">
                                                    <i class="fa fa-desktop font-size-1 mr-1"></i>
                                                </span>
                                                IT &amp; Software
                                            </a>

                                            <div id="navSubmenuCoursesITSoftware" class="hs-sub-menu dropdown-menu" aria-labelledby="navLinkCoursesITSoftware" style="min-width: 270px;">
                                                <a class="dropdown-item" href="#">All IT &amp; Software</a>
                                                <a class="dropdown-item" href="#">IT Sertification</a>
                                                <a class="dropdown-item" href="#">Network &amp; security</a>
                                                <a class="dropdown-item" href="#">Hardware</a>
                                                <a class="dropdown-item" href="#">Operating systems</a>
                                                <a class="dropdown-item" href="#">Other</a>
                                            </div>
                                        </div>
                                        <!-- IT & Software -->

                                        <!-- Design -->
                                        <div class="hs-has-sub-menu">
                                            <a id="navLinkDesignServices" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuDesignServices">
                                                <span class="min-w-4rem text-center opacity-lg mr-1">
                                                    <i class="fa fa-pencil-ruler font-size-1 mr-1"></i>
                                                </span>
                                                Design
                                            </a>

                                            <div id="navSubmenuDesignServices" class="hs-sub-menu dropdown-menu" aria-labelledby="navLinkDesignServices" style="min-width: 270px;">
                                                <a class="dropdown-item" href="#">All Design</a>
                                                <a class="dropdown-item" href="#">Web design</a>
                                                <a class="dropdown-item" href="#">Graphic design</a>
                                                <a class="dropdown-item" href="#">Design tools</a>
                                                <a class="dropdown-item" href="#">User experience</a>
                                                <a class="dropdown-item" href="#">Game design</a>
                                                <a class="dropdown-item" href="#">Design thinking</a>
                                                <a class="dropdown-item" href="#">3D &amp; animation</a>
                                                <a class="dropdown-item" href="#">Fashion</a>
                                                <a class="dropdown-item" href="#">Architectural design</a>
                                                <a class="dropdown-item" href="#">Interior design</a>
                                                <a class="dropdown-item" href="#">Other</a>
                                            </div>
                                        </div>
                                        <!-- Design -->

                                        <!-- Marketing -->
                                        <div class="hs-has-sub-menu">
                                            <a id="navLinkCoursesMarketing" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuCoursesMarketing">
                                                <span class="min-w-4rem text-center opacity-lg mr-1">
                                                    <i class="fa fa-mail-bulk font-size-1 mr-1"></i>
                                                </span>
                                                Marketing
                                            </a>

                                            <div id="navSubmenuCoursesMarketing" class="hs-sub-menu dropdown-menu" aria-labelledby="navLinkCoursesMarketing" style="min-width: 270px;">
                                                <a class="dropdown-item" href="#">All Marketing</a>
                                                <a class="dropdown-item" href="#">Digital marketing</a>
                                                <a class="dropdown-item" href="#">Branding</a>
                                                <a class="dropdown-item" href="#">Advertising</a>
                                                <a class="dropdown-item" href="#">Other</a>
                                            </div>
                                        </div>
                                        <!-- Marketing -->

                                        <!-- Music -->
                                        <div class="hs-has-sub-menu">
                                            <a id="navLinkCoursesMusic" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuCoursesMusic">
                                                <span class="min-w-4rem text-center opacity-lg mr-1">
                                                    <i class="fa fa-music font-size-1 mr-1"></i>
                                                </span>
                                                Music
                                            </a>

                                            <div id="navSubmenuCoursesMusic" class="hs-sub-menu dropdown-menu" aria-labelledby="navLinkCoursesMusic" style="min-width: 270px;">
                                                <a class="dropdown-item" href="#">All Musics</a>
                                                <a class="dropdown-item" href="#">Instrument</a>
                                                <a class="dropdown-item" href="#">Production</a>
                                                <a class="dropdown-item" href="#">Music fundamentals</a>
                                                <a class="dropdown-item" href="#">Vocal</a>
                                                <a class="dropdown-item" href="#">Music techniques</a>
                                                <a class="dropdown-item" href="#">Music software</a>
                                                <a class="dropdown-item" href="#">Other</a>
                                            </div>
                                        </div>
                                        <!-- Music -->

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
                                    <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">Pages</a>

                                    <!-- Pages - Submenu -->
                                    <div id="pagesSubMenu" class="hs-sub-menu dropdown-menu" aria-labelledby="pagesMegaMenu" style="min-width: 230px;">
                                        <a class="dropdown-item" href="courses-listing.html">Courses</a>
                                        <a class="dropdown-item" href="course-description.html">Course description</a>
                                        <a class="dropdown-item" href="author.html">Author</a>
                                    </div>
                                    <!-- End Pages - Submenu -->
                                </li>
                                <!-- End Pages -->
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

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
        <!-- Hero Section -->
        <div class="container space-2">
            <div class="row justify-content-lg-between align-items-lg-center">
                <div class="col-sm-10 col-lg-5 mb-7 mb-lg-0">
                    <img class="img-fluid" src="../../assets/svg/illustrations/reading.svg" alt="Image Description">
                </div>

                <div class="col-lg-6">
                    <div class="mb-5">
                        <h1 class="display-4 mb-3">
                            Unlock your
                            <br>
                            <span class="text-primary font-weight-bold">
                                <span class="js-text-animation"></span>
                            </span>
                        </h1>
                        <p class="lead">With our platform, you can quantify your skills, grow in your role and stay relevant on critical topics.</p>
                    </div>

                    <div class="d-sm-flex align-items-sm-center flex-sm-wrap">
                        <a class="btn btn-primary mb-2" href="../pages/login.html">Start a Free Trial</a>

                        <div class="mx-2"></div>

                        <!-- Fancybox -->
                        <a class="js-fancybox video-player video-player-btn media align-items-center text-dark mb-2" href="javascript:;" data-hs-fancybox-options='{
                 "src": "//youtube.com/0qisGSwZym4",
                 "caption": "Front - Responsive Website Template",
                 "speed": 700,
                 "buttons": ["fullScreen", "close"],
                 "youtube": {
                   "autoplay": 1
                 }
               }'>
                            <span class="video-player-icon shadow-soft mr-3">
                                <i class="fa fa-play"></i>
                            </span>
                            <span class="media-body">
                                How it works
                            </span>
                        </a>
                        <!-- End Fancybox -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Hero Section -->

        <!-- Popular Categories Section -->
        <div class="space-bottom-2 space-bottom-lg-3" style="background: url(../../assets/svg/components/abstract-shapes-9.svg) center no-repeat;">
            <div class="position-relative">
                <div class="container space-2">
                    <!-- Title -->
                    <div class="row align-items-md-center mb-7">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <h2>Check out our newest and most popular programs</h2>
                        </div>
                        <div class="col-md-6 text-md-right">
                            <a class="font-weight-bold" href="#">See all Programs <i class="fa fa-angle-right fa-sm ml-1"></i></a>
                        </div>
                    </div>
                    <!-- End Title -->

                    <div class="js-slick-carousel slick slick-equal-height slick-gutters-3 slick-center-mode-right slick-center-mode-right-offset" data-hs-slick-carousel-options='{
                 "prevArrow": "<span class=\"fa fa-arrow-left slick-arrow slick-arrow-primary-white slick-arrow-left slick-arrow-centered-y shadow-soft rounded-circle ml-sm-n2\"></span>",
                 "nextArrow": "<span class=\"fa fa-arrow-right slick-arrow slick-arrow-primary-white slick-arrow-right slick-arrow-centered-y shadow-soft rounded-circle mr-sm-2 mr-xl-4\"></span>",
                 "slidesToShow": 5,
                 "infinite": true,
                 "responsive": [{
                   "breakpoint": 1200,
                     "settings": {
                       "slidesToShow": 4
                     }
                   }, {
                   "breakpoint": 992,
                     "settings": {
                       "slidesToShow": 3
                     }
                   }, {
                   "breakpoint": 768,
                   "settings": {
                     "slidesToShow": 2
                   }
                   }, {
                   "breakpoint": 554,
                   "settings": {
                     "slidesToShow": 1
                   }
                 }]
               }'>
                        <!-- Article -->
                        <article class="js-slide pt-2">
                            <a class="card bg-img-hero w-100 min-h-270rem transition-3d-hover" href="course-description.html" style="background-image: url(../../assets/img/400x500/img14.jpg);">
                                <div class="card-body">
                                    <span class="d-block small text-white-70 font-weight-bold text-cap mb-2">New</span>
                                    <h3 class="text-white">Cloud computing</h3>
                                </div>
                                <div class="card-footer border-0 bg-transparent pt-0">
                                    <span class="text-white font-size-1 font-weight-bold">Read now</span>
                                </div>
                            </a>
                        </article>
                        <!-- End Article -->

                        <!-- Article -->
                        <article class="js-slide pt-2">
                            <a class="card bg-img-hero w-100 min-h-270rem transition-3d-hover" href="course-description.html" style="background-image: url(../../assets/img/400x500/img13.jpg);">
                                <div class="card-body">
                                    <span class="d-block small text-white-70 font-weight-bold text-cap mb-2">Phython</span>
                                    <h3 class="text-white">What's new in Phython 3.7.2</h3>
                                </div>
                                <div class="card-footer border-0 bg-transparent pt-0">
                                    <span class="text-white font-size-1 font-weight-bold">Read now</span>
                                </div>
                            </a>
                        </article>
                        <!-- End Article -->

                        <!-- Article -->
                        <article class="js-slide pt-2">
                            <a class="card bg-img-hero w-100 min-h-270rem transition-3d-hover" href="course-description.html" style="background-image: url(../../assets/img/400x500/img15.jpg);">
                                <div class="card-body">
                                    <span class="d-block small text-white-70 font-weight-bold text-cap mb-2">Tooling</span>
                                    <h3 class="text-white">Build a staging server</h3>
                                </div>
                                <div class="card-footer border-0 bg-transparent pt-0">
                                    <span class="text-white font-size-1 font-weight-bold">Read now</span>
                                </div>
                            </a>
                        </article>
                        <!-- End Article -->

                        <!-- Article -->
                        <article class="js-slide pt-2">
                            <a class="card bg-img-hero w-100 min-h-270rem transition-3d-hover" href="course-description.html" style="background-image: url(../../assets/img/400x500/img16.jpg);">
                                <div class="card-body">
                                    <span class="d-block small text-white-70 font-weight-bold text-cap mb-2">JavaScript</span>
                                    <h3 class="text-white">Laravel, Vue and SPAs</h3>
                                </div>
                                <div class="card-footer border-0 bg-transparent pt-0">
                                    <span class="text-white font-size-1 font-weight-bold">Read now</span>
                                </div>
                            </a>
                        </article>
                        <!-- End Article -->

                        <!-- Article -->
                        <article class="js-slide pt-2">
                            <a class="card bg-img-hero w-100 min-h-270rem transition-3d-hover" href="course-description.html" style="background-image: url(../../assets/img/400x500/img17.jpg);">
                                <div class="card-body">
                                    <span class="d-block small text-white-70 font-weight-bold text-cap mb-2">Popular</span>
                                    <h3 class="text-white">Artificial Intelligence</h3>
                                </div>
                                <div class="card-footer border-0 bg-transparent pt-0">
                                    <span class="text-white font-size-1 font-weight-bold">Read now</span>
                                </div>
                            </a>
                        </article>
                        <!-- End Article -->

                        <!-- Article -->
                        <article class="js-slide pt-2">
                            <a class="card bg-img-hero w-100 min-h-270rem transition-3d-hover" href="course-description.html" style="background-image: url(../../assets/img/400x500/img18.jpg);">
                                <div class="card-body">
                                    <span class="d-block small text-white-70 font-weight-bold text-cap mb-2">PHP</span>
                                    <h3 class="text-white">Programming terms explained</h3>
                                </div>
                                <div class="card-footer border-0 bg-transparent pt-0">
                                    <span class="text-white font-size-1 font-weight-bold">Read now</span>
                                </div>
                            </a>
                        </article>
                        <!-- End Article -->
                    </div>
                </div>

                <div class="w-100 w-md-65 bg-light position-absolute top-0 right-0 bottom-0 rounded-left z-index-n1"></div>
            </div>
        </div>
        <!-- End Popular Categories Section -->

        <!-- Featured Topics Section -->
        <div class="container space-sm-2 space-bottom-lg-3">
            <!-- Title -->
            <div class="w-md-80 text-center mx-md-auto mb-9">
                <h2>Featured courses</h2>
                <p>Discover your perfect program in our courses.</p>
            </div>
            <!-- End Title -->

            <!-- Featured Topics Carousel -->
            <div class="row mb-5">
                <article class="col-md-6 col-lg-4 mb-5">
                    <!-- Article -->
                    <div class="card border h-100">
                        <div class="card-img-top position-relative">
                            <img class="card-img-top" src="../../assets/svg/components/graphics-1.svg" alt="Image Description">

                            <div class="position-absolute top-0 left-0 mt-3 ml-3">
                                <small class="btn btn-xs btn-success btn-pill text-uppercase shadow-soft mb-3">Bestseller</small>
                            </div>

                            <div class="position-absolute bottom-0 left-0 mb-3 ml-4">
                                <div class="d-flex align-items-center flex-wrap">
                                    <ul class="list-inline mt-n1 mb-0 mr-2">
                                        <li class="list-inline-item mx-0"><img src="../../assets/svg/illustrations/star.svg" alt="Review rating" width="14"></li>
                                        <li class="list-inline-item mx-0"><img src="../../assets/svg/illustrations/star.svg" alt="Review rating" width="14"></li>
                                        <li class="list-inline-item mx-0"><img src="../../assets/svg/illustrations/star.svg" alt="Review rating" width="14"></li>
                                        <li class="list-inline-item mx-0"><img src="../../assets/svg/illustrations/star.svg" alt="Review rating" width="14"></li>
                                        <li class="list-inline-item mx-0"><img src="../../assets/svg/illustrations/star.svg" alt="Review rating" width="14"></li>
                                    </ul>
                                    <span class="d-inline-block">
                                        <small class="font-weight-bold text-white mr-1">4.91</small>
                                        <small class="text-white-70">(1.5k+ reviews)</small>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <small class="d-block small font-weight-bold text-cap mb-2">Code</small>

                            <div class="mb-3">
                                <h3>
                                    <a class="text-inherit" href="course-description.html">Complete Python Bootcamp: Go from zero to hero in Python 3</a>
                                </h3>
                            </div>

                            <div class="d-flex align-items-center">
                                <div class="avatar-group">
                                    <a class="avatar avatar-xs avatar-circle" data-toggle="tooltip" data-placement="top" title="Nataly Gaga" href="#">
                                        <img class="avatar-img" src="../../assets/img/100x100/img1.jpg" alt="Image Description">
                                    </a>
                                </div>
                                <div class="d-flex align-items-center ml-auto">
                                    <div class="small text-muted">
                                        <i class="fa fa-book-reader d-block d-sm-inline-block mb-1 mb-sm-0 mr-1"></i>
                                        10 lessons
                                    </div>
                                    <small class="text-muted mx-2">|</small>
                                    <div class="small text-muted">
                                        <i class="fa fa-clock d-block d-sm-inline-block mb-1 mb-sm-0 mr-1"></i>
                                        3h 25m
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer border-0 pt-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <small class="d-block text-muted text-lh-sm"><del>$114.99</del></small>
                                    <span class="d-block h5 text-lh-sm mb-0">$99.99</span>
                                </div>
                                <a class="btn btn-sm btn-primary transition-3d-hover" href="course-description.html">Preview</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Article -->
                </article>

                <article class="col-md-6 col-lg-4 mb-5">
                    <!-- Article -->
                    <div class="card border h-100">
                        <div class="card-img-top position-relative">
                            <img class="card-img-top" src="../../assets/svg/components/graphics-2.svg" alt="Image Description">

                            <div class="position-absolute bottom-0 left-0 mb-3 ml-4">
                                <div class="d-flex align-items-center flex-wrap">
                                    <ul class="list-inline mt-n1 mb-0 mr-2">
                                        <li class="list-inline-item mx-0"><img src="../../assets/svg/illustrations/star.svg" alt="Review rating" width="14"></li>
                                        <li class="list-inline-item mx-0"><img src="../../assets/svg/illustrations/star.svg" alt="Review rating" width="14"></li>
                                        <li class="list-inline-item mx-0"><img src="../../assets/svg/illustrations/star.svg" alt="Review rating" width="14"></li>
                                        <li class="list-inline-item mx-0"><img src="../../assets/svg/illustrations/star.svg" alt="Review rating" width="14"></li>
                                        <li class="list-inline-item mx-0"><img src="../../assets/svg/illustrations/star.svg" alt="Review rating" width="14"></li>
                                    </ul>
                                    <span class="d-inline-block">
                                        <small class="font-weight-bold text-white mr-1">4.95</small>
                                        <small class="text-white-70">(1k+ reviews)</small>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <small class="d-block small font-weight-bold text-cap mb-2">Design &amp; Illustration</small>

                            <div class="mb-3">
                                <h3>
                                    <a class="text-inherit" href="course-description.html">From the Top: Adobe Illustrator for Beginners</a>
                                </h3>
                            </div>

                            <div class="d-flex align-items-center mb-4">
                                <div class="avatar-group">
                                    <a class="avatar avatar-xs avatar-circle" data-toggle="tooltip" data-placement="top" title="Emily Milda" href="#">
                                        <img class="avatar-img" src="../../assets/img/100x100/img2.jpg" alt="Image Description">
                                    </a>
                                    <a class="avatar avatar-xs avatar-circle" data-toggle="tooltip" data-placement="top" title="John O'nolan" href="#">
                                        <img class="avatar-img" src="../../assets/img/100x100/img4.jpg" alt="Image Description">
                                    </a>
                                </div>
                                <div class="d-flex align-items-center ml-auto">
                                    <div class="small text-muted">
                                        <i class="fa fa-book-reader d-block d-sm-inline-block mb-1 mb-sm-0 mr-1"></i>
                                        8 lessons
                                    </div>
                                    <small class="text-muted mx-2">|</small>
                                    <div class="small text-muted">
                                        <i class="fa fa-clock d-block d-sm-inline-block mb-1 mb-sm-0 mr-1"></i>
                                        7h 59m
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer border-0 pt-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <small class="d-block text-muted text-lh-sm"><del>$129.99</del></small>
                                    <span class="d-block h5 text-lh-sm mb-0">$119.99</span>
                                </div>
                                <a class="btn btn-sm btn-primary transition-3d-hover" href="course-description.html">Preview</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Article -->
                </article>

                <article class="col-md-6 col-lg-4 mb-5">
                    <!-- Article -->
                    <div class="card border h-100">
                        <div class="card-img-top position-relative">
                            <img class="card-img-top" src="../../assets/svg/components/graphics-4.svg" alt="Image Description">

                            <div class="position-absolute top-0 left-0 mt-3 ml-3">
                                <small class="btn btn-xs btn-success btn-pill text-uppercase shadow-soft mb-3">Featured</small>
                            </div>

                            <div class="position-absolute bottom-0 left-0 mb-3 ml-4">
                                <div class="d-flex align-items-center flex-wrap">
                                    <ul class="list-inline mt-n1 mb-0 mr-2">
                                        <li class="list-inline-item mx-0"><img src="../../assets/svg/illustrations/star.svg" alt="Review rating" width="14"></li>
                                        <li class="list-inline-item mx-0"><img src="../../assets/svg/illustrations/star.svg" alt="Review rating" width="14"></li>
                                        <li class="list-inline-item mx-0"><img src="../../assets/svg/illustrations/star.svg" alt="Review rating" width="14"></li>
                                        <li class="list-inline-item mx-0"><img src="../../assets/svg/illustrations/star.svg" alt="Review rating" width="14"></li>
                                        <li class="list-inline-item mx-0"><img src="../../assets/svg/illustrations/star-muted.svg" alt="Review rating" width="14"></li>
                                    </ul>
                                    <span class="d-inline-block">
                                        <small class="font-weight-bold text-white mr-1">4.73</small>
                                        <small class="text-white-70">(4.7k+ reviews)</small>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <small class="d-block small font-weight-bold text-cap mb-2">Code</small>

                            <div class="mb-3">
                                <h3>
                                    <a class="text-inherit" href="course-description.html">Get started with Vue.js</a>
                                </h3>
                            </div>

                            <div class="d-flex align-items-center mb-4">
                                <div class="avatar-group">
                                    <a class="avatar avatar-xs avatar-circle" data-toggle="tooltip" data-placement="top" title="Aaron Larsson" href="#">
                                        <img class="avatar-img" src="../../assets/img/100x100/img3.jpg" alt="Image Description">
                                    </a>
                                    <a class="avatar avatar-xs avatar-circle" data-toggle="tooltip" data-placement="top" title="Hanna Wolfe" href="#">
                                        <img class="avatar-img" src="../../assets/img/100x100/img11.jpg" alt="Image Description">
                                    </a>
                                </div>
                                <div class="d-flex align-items-center ml-auto">
                                    <div class="small text-muted">
                                        <i class="fa fa-book-reader d-block d-sm-inline-block mb-1 mb-sm-0 mr-1"></i>
                                        25 lessons
                                    </div>
                                    <small class="text-muted mx-2">|</small>
                                    <div class="small text-muted">
                                        <i class="fa fa-clock d-block d-sm-inline-block mb-1 mb-sm-0 mr-1"></i>
                                        17h 46m
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer border-0 pt-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <small class="d-block text-muted text-lh-sm"><del>$169.99</del></small>
                                    <span class="d-block h5 text-lh-sm mb-0">$129.99</span>
                                </div>
                                <a class="btn btn-sm btn-primary transition-3d-hover" href="course-description.html">Preview</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Article -->
                </article>

                <article class="col-md-6 col-lg-4 mb-5">
                    <!-- Article -->
                    <div class="card border h-100">
                        <div class="card-img-top position-relative">
                            <img class="card-img-top" src="../../assets/svg/components/graphics-5.svg" alt="Image Description">

                            <div class="position-absolute bottom-0 left-0 mb-3 ml-4">
                                <div class="d-flex align-items-center flex-wrap">
                                    <ul class="list-inline mt-n1 mb-0 mr-2">
                                        <li class="list-inline-item mx-0"><img src="../../assets/svg/illustrations/star.svg" alt="Review rating" width="14"></li>
                                        <li class="list-inline-item mx-0"><img src="../../assets/svg/illustrations/star.svg" alt="Review rating" width="14"></li>
                                        <li class="list-inline-item mx-0"><img src="../../assets/svg/illustrations/star.svg" alt="Review rating" width="14"></li>
                                        <li class="list-inline-item mx-0"><img src="../../assets/svg/illustrations/star.svg" alt="Review rating" width="14"></li>
                                        <li class="list-inline-item mx-0"><img src="../../assets/svg/illustrations/star-half.svg" alt="Review rating" width="14"></li>
                                    </ul>
                                    <span class="d-inline-block">
                                        <small class="font-weight-bold text-white mr-1">4.87</small>
                                        <small class="text-white-70">(3.8k+ reviews)</small>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <small class="d-block small font-weight-bold text-cap mb-2">Code</small>

                            <div class="mb-3">
                                <h3>
                                    <a class="text-inherit" href="course-description.html">The Ultimate MySQL Bootcamp: Go from SQL Beginner to Expert</a>
                                </h3>
                            </div>

                            <div class="d-flex align-items-center mb-4">
                                <div class="avatar-group">
                                    <a class="avatar avatar-xs avatar-circle" data-toggle="tooltip" data-placement="top" title="Hanna Wolfe" href="#">
                                        <img class="avatar-img" src="../../assets/img/100x100/img11.jpg" alt="Image Description">
                                    </a>
                                </div>
                                <div class="d-flex align-items-center ml-auto">
                                    <div class="small text-muted">
                                        <i class="fa fa-book-reader d-block d-sm-inline-block mb-1 mb-sm-0 mr-1"></i>
                                        42 lessons
                                    </div>
                                    <small class="text-muted mx-2">|</small>
                                    <div class="small text-muted">
                                        <i class="fa fa-clock d-block d-sm-inline-block mb-1 mb-sm-0 mr-1"></i>
                                        31h 5m
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer border-0 pt-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <small class="d-block text-muted text-lh-sm"><del>$159.99</del></small>
                                    <span class="d-block h5 text-lh-sm mb-0">$111.99</span>
                                </div>
                                <a class="btn btn-sm btn-primary transition-3d-hover" href="course-description.html">Preview</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Article -->
                </article>

                <article class="col-md-6 col-lg-4 mb-5">
                    <!-- Article -->
                    <div class="card border h-100">
                        <div class="card-img-top position-relative">
                            <img class="card-img-top" src="../../assets/svg/components/graphics-6.svg" alt="Image Description">

                            <div class="position-absolute bottom-0 left-0 mb-3 ml-4">
                                <div class="d-flex align-items-center flex-wrap">
                                    <ul class="list-inline mt-n1 mb-0 mr-2">
                                        <li class="list-inline-item mx-0"><img src="../../assets/svg/illustrations/star.svg" alt="Review rating" width="14"></li>
                                        <li class="list-inline-item mx-0"><img src="../../assets/svg/illustrations/star.svg" alt="Review rating" width="14"></li>
                                        <li class="list-inline-item mx-0"><img src="../../assets/svg/illustrations/star.svg" alt="Review rating" width="14"></li>
                                        <li class="list-inline-item mx-0"><img src="../../assets/svg/illustrations/star.svg" alt="Review rating" width="14"></li>
                                        <li class="list-inline-item mx-0"><img src="../../assets/svg/illustrations/star-half.svg" alt="Review rating" width="14"></li>
                                    </ul>
                                    <span class="d-inline-block">
                                        <small class="font-weight-bold text-white mr-1">4.84</small>
                                        <small class="text-white-70">(723 reviews)</small>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <small class="d-block small font-weight-bold text-cap mb-2">Code</small>

                            <div class="mb-3">
                                <h3>
                                    <a class="text-inherit" href="course-description.html">Coding block for WordPress</a>
                                </h3>
                            </div>

                            <div class="d-flex align-items-center mb-4">
                                <div class="avatar-group">
                                    <a class="avatar avatar-xs avatar-circle" data-toggle="tooltip" data-placement="top" title="Hanna Wolfe" href="#">
                                        <img class="avatar-img" src="../../assets/img/100x100/img11.jpg" alt="Image Description">
                                    </a>
                                    <div class="avatar avatar-xs avatar-circle" data-toggle="tooltip" data-placement="top" title="John O'nolan">
                                        <img class="avatar-img" src="../../assets/img/100x100/img4.jpg" alt="Image Description">
                                    </div>
                                </div>
                                <div class="d-flex align-items-center ml-auto">
                                    <div class="small text-muted">
                                        <i class="fa fa-book-reader d-block d-sm-inline-block mb-1 mb-sm-0 mr-1"></i>
                                        5 lessons
                                    </div>
                                    <small class="text-muted mx-2">|</small>
                                    <div class="small text-muted">
                                        <i class="fa fa-clock d-block d-sm-inline-block mb-1 mb-sm-0 mr-1"></i>
                                        8h 12m
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer border-0 pt-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <small class="d-block text-muted text-lh-sm"><del>$64.99</del></small>
                                    <span class="d-block h5 text-lh-sm mb-0">$29.99</span>
                                </div>
                                <a class="btn btn-sm btn-primary transition-3d-hover" href="course-description.html">Preview</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Article -->
                </article>

                <article class="col-md-6 col-lg-4 mb-5">
                    <!-- Article -->
                    <div class="card border h-100">
                        <div class="card-img-top position-relative">
                            <img class="card-img-top" src="../../assets/svg/components/graphics-3.svg" alt="Image Description">

                            <div class="position-absolute top-0 left-0 mt-3 ml-3">
                                <small class="btn btn-xs btn-success btn-pill text-uppercase shadow-soft mb-3">Hot</small>
                            </div>

                            <div class="position-absolute bottom-0 left-0 mb-3 ml-4">
                                <div class="d-flex align-items-center flex-wrap">
                                    <ul class="list-inline mt-n1 mb-0 mr-2">
                                        <li class="list-inline-item mx-0"><img src="../../assets/svg/illustrations/star.svg" alt="Review rating" width="14"></li>
                                        <li class="list-inline-item mx-0"><img src="../../assets/svg/illustrations/star.svg" alt="Review rating" width="14"></li>
                                        <li class="list-inline-item mx-0"><img src="../../assets/svg/illustrations/star.svg" alt="Review rating" width="14"></li>
                                        <li class="list-inline-item mx-0"><img src="../../assets/svg/illustrations/star.svg" alt="Review rating" width="14"></li>
                                        <li class="list-inline-item mx-0"><img src="../../assets/svg/illustrations/star.svg" alt="Review rating" width="14"></li>
                                    </ul>
                                    <span class="d-inline-block">
                                        <small class="font-weight-bold text-white mr-1">4.9</small>
                                        <small class="text-white-70">(961 reviews)</small>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <small class="d-block small font-weight-bold text-cap mb-2">Design &amp; Illustration</small>

                            <div class="mb-3">
                                <h3>
                                    <a class="text-inherit" href="course-description.html">Creative Magazine Layout Design</a>
                                </h3>
                            </div>

                            <div class="d-flex align-items-center mb-4">
                                <div class="avatar-group">
                                    <a class="avatar avatar-xs avatar-circle" data-toggle="tooltip" data-placement="top" title="Hanna Wolfe" href="#">
                                        <img class="avatar-img" src="../../assets/img/100x100/img11.jpg" alt="Image Description">
                                    </a>
                                </div>
                                <div class="d-flex align-items-center ml-auto">
                                    <div class="small text-muted">
                                        <i class="fa fa-book-reader d-block d-sm-inline-block mb-1 mb-sm-0 mr-1"></i>
                                        35 lessons
                                    </div>
                                    <small class="text-muted mx-2">|</small>
                                    <div class="small text-muted">
                                        <i class="fa fa-clock d-block d-sm-inline-block mb-1 mb-sm-0 mr-1"></i>
                                        21h
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer border-0 pt-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <small class="d-block text-muted text-lh-sm"><del>$179.99</del></small>
                                    <span class="d-block h5 text-lh-sm mb-0">$129.99</span>
                                </div>
                                <a class="btn btn-sm btn-primary transition-3d-hover" href="course-description.html">Preview</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Article -->
                </article>
            </div>
            <!-- End Featured Topics Carousel -->

            <div class="text-center">
                <a class="font-weight-bold" href="courses-listing.html">See all Courses <i class="fa fa-angle-right fa-sm ml-1"></i></a>
            </div>
        </div>
        <!-- End Featured Topics Section -->


        <!-- CTA Section -->
        <div class="container space-bottom-2">
            <div class="text-center py-6" style="background: url(../../assets/svg/components/abstract-shapes-19.svg) center no-repeat;">
                <h2>Find the right learning path for you</h2>
                <p>Answer a few questions and match your goals to our programs.</p>
                <span class="d-block mt-5">
                    <a class="btn btn-primary transition-3d-hover" href="#">Explore by Category</a>
                </span>
            </div>
        </div>
        <!-- End CTA Section -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- ========== FOOTER ========== -->
    <footer class="bg-light">
        <div class="container">
            <div class="space-top-2 space-bottom-1 space-bottom-lg-2">
                <div class="row justify-content-lg-between">
                    <div class="col-lg-3 ml-lg-auto mb-5 mb-lg-0">
                        <!-- Logo -->
                        <div class="mb-4">
                            <a href="index.html" aria-label="Front">
                                <img class="brand" src="../../assets/svg/logos/logo.svg" alt="Logo">
                            </a>
                        </div>
                        <!-- End Logo -->

                        <!-- Nav Link -->
                        <ul class="nav nav-sm nav-x-0 flex-column">
                            <li class="nav-item">
                                <a class="nav-link media" href="javascript:;">
                                    <span class="media">
                                        <span class="fas fa-location-arrow mt-1 mr-2"></span>
                                        <span class="media-body">
                                            153 Williamson Plaza, Maggieberg
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link media" href="tel:1-062-109-9222">
                                    <span class="media">
                                        <span class="fas fa-phone-alt mt-1 mr-2"></span>
                                        <span class="media-body">
                                            +1 (062) 109-9222
                                        </span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <!-- End Nav Link -->
                    </div>

                    <div class="col-6 col-md-3 col-lg mb-5 mb-lg-0">
                        <h5>Company</h5>

                        <!-- Nav Link -->
                        <ul class="nav nav-sm nav-x-0 flex-column">
                            <li class="nav-item"><a class="nav-link" href="../pages/about-agency.html">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="../pages/careers.html">Careers <span class="badge badge-primary ml-1">We're hiring</span></a></li>
                            <li class="nav-item"><a class="nav-link" href="../blog/newsroom.html">Blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="../pages/customers.html">Customers</a></li>
                            <li class="nav-item"><a class="nav-link" href="../pages/hire-us.html">Hire us</a></li>
                        </ul>
                        <!-- End Nav Link -->
                    </div>

                    <div class="col-6 col-md-3 col-lg mb-5 mb-lg-0">
                        <h5>Features</h5>

                        <!-- Nav Link -->
                        <ul class="nav nav-sm nav-x-0 flex-column">
                            <li class="nav-item"><a class="nav-link" href="#">Press</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Release notes</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Integrations</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
                        </ul>
                        <!-- End Nav Link -->
                    </div>

                    <div class="col-6 col-md-3 col-lg">
                        <h5>Documentation</h5>

                        <!-- Nav Link -->
                        <ul class="nav nav-sm nav-x-0 flex-column">
                            <li class="nav-item"><a class="nav-link" href="mailto:example@gmail.com">Support</a></li>
                            <li class="nav-item"><a class="nav-link" href="../../documentation/index.html">Docs</a></li>
                            <li class="nav-item"><a class="nav-link" href="../pages/status.html">Status</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">API Reference</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Tech Requirements</a></li>
                        </ul>
                        <!-- End Nav Link -->
                    </div>

                    <div class="col-6 col-md-3 col-lg">
                        <h5>Resources</h5>

                        <!-- Nav Link -->
                        <ul class="nav nav-sm nav-x-0 flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="media align-items-center">
                                        <i class="fa fa-info-circle mr-2"></i>
                                        <span class="media-body">Help</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="media align-items-center">
                                        <i class="fa fa-user-circle mr-2"></i>
                                        <span class="media-body">Your Account</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <!-- End Nav Link -->
                    </div>
                </div>
            </div>

            <hr class="my-0">

            <div class="space-1">
                <div class="row align-items-md-center mb-7">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <!-- Nav Link -->
                        <ul class="nav nav-sm nav-x-0 align-items-center">
                            <li class="nav-item">
                                <a class="nav-link" href="../pages/privacy.html">Privacy &amp; Policy</a>
                            </li>
                            <li class="nav-item opacity mx-3">&#47;</li>
                            <li class="nav-item">
                                <a class="nav-link" href="../pages/terms.html">Terms</a>
                            </li>
                            <li class="nav-item opacity mx-3">&#47;</li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Site Map</a>
                            </li>
                        </ul>
                        <!-- End Nav Link -->
                    </div>

                    <div class="col-md-6 text-md-right">
                        <ul class="list-inline mb-0">
                            <!-- Social Networks -->
                            <li class="list-inline-item">
                                <a class="btn btn-xs btn-icon btn-soft-secondary" href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-xs btn-icon btn-soft-secondary" href="#">
                                    <i class="fab fa-google"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-xs btn-icon btn-soft-secondary" href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-xs btn-icon btn-soft-secondary" href="#">
                                    <i class="fab fa-github"></i>
                                </a>
                            </li>
                            <!-- End Social Networks -->

                            <!-- Language -->
                            <li class="list-inline-item">
                                <div class="hs-unfold">
                                    <a class="js-hs-unfold-invoker dropdown-toggle btn btn-xs btn-soft-secondary" href="javascript:;" data-hs-unfold-options='{
                      "target": "#footerLanguage",
                      "type": "css-animation",
                      "animationIn": "slideInDown"
                     }'>
                                        <img class="dropdown-item-icon" src="<?= base_url('assets/front/vendor/'); ?>flag-icon-css/flags/4x3/us.svg" alt="United States Flag">
                                        <span>United States</span>
                                    </a>

                                    <div id="footerLanguage" class="hs-unfold-content dropdown-menu dropdown-unfold dropdown-menu-bottom mb-2">
                                        <a class="dropdown-item active" href="#">English</a>
                                        <a class="dropdown-item" href="#">Deutsch</a>
                                        <a class="dropdown-item" href="#">Español</a>
                                        <a class="dropdown-item" href="#">Français</a>
                                        <a class="dropdown-item" href="#">Italiano</a>
                                        <a class="dropdown-item" href="#">日本語</a>
                                        <a class="dropdown-item" href="#">한국어</a>
                                        <a class="dropdown-item" href="#">Nederlands</a>
                                        <a class="dropdown-item" href="#">Português</a>
                                        <a class="dropdown-item" href="#">Русский</a>
                                    </div>
                                </div>
                            </li>
                            <!-- End Language -->
                        </ul>
                    </div>
                </div>

                <!-- Copyright -->
                <div class="w-md-75 text-lg-center mx-lg-auto">
                    <p class="text-muted small">&copy; Front. 2020 Htmlstream. All rights reserved.</p>
                    <p class="text-muted small">When you visit or interact with our sites, services or tools, we or our authorised service providers may use cookies for storing information to help provide you with a better, faster and safer experience and for marketing purposes.</p>
                </div>
                <!-- End Copyright -->
            </div>
        </div>
    </footer>
    <!-- ========== END FOOTER ========== -->

    <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <button type="button" class="close position-absolute top-0 right-0 z-index-2 mt-3 mr-3" data-dismiss="modal" aria-label="Close">
                    <svg aria-hidden="true" class="mb-0" width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                        <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z" />
                    </svg>
                </button>

                <!-- Body -->
                <div class="modal-body">
                    <form class="js-validate">
                        <!-- Login -->
                        <div id="login">
                            <!-- Title -->
                            <div class="text-center mb-7">
                                <h3 class="mb-0">Sign In to Front</h3>
                                <p>Login to manage your account.</p>
                            </div>
                            <!-- End Title -->

                            <!-- Input Group -->
                            <div class="js-form-message mb-4">
                                <label class="input-label">Email</label>
                                <div class="input-group input-group-sm mb-2">
                                    <input type="email" class="form-control" name="email" id="signinEmail" placeholder="Email" aria-label="Email" required data-msg="Please enter a valid email address.">
                                </div>
                            </div>
                            <!-- End Input Group -->

                            <!-- Input Group -->
                            <div class="js-form-message mb-3">
                                <label class="input-label">Password</label>
                                <div class="input-group input-group-sm mb-2">
                                    <input type="password" class="form-control" name="password" id="signinPassword" placeholder="Password" aria-label="Password" required data-msg="Your password is invalid. Please try again.">
                                </div>
                            </div>
                            <!-- End Input Group -->

                            <div class="d-flex justify-content-end mb-4">
                                <a class="js-animation-link small link-underline" href="javascript:;" data-hs-show-animation-options='{
                     "targetSelector": "#forgotPassword",
                     "groupName": "idForm"
                   }'>Forgot Password?</a>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-sm btn-primary btn-block">Sign In</button>
                            </div>

                            <div class="text-center mb-3">
                                <span class="divider divider-xs divider-text">OR</span>
                            </div>

                            <a class="btn btn-sm btn-ghost-secondary btn-block mb-2" href="#">
                                <span class="d-flex justify-content-center align-items-center">
                                    <img class="mr-2" src="../../assets/img/160x160/img17.png" alt="Image Description" width="14" height="14">
                                    Sign In with Google
                                </span>
                            </a>

                            <div class="text-center">
                                <span class="small text-muted">Do not have an account?</span>
                                <a class="js-animation-link small font-weight-bold" href="javascript:;" data-hs-show-animation-options='{
                     "targetSelector": "#signup",
                     "groupName": "idForm"
                   }'>Sign Up
                                </a>
                            </div>
                        </div>

                        <!-- Signup -->
                        <div id="signup" style="display: none; opacity: 0;">
                            <!-- Title -->
                            <div class="text-center mb-7">
                                <h3 class="mb-0">Create your account</h3>
                                <p>Fill out the form to get started.</p>
                            </div>
                            <!-- End Title -->

                            <!-- Input Group -->
                            <div class="js-form-message mb-4">
                                <label class="input-label">Email</label>
                                <div class="input-group input-group-sm mb-2">
                                    <input type="email" class="form-control" name="email" id="signupEmail" placeholder="Email" aria-label="Email" required data-msg="Please enter a valid email address.">
                                </div>
                            </div>
                            <!-- End Input Group -->

                            <!-- Input Group -->
                            <div class="js-form-message mb-4">
                                <label class="input-label">Password</label>
                                <div class="input-group input-group-sm mb-2">
                                    <input type="password" class="form-control" name="password" id="signupPassword" placeholder="Password" aria-label="Password" required data-msg="Your password is invalid. Please try again.">
                                </div>
                            </div>
                            <!-- End Input Group -->

                            <!-- Input Group -->
                            <div class="js-form-message mb-4">
                                <label class="input-label">Confirm Password</label>
                                <div class="input-group input-group-sm mb-2">
                                    <input type="password" class="form-control" name="confirmPassword" id="signupConfirmPassword" placeholder="Confirm Password" aria-label="Confirm Password" required data-msg="Password does not match the confirm password.">
                                </div>
                            </div>
                            <!-- End Input Group -->

                            <div class="mb-3">
                                <button type="submit" class="btn btn-sm btn-primary btn-block">Sign Up</button>
                            </div>

                            <div class="text-center mb-3">
                                <span class="divider divider-xs divider-text">OR</span>
                            </div>

                            <a class="btn btn-sm btn-ghost-secondary btn-block mb-2" href="#">
                                <span class="d-flex justify-content-center align-items-center">
                                    <img class="mr-2" src="../../assets/img/160x160/img17.png" alt="Image Description" width="14" height="14">
                                    Sign Up with Google
                                </span>
                            </a>

                            <div class="text-center">
                                <span class="small text-muted">Already have an account?</span>
                                <a class="js-animation-link small font-weight-bold" href="javascript:;" data-hs-show-animation-options='{
                     "targetSelector": "#login",
                     "groupName": "idForm"
                   }'>Sign In
                                </a>
                            </div>
                        </div>
                        <!-- End Signup -->

                        <!-- Forgot Password -->
                        <div id="forgotPassword" style="display: none; opacity: 0;">
                            <!-- Title -->
                            <div class="text-center mb-7">
                                <h3 class="mb-0">Recover password</h3>
                                <p>Instructions will be sent to you.</p>
                            </div>
                            <!-- End Title -->

                            <!-- Input Group -->
                            <div class="js-form-message">
                                <label class="sr-only" for="recoverEmail">Your email</label>
                                <div class="input-group input-group-sm mb-2">
                                    <input type="email" class="form-control" name="email" id="recoverEmail" placeholder="Your email" aria-label="Your email" required data-msg="Please enter a valid email address.">
                                </div>
                            </div>
                            <!-- End Input Group -->

                            <div class="mb-3">
                                <button type="submit" class="btn btn-sm btn-primary btn-block">Recover Password</button>
                            </div>

                            <div class="text-center mb-4">
                                <span class="small text-muted">Remember your password?</span>
                                <a class="js-animation-link small font-weight-bold" href="javascript:;" data-hs-show-animation-options='{
                     "targetSelector": "#login",
                     "groupName": "idForm"
                   }'>Login
                                </a>
                            </div>
                        </div>
                        <!-- End Forgot Password -->
                    </form>
                </div>
                <!-- End Body -->
            </div>
        </div>
    </div>
    <!-- End Login Modal -->
    <!-- ========== END SECONDARY CONTENTS ========== -->

    <!-- Go to Top -->
    <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;" data-hs-go-to-options='{
       "offsetTop": 700,
       "position": {
         "init": {
           "right": 15
         },
         "show": {
           "bottom": 15
         },
         "hide": {
           "bottom": -15
         }
       }
     }'>
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- End Go to Top -->

    <!-- JS Global Compulsory -->
    <script src="<?= base_url('assets/front/vendor/'); ?>jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url('assets/front/vendor/'); ?>jquery-migrate/dist/jquery-migrate.min.js"></script>
    <script src="<?= base_url('assets/front/vendor/'); ?>bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="<?= base_url('assets/front/vendor/'); ?>hs-header/dist/hs-header.min.js"></script>
    <script src="<?= base_url('assets/front/vendor/'); ?>hs-go-to/dist/hs-go-to.min.js"></script>
    <script src="<?= base_url('assets/front/vendor/'); ?>hs-unfold/dist/hs-unfold.min.js"></script>
    <script src="<?= base_url('assets/front/vendor/'); ?>hs-mega-menu/dist/hs-mega-menu.min.js"></script>
    <script src="<?= base_url('assets/front/vendor/'); ?>hs-show-animation/dist/hs-show-animation.min.js"></script>
    <script src="<?= base_url('assets/front/vendor/'); ?>jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="<?= base_url('assets/front/vendor/'); ?>typed.js/lib/typed.min.js"></script>
    <script src="<?= base_url('assets/front/vendor/'); ?>fancybox/dist/jquery.fancybox.min.js"></script>
    <script src="<?= base_url('assets/front/vendor/'); ?>slick-carousel/slick/slick.js"></script>

    <!-- JS Front -->
    <script src="<?= base_url('assets/front/js/'); ?>hs.core.js"></script>
    <script src="<?= base_url('assets/front/js/'); ?>hs.validation.js"></script>
    <script src="<?= base_url('assets/front/js/'); ?>hs.fancybox.js"></script>
    <script src="<?= base_url('assets/front/js/'); ?>hs.slick-carousel.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function() {
            // initialization of header
            var header = new HSHeader($('#header')).init();

            // initialization of mega menu
            var megaMenu = new HSMegaMenu($('.js-mega-menu')).init();

            // initialization of unfold
            var unfold = new HSUnfold('.js-hs-unfold-invoker').init();

            // initialization of form validation
            $('.js-validate').each(function() {
                $.HSCore.components.HSValidation.init($(this), {
                    rules: {
                        confirmPassword: {
                            equalTo: '#signupPassword'
                        }
                    }
                });
            });

            // initialization of text animation (typing)
            var typed = new Typed(".js-text-animation", {
                strings: ["future.", "potential.", "skills."],
                typeSpeed: 90,
                loop: true,
                backSpeed: 30,
                backDelay: 2500
            });

            // initialization of show animations
            $('.js-animation-link').each(function() {
                var showAnimation = new HSShowAnimation($(this)).init();
            });

            // initialization of fancybox
            $('.js-fancybox').each(function() {
                var fancybox = $.HSCore.components.HSFancyBox.init($(this));
            });

            // initialization of slick carousel
            $('.js-slick-carousel').each(function() {
                var slickCarousel = $.HSCore.components.HSSlickCarousel.init($(this));
            });

            // initialization of go to
            $('.js-go-to').each(function() {
                var goTo = new HSGoTo($(this)).init();
            });
        });
    </script>

    <!-- IE Support -->
    <script>
        if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="<?= base_url('assets/front/vendor/'); ?>polifills.js"><\/script>');
    </script>
</body>

</html>