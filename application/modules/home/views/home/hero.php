<!-- CSS Implementing Plugins -->
<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>vendor/font-awesome/css/all.min.css">
<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>vendor/slick-carousel/slick/slick.css">

<!-- CSS Front Template -->
<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>css/theme.css">



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



    <?php foreach ($banner as $row) { ?>
      <div class="js-slide d-flex bg-img-hero min-h-620rem" style="background-image: url(<?= base_url($row->gambar); ?>">
        <!-- News Block -->
        <div class="container d-flex align-items-center min-h-620rem">
          <div class="w-lg-40 mr-5">
            <div class="mb-5">
              <h3 class="h1 font-weight-bold <?= $row->warna_text; ?>" data-hs-slick-carousel-animation="fadeInUp" data-hs-slick-carousel-animation-delay="150"><strong><?= $row->topik; ?></strong></h3>
            </div>
            <p class="transition-3d-hover <?= $row->warna_text; ?>" data-hs-slick-carousel-animation="fadeInUp" data-hs-slick-carousel-animation-delay="300"><strong> <?= $row->deskripsi; ?></strong></p>
            <a class="btn btn-wide transition-3d-hover text-white" style="background-color: #fd5c0a;" href="<?= base_url('akun/dashboard'); ?>" data-hs-slick-carousel-animation="fadeInUp" data-hs-slick-carousel-animation-delay="300">Mulai <i class="fas fa-angle-right fa-sm ml-1"></i></a>
          </div>
        </div>
        <!-- End News Block -->
      </div>
    <?php } ?>

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