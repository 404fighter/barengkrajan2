<footer id="footer" class="footer dark-background">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">

            <div class="col-lg-3 col-md-4 footer-links">
                <img src="assets/img/logo_barengkrajan.png" alt="" style="max-width: 200px;">
            </div>

            <div class="col-lg-4 col-md-6 footer-about">
                <a href="#" class="logo d-flex align-items-center">
                    <span class="sitename">Desa Barengkrajan</span>
                </a>
                <div class="footer-contact pt-3">
                    <p>Barengkrajan, Kec. Krian</p>
                    <p>Kab. Sidoarjo, Jawa Timur 61262</p>
                    <p class="mt-3"><strong>No. Telp.:</strong> <span>+62 822 3226 8155</span></p>
                    <p><strong>Email:</strong> <span>pemdesbarengkrajan@gmail.com</span></p>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
                <h4>Menu</h4>
                <ul>
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#">Fasilitas</a></li>
                    <li><a href="#">Pelayanan</a></li>
                    <li><a href="#">Artikel & Berita</a></li>
                    <li><a href="#">Potensi Desa</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
                <h4>Profil Desa</h4>
                <ul>
                    <li><a href="#">Sejarah Desa</a></li>
                    <li><a href="#">Visi & Misi Desa</a></li>
                    <li><a href="#">Struktur Organisasi Desa</a></li>
                </ul>
            </div>

        </div>
      </div>
    </div>

    <div class="copyright text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div>
            © Copyright <strong><span>Desa Barengkrajan</span></strong>. All Rights Reserved
          </div>
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
            <a href="https://wa.me/6282232268155"><i class="bi bi-whatsapp"></i></a>
            <a href="mailto:pemdesbarengkrajan@gmail.com"><i class="bi bi-envelope"></i></a>
            <a href="https://maps.app.goo.gl/tqVKzNU8ycUo9uJw7"><i class="bi bi-geo-alt-fill"></i></a>
            <a href="https://www.youtube.com/@pemdesbarengkrajan9460"><i class="bi bi-youtube"></i></a>
        </div>

      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Tanggal & Jam Live-->
    <script>
        function updateDateTime() {
            const datetimeElement = document.getElementById('datetime');
            const now = new Date();
            const options = {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric',
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit',
            hour12: false,
            };
            datetimeElement.textContent = now.toLocaleString('id-ID', options);
        }

        setInterval(updateDateTime, 1000); // Perbarui setiap detik
        updateDateTime(); // Inisialisasi waktu awal
    </script>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>