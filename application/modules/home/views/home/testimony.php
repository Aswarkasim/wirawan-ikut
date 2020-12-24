<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>



<style>
  .client-img {
    width: 120px;
    height: 120px;
    overflow: hidden;
    border: 4px solid #fff;
    margin: 0px auto 20px;
    border-radius: 100%;
  }

  .carousel-content {
    padding: 50px 0px;
  }

  .carousel-content h3 span {
    font-size: 17px;
    font-weight: normal;
    color: #e8e8e8;
    text-transform: uppercase;
  }

  .client-img img {
    width: 100%;
  }

  #testimonial {
    text-align: center;
    padding: 40px 0px;
    color: #fff;
  }

  #testimonial .carousel-control-prev,
  #testimonial .carousel-control-next {
    font-size: 36px;
  }

  #testimonial h2 {
    font-size: 40px;
    font-style: italic;
    border-bottom: 1px solid #7fbdff;
    padding-bottom: 20px;
    display: inline-block;
  }

  .main-body-hero {
    color: #000;
    overflow-x: hidden;
    height: 600px;
    background-image: url(<?= base_url($konfigurasi->banner); ?>);
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>


<!-- Testimonial Slider Section -->
<section id="testimonial" class="main-body-hero">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="text-white">Apa kata Alumni?</h2>
      </div>
      <div class="col-12">
        <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
          <!-- Slide Indicators -->
          <ol class="carousel-indicators">
            <?php foreach ($testimony as $key => $row) { ?>
              <li data-target="#testimonialCarousel" data-slide-to="<?= $key; ?>" class="<?= $key == 0 ? 'active' : ''; ?>"></li>
            <?php } ?>
          </ol>
          <div class="carousel-inner" role="listbox">

            <?php foreach ($testimony as $key => $row) { ?>
              <div class="carousel-item <?= $key == 0 ? 'active' : ''; ?>">
                <div class="carousel-content">
                  <div class="client-img"><img src="<?= base_url($row->gambar); ?>" alt="Testimonial Slider"></div>
                  <h3 class="text-white"><?= $row->nama_testimony; ?></h3>
                  <h5 class="text-white"><?= $row->pekerjaan; ?></h5>
                  <p class="col-md-8 offset-md-2">
                    <?= $row->deskripsi; ?>
                  </p>
                </div>
              </div>


            <?php } ?>


            <!-- Slider pre and next arrow -->
            <a class="carousel-control-prev text-white" href="#testimonialCarousel" role="button" data-slide="prev">
              <i class="fas fa-chevron-left"></i>
            </a>
            <a class="carousel-control-next text-white" href="#testimonialCarousel" role="button" data-slide="next">
              <i class="fas fa-chevron-right"></i>
            </a>


          </div>
        </div>

        <a href="" class="btn btn-primary btn-pill px-10">Selengkapnya <i class="fa fa-angle-right"></i></a>
      </div>
    </div>
  </div>
</section>