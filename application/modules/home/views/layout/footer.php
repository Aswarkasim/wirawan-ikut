   <?php
    $konfigurasi = $this->Crud_model->listingOne('tbl_konfigurasi', 'id_konfigurasi', '1');
    ?>
   <!-- ========== FOOTER ========== -->
   <footer class="bg-light">
     <div class="container">


       <hr class="my-0">

       <div class="space-1">
         <div class="row align-items-md-center mb-7">
           <div class="col-md-6 mb-4 mb-md-0">
             <!-- Nav Link -->
             <ul class="nav nav-sm nav-x-0 align-items-center">
               <li class="nav-item">
                 <a class="nav-link" href="../pages/privacy.html">Syarat &amp; Ketentuan</a>
               </li>
               <li class="nav-item opacity mx-3"></li>
               <li class="nav-item">
                 <a class="nav-link" href="../pages/terms.html">Tentang kami</a>
               </li>
             </ul>
             <!-- End Nav Link -->
           </div>

           <div class="col-md-6 text-md-right">
             <ul class="list-inline mb-0">
               <!-- Social Networks -->
               <li class="list-inline-item">
                 <a class="btn btn-xs btn-icon btn-soft-secondary" target="_blank" href="<?= $konfigurasi->facebook ?>">
                   <i class="fab fa-facebook-f"></i>
                 </a>
               </li>
               <li class="list-inline-item">
                 <a class="btn btn-xs btn-icon btn-soft-secondary" target="_blank" href="<?= $konfigurasi->instagram ?>">
                   <i class="fab fa-instagram"></i>
                 </a>
               </li>
               <li class="list-inline-item">
                 <a class="btn btn-xs btn-icon btn-soft-secondary" target="_blank" href="<?= $konfigurasi->twitter ?>">
                   <i class="fab fa-twitter"></i>
                 </a>
               </li>

               </li>
               <!-- End Social Networks -->


             </ul>
           </div>
         </div>

         <!-- Copyright -->
         <div class="w-md-75 text-lg-center mx-lg-auto">
           <a href="http://scrollupstudio.com" class="text-muted small" target="_blank">develope by &copy; Scrollup.Studio 2020</a>
         </div>
         <!-- End Copyright -->
       </div>
     </div>
   </footer>
   <!-- ========== END FOOTER ========== -->

   <!-- ========== SECONDARY CONTENTS ========== -->


   <!-- JS Global Compulsory -->

   <!-- <script src="<?= base_url('assets/front/vendor/'); ?>jquery-migrate/dist/jquery-migrate.min.js"></script> -->
   <script src="<?= base_url('assets/front/vendor/'); ?>bootstrap/dist/js/bootstrap.bundle.min.js"></script>

   <!-- JS Implementing Plugins -->
   <!-- <script src="<?= base_url('assets/front/vendor/'); ?>hs-header/dist/hs-header.min.js"></script> -->
   <!-- <script src="<?= base_url('assets/front/vendor/'); ?>hs-go-to/dist/hs-go-to.min.js"></script> -->
   <!-- <script src="<?= base_url('assets/front/vendor/'); ?>hs-unfold/dist/hs-unfold.min.js"></script> -->
   <script src="<?= base_url('assets/front/vendor/'); ?>hs-mega-menu/dist/hs-mega-menu.min.js"></script>
   <!-- <script src="<?= base_url('assets/front/vendor/'); ?>hs-show-animation/dist/hs-show-animation.min.js"></script> -->
   <script src="<?= base_url('assets/front/vendor/'); ?>jquery-validation/dist/jquery.validate.min.js"></script>
   <!-- <script src="<?= base_url('assets/front/vendor/'); ?>typed.js/lib/typed.min.js"></script> -->
   <!-- <script src="<?= base_url('assets/front/vendor/'); ?>fancybox/dist/jquery.fancybox.min.js"></script> -->


   <!-- JS Front -->
   <!-- <script src="<?= base_url('assets/front/js/'); ?>hs.core.js"></script> -->
   <script src="<?= base_url('assets/front/js/'); ?>hs.validation.js"></script>
   <!-- <script src="<?= base_url('assets/front/js/'); ?>hs.fancybox.js"></script> -->


   <script src="<?= base_url('assets/') ?>js/sweetalert2.all.min.js"></script>
   <script src="<?= base_url('assets/') ?>js/mySwal.js"></script>


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