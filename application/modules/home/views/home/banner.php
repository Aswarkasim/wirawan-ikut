<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>vendor/slick-carousel/slick/slick.css">
<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>css/theme.css">
<script src="<?= base_url('assets/front/vendor/'); ?>jquery/dist/jquery.min.js"></script>


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


<!-- JS Implementing Plugins -->
<script src="<?= base_url('assets/front/'); ?>vendor/slick-carousel/slick/slick.js"></script>

<!-- JS Front -->
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