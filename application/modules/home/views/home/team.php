<div class="container-xl container-fluid space-1 space-md-2 px-4 px-md-8 px-lg-10">
  <div class="px-3">
    <!-- Title -->
    <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
      <h2>Tim Kami</h2>
      <span>Berlatar belakang profesional di bidangnya</span>
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

      <?php foreach ($team as $row) { ?>
        <div class="js-slide mb-4">
          <!-- Card Info -->
          <div class="card h-100 transition-3d-hover">
            <div class="card-body">
              <center>
                <div class="avatar avatar-lg avatar-circle mb-4">
                  <img class="avatar-img" src="<?= base_url($row->gambar); ?>" alt="Image Description">
                </div>
                <h5 class="text-lh-sm"><?= $row->nama_team; ?></h5>
                <span class="d-block small font-weight-bold text-cap mb-1"><?= $row->pekerjaan; ?></span>
                <hr>
                <p class="font-size-1"><?= character_limiter($row->deskripsi, '100') ?></p>
              </center>
            </div>

          </div>
        </div>

      <?php } ?>

    </div>
    <!-- End Slick Carousel -->
  </div>
</div>