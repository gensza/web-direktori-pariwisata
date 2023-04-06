<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Tentang Kami</h2>
                    <p>Di dalam direktori terdapat berbagai macam jasa akomodasi, penyedia makan dan minum, daya tarik wisata, dan penunjang pariwisata.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="https://www.instagram.com/bps_statistics/" target="_blank"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.facebook.com/bpsstatistics/?locale=id_ID" target="_blank"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="https://twitter.com/bps_statistics" target="_blank"><span class="icon-instagram"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.youtube.com/channel/UCn4IaaxHaaP-mAjZzrAtixA" target="_blank"><span class="icon-youtube"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Pintasan</h2>
                    <ul class="list-unstyled">
                        <li><a href="<?= base_url('jasa_akomodasi_search'); ?>" class="py-2 d-block">Jasa Akomodasi</a></li>
                        <li><a href="<?= base_url('penyedia_makan_dan_minum_search'); ?>" class="py-2 d-block">Penyedia Makan dan Minum</a></li>
                        <li><a href="<?= base_url('daya_tarik_wisata_search'); ?>" class="py-2 d-block">Daya Tarik Wisata</a></li>
                        <li><a href="<?= base_url('penunjang_pariwisata_search'); ?>" class="py-2 d-block">Penunjang Pariwisata</a></li>
                        <li><a href="<?= base_url('tentang'); ?>" class="py-2 d-block">Tentang</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg></div>


<script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery-migrate-3.0.1.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/popper.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery.easing.1.3.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery.waypoints.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery.stellar.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/owl.carousel.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery.magnific-popup.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/aos.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery.animateNumber.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/bootstrap-datepicker.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery.timepicker.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/scrollax.min.js'); ?>"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="<?= base_url('assets/js/google-map.js'); ?>"></script>
<script src="<?= base_url('assets/js/main.js'); ?>"></script>
<script src="<?= base_url('assets/js/filter-search.js'); ?>"></script>

</body>

</html>

<script>
// Save the scroll position in local storage when the page is unloaded
window.addEventListener('beforeunload', function() {
  localStorage.setItem('scrollPosition', window.scrollY);
});

// Retrieve the scroll position from local storage when the page is loaded
window.addEventListener('load', function() {
  var scrollPosition = localStorage.getItem('scrollPosition');
  if (scrollPosition !== null) {
    window.scrollTo(0, scrollPosition);
    localStorage.removeItem('scrollPosition');
  }
});
</script>