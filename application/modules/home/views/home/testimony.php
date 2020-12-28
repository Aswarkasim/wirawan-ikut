<!-- Features Section -->
<div class="bg-navy" style="background-image: url(<?= base_url('assets/front/'); ?>svg/components/abstract-shapes-20.svg);">
  <div class="container-xl container-fluid space-1 space-md-2 px-4 px-md-8 px-lg-10">
    <div class="px-3">
      <!-- Title -->
      <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
        <span class="d-block small text-white-70 font-weight-bold text-cap mb-2">Success stories</span>
        <h2 class="text-white">Mereka pernah menjadi bagian dari kami</h2>
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

        <?php foreach ($testimony as $row) { ?>
          <div class="js-slide mb-4">
            <!-- Card Info -->
            <div class="card h-100">
              <div class="image-testy" style="height: 250px; width: 100%; overflow: hidden;">
                <img class="card-img-top" src="<?= base_url($row->gambar); ?>" alt="Image Description">
              </div>
              <div class="card-body">
                <h4 class="font-wight-bold mb-0"><strong><?= $row->nama_testimony; ?></strong></h4>
                <small><?= $row->pekerjaan; ?></small>
                <p class="mb-0 mt-2"><?= character_limiter($row->deskripsi, '100') ?></p>
              </div>
              <p>
                <small><a href="" class="float-right mr-3" target="_blank"><i class="fab fa-instagram"></i> aswar_kasim</a></small>
              </p>
              <div class="card-footer border-0 pt-0">
                <a class="font-weight-bold" href="../pages/customer-story.html">Read story <i class="fas fa-angle-right fa-sm ml-1"></i></a>
              </div>
            </div>
            <!-- End Card Info -->
          </div>

        <?php } ?>

      </div>
      <!-- End Slick Carousel -->
    </div>
  </div>
</div>
<!-- End Features Section -->