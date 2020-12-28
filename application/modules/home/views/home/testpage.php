<!-- CSS Implementing Plugins -->
<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>vendor/font-awesome/css/all.min.css">
<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>vendor/slick-carousel/slick/slick.css">

<!-- CSS Front Template -->
<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>css/theme.css">


<!-- Features Section -->
<div class="bg-navy" style="background-image: url(<?= base_url('assets/front/'); ?>svg/components/abstract-shapes-20.svg);">
  <div class="container-xl container-fluid space-1 space-md-2 px-4 px-md-8 px-lg-10">
    <div class="px-3">
      <!-- Title -->
      <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
        <span class="d-block small text-white-70 font-weight-bold text-cap mb-2">Success stories</span>
        <h2 class="text-white">See how Front is helping teams get organized and work smarter</h2>
      </div>
      <!-- End Title -->

      <!-- Slick Carousel -->
      <div class="js-slick-carousel slick slick-equal-height ie-slick-equal-height slick-gutters-3" data-hs-slick-carousel-options='{
                 "prevArrow": "<span class=\"fas fa-arrow-left slick-arrow slick-arrow-primary-white slick-arrow-left slick-arrow-centered-y shadow-soft rounded-circle ml-n2\"></span>",
                 "nextArrow": "<span class=\"fas fa-arrow-right slick-arrow slick-arrow-primary-white slick-arrow-right slick-arrow-centered-y shadow-soft rounded-circle mr-n2\"></span>",
                 "slidesToShow": 3,
                 "infinite": true,
                 "dots": true,
                 "dotsClass": "slick-pagination slick-pagination-white d-none mt-5",
                 "responsive": [{
                   "breakpoint": 992,
                   "settings": {
                     "slidesToShow": 2
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
        <div class="js-slide mb-4">
          <!-- Card Info -->
          <div class="card h-100">
            <img class="card-img-top" src="<?= base_url('assets/front/'); ?>img/480x320/img7.jpg" alt="Image Description">
            <div class="card-body">
              <div class="max-w-13rem w-100 mb-3">
                <img class="img-fluid" src="<?= base_url('assets/front/'); ?>svg/clients-logo/airbnb-original.svg" alt="Logo">
              </div>
              <p class="mb-0">Front Projects has proved to be most efficient cloud based project tracking and bug tracking tool.</p>
            </div>
            <div class="card-footer border-0 pt-0">
              <a class="font-weight-bold" href="../pages/customer-story.html">Read story <i class="fas fa-angle-right fa-sm ml-1"></i></a>
            </div>
          </div>
          <!-- End Card Info -->
        </div>

        <div class="js-slide mb-4">
          <!-- Card Info -->
          <div class="card h-100">
            <img class="card-img-top" src="<?= base_url('assets/front/'); ?>img/480x320/img6.jpg" alt="Image Description">
            <div class="card-body">
              <div class="max-w-13rem w-100 mb-3">
                <img class="img-fluid" src="<?= base_url('assets/front/'); ?>svg/clients-logo/slack-original.svg" alt="Logo">
              </div>
              <p class="mb-0">Front Projects has proved to be most efficient cloud based project tracking and bug tracking tool.</p>
            </div>
            <div class="card-footer border-0 pt-0">
              <a class="font-weight-bold" href="../pages/customer-story.html">Read story <i class="fas fa-angle-right fa-sm ml-1"></i></a>
            </div>
          </div>
          <!-- End Card Info -->
        </div>

        <div class="js-slide mb-4">
          <!-- Card Info -->
          <div class="card h-100">
            <img class="card-img-top" src="<?= base_url('assets/front/'); ?>img/480x320/img14.jpg" alt="Image Description">
            <div class="card-body">
              <div class="max-w-13rem w-100 mb-3">
                <img class="img-fluid" src="<?= base_url('assets/front/'); ?>svg/clients-logo/paypal-original.svg" alt="Logo">
              </div>
              <p class="mb-0">Front Projects has proved to be most efficient cloud based project tracking and bug tracking tool.</p>
            </div>
            <div class="card-footer border-0 pt-0">
              <a class="font-weight-bold" href="../pages/customer-story.html">Read story <i class="fas fa-angle-right fa-sm ml-1"></i></a>
            </div>
          </div>
          <!-- End Card Info -->
        </div>

        <div class="js-slide mb-4">
          <!-- Card Info -->
          <div class="card h-100">
            <img class="card-img-top" src="<?= base_url('assets/front/'); ?>img/480x320/img12.jpg" alt="Image Description">
            <div class="card-body">
              <div class="max-w-13rem w-100 mb-3">
                <img class="img-fluid" src="<?= base_url('assets/front/'); ?>svg/clients-logo/fitbit-original.svg" alt="Logo">
              </div>
              <p class="mb-0">Google is an innovator in public safety technology. First-to-market with TASER conducted energy weapons (CEWs).</p>
            </div>
            <div class="card-footer border-0 pt-0">
              <a class="font-weight-bold" href="../pages/customer-story.html">Read story <i class="fas fa-angle-right fa-sm ml-1"></i></a>
            </div>
          </div>
          <!-- End Card Info -->
        </div>

        <div class="js-slide mb-4">
          <!-- Card Info -->
          <div class="card h-100">
            <img class="card-img-top" src="<?= base_url('assets/front/'); ?>img/480x320/img27.jpg" alt="Image Description">
            <div class="card-body">
              <div class="max-w-13rem w-100 mb-3">
                <img class="img-fluid" src="<?= base_url('assets/front/'); ?>svg/clients-logo/hubspot-original.svg" alt="Logo">
              </div>
              <p class="mb-0">Visitors can build a form or survey before signing up, but in order to save and share it.</p>
            </div>
            <div class="card-footer border-0 pt-0">
              <a class="font-weight-bold" href="../pages/customer-story.html">Read story <i class="fas fa-angle-right fa-sm ml-1"></i></a>
            </div>
          </div>
          <!-- End Card Info -->
        </div>
      </div>
      <!-- End Slick Carousel -->
    </div>
  </div>
</div>
<!-- End Features Section -->


<!-- Hero Section -->
<div class="position-relative">
  <!-- Main Slider -->
  <div id="heroSlider" class="js-slick-carousel" data-hs-slick-carousel-options='{
       "vertical": true,
       "verticalSwiping": true,
       "autoplay": true,
       "autoplaySpeed": 10000,
       "dots": true,
       "dotsClass": "slick-pagination slick-pagination-white d-lg-none position-absolute bottom-0 right-0 left-0 mb-3 mr-3",
       "asNavFor": "#heroSliderNav",
       "responsive": [
         {
           "breakpoint": 576,
           "settings": {
             "vertical": false,
             "verticalSwiping": false
           }
         }
       ]
     }'>

    <div class="js-slide d-flex gradient-x-overlay-sm-navy bg-img-hero min-h-620rem" style="background-image: url(<?= base_url('assets/front/'); ?>img/1920x1080/img3.jpg);">
      <!-- News Block -->
      <div class="container d-flex align-items-center min-h-620rem">
        <div class="w-lg-40 mr-5">
          <!-- Author -->
          <div class="media align-items-center mb-3" data-hs-slick-carousel-animation="fadeInUp">
            <div class="avatar avatar-sm avatar-circle mr-3">
              <img class="avatar-img" src="<?= base_url('assets/front/'); ?>img/100x100/img10.jpg" alt="Image Description">
            </div>
            <div class="media-body">
              <a class="text-white" href="#">Christina Kray</a>
            </div>
          </div>
          <!-- End Author -->

          <div class="mb-5">
            <h3 class="h1 font-weight-bold text-white" data-hs-slick-carousel-animation="fadeInUp" data-hs-slick-carousel-animation-delay="150">Front Interview with a Lead Designer of the Hubble</h3>
          </div>
          <a class="btn btn-primary btn-wide transition-3d-hover" href="#" data-hs-slick-carousel-animation="fadeInUp" data-hs-slick-carousel-animation-delay="300">Read Article <i class="fas fa-angle-right fa-sm ml-1"></i></a>
        </div>
      </div>
      <!-- End News Block -->
    </div>

    <div class="js-slide d-flex gradient-x-overlay-sm-navy bg-img-hero min-h-620rem" style="background-image: url(<?= base_url('assets/front/'); ?>img/1920x1080/img5.jpg);">
      <!-- News Block -->
      <div class="container d-flex align-items-center min-h-620rem">
        <div class="w-lg-40 mr-5">
          <!-- Author -->
          <div class="media align-items-center mb-3" data-hs-slick-carousel-animation="fadeInUp">
            <div class="avatar avatar-sm avatar-circle mr-3">
              <img class="avatar-img" src="<?= base_url('assets/front/'); ?>img/100x100/img10.jpg" alt="Image Description">
            </div>
            <div class="media-body">
              <a class="text-white" href="#">Christina Kray</a>
            </div>
          </div>
          <!-- End Author -->

          <div class="mb-5">
            <h2 class="h1 font-weight-bold text-white" data-hs-slick-carousel-animation="fadeInUp" data-hs-slick-carousel-animation-delay="150">Front Corporate - let's work together</h2>
          </div>
          <a class="btn btn-primary btn-wide transition-3d-hover" href="#" data-hs-slick-carousel-animation="fadeInUp" data-hs-slick-carousel-animation-delay="300">Read Article <i class="fas fa-angle-right fa-sm ml-1"></i></a>
        </div>
      </div>
      <!-- End News Block -->
    </div>

    <div class="js-slide d-flex gradient-x-overlay-sm-navy bg-img-hero min-h-620rem" style="background-image: url(<?= base_url('assets/front/'); ?>img/1920x1080/img4.jpg);">
      <!-- News Block -->
      <div class="container d-flex align-items-center min-h-620rem">
        <div class="w-lg-40 mr-5">
          <div class="mb-7">
            <!-- Author -->
            <div class="media align-items-center mb-3" data-hs-slick-carousel-animation="fadeInUp">
              <div class="avatar avatar-sm avatar-circle mr-3">
                <img class="avatar-img" src="<?= base_url('assets/front/'); ?>img/100x100/img4.jpg" alt="Image Description">
              </div>
              <div class="media-body">
                <a class="text-white" href="#">Jeff Fisher</a>
              </div>
            </div>
            <!-- End Author -->

            <h1 class="font-weight-bold text-white" data-hs-slick-carousel-animation="fadeInUp" data-hs-slick-carousel-animation-delay="150">How Google Assistant now helps you record stories</h1>
          </div>
          <a class="btn btn-primary btn-wide transition-3d-hover" href="#" data-hs-slick-carousel-animation="fadeInUp" data-hs-slick-carousel-animation-delay="300">Read Article <i class="fas fa-angle-right fa-sm ml-1"></i></a>
        </div>
      </div>
      <!-- End News Block -->
    </div>
  </div>
  <!-- End Main Slider -->

  <!-- Slider Nav -->
  <div class="container slick-pagination-line-wrapper content-centered-y right-0 left-0">
    <div class="content-centered-y right-0 mr-3">
      <div id="heroSliderNav" class="js-slick-carousel slick slick-pagination-line max-w-27rem ml-auto" data-hs-slick-carousel-options='{
           "vertical": true,
           "verticalSwiping": true,
           "autoplay": true,
           "autoplaySpeed": 10000,
           "slidesToShow": 3,
           "isThumbs": true,
           "asNavFor": "#heroSlider"
         }'>
        <div class="js-slide my-3">
          <span class="text-white">Front Interview with a Lead Designer of the Hubble</span>

          <span class="slick-pagination-line-progress">
            <span class="slick-pagination-line-progress-helper"></span>
          </span>
        </div>
        <div class="js-slide my-3">
          <span class="text-white">Front Corporate - let's work together</span>

          <span class="slick-pagination-line-progress">
            <span class="slick-pagination-line-progress-helper"></span>
          </span>
        </div>
        <div class="js-slide my-3">
          <span class="text-white">How Google Assistant now helps you record stories</span>

          <span class="slick-pagination-line-progress">
            <span class="slick-pagination-line-progress-helper"></span>
          </span>
        </div>
      </div>
    </div>
  </div>
  <!-- End Slider Nav -->
</div>
<!-- End Hero Section -->





<!-- End Go to Top -->

<!-- JS Global Compulsory -->
<script src="<?= base_url('assets/front/'); ?>vendor/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url('assets/front/'); ?>vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
<!-- JS Implementing Plugins -->
<script src="<?= base_url('assets/front/'); ?>vendor/hs-header/dist/hs-header.min.js"></script>
<script src="<?= base_url('assets/front/'); ?>vendor/hs-unfold/dist/hs-unfold.min.js"></script>
<script src="<?= base_url('assets/front/'); ?>vendor/slick-carousel/slick/slick.js"></script>
<!-- JS Front -->
<script src="<?= base_url('assets/front/'); ?>js/hs.core.js"></script>
<script src="<?= base_url('assets/front/'); ?>js/hs.slick-carousel.js"></script>

<!-- JS Plugins Init. -->
<script>
  $(document).on('ready', function() {
    // initialization of slick carousel
    $('.js-slick-carousel').each(function() {
      var slickCarousel = $.HSCore.components.HSSlickCarousel.init($(this));
    });



  });
</script>

<!-- JS Plugins Init. -->
<script>
  $(document).on('ready', function() {
    // initialization of slick carousel
    $('.js-slick-carousel').each(function() {
      var slickCarousel = $.HSCore.components.HSSlickCarousel.init($(this));
    });
  });
</script>