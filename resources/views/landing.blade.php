<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>E-cuti</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('landing-page/img/logo_cuti.jpeg') }}" rel="icon">
  <link href="{{ asset('landing-page/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="{{ ('https://fonts.googleapis.com') }}" rel="preconnect">
  <link href="{{ ('https://fonts.gstatic.com') }}" rel="preconnect" crossorigin>
  <link href="{{ ('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap') }}" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('landing-page/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing-page/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('landing-page/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('landing-page/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landing-page/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('landing-page/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Day
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header fixed-top">

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">support@e-cuti.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>012-345-6789</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1 class="sitename">E-cuti</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#fiturutama">Fitur Utama</a></li>
            <li><a href="#testimoni">Testimoni</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>

    </div>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="/landing-page/img/hero-bg.jpg" alt="" data-aos="fade-in">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-start">
          <div class="col-lg-12">
            <h2>Selamat datang di e-Cuti</h2>
            <p>Memudahkan pengelolaan cuti Anda dengan platform yang intuitif dan efisien.</p>
            <a href="{{ route('login') }}" class="btn-get-started">Get Started</a>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>About Us<br></span>
        <h2>About Us<br></h2>
        <p>Selamat datang di e-cuti, solusi terbaik untuk manajemen pengajuan cuti pegawai Anda! Sebuah platform yang berdedikasi untuk memberikan kemudahan dan efisiensi dalam proses pengajuan cuti di lingkungan kerja Anda.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
            <img src="/landing-page/img/about.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
            <h3>Misi dan Nilai-Nilai Kami</h3>
            <p class="fst-italic">
              Misi kami adalah untuk menyederhanakan dan mempercepat proses pengajuan cuti, sehingga pegawai dapat lebih fokus pada pekerjaan mereka tanpa harus khawatir tentang birokrasi yang rumit. Dengan e-cuti, kami berkomitmen untuk menyediakan platform yang user-friendly, aman, dan andal.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span>Kemudahan: Kami percaya bahwa teknologi harus mempermudah kehidupan, bukan sebaliknya. Itulah mengapa kami merancang e-cuti agar mudah digunakan oleh semua kalangan.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Efisiensi: Proses pengajuan cuti yang cepat dan tepat waktu adalah kunci dari produktivitas. Kami memastikan setiap permintaan diproses dengan efisien.</span></li>
              <li><i class="bi bi-check-circle"></i> <span>Keandalan: Keamanan dan keandalan data Anda adalah prioritas utama kami. Kami menggunakan teknologi terkini untuk memastikan data Anda selalu aman.</span></li>
            </ul>
            <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    
    <!-- Clients Section -->
    <section id="clients" class="clients section light-background">

      <div class="container">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="/landing-page/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/landing-page/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/landing-page/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/landing-page/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/landing-page/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/landing-page/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/landing-page/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/landing-page/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>

    </section><!-- /Clients Section -->

    <!-- Services Section -->
    <section id="fiturutama" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Fitur Utama</span>
        <h2>Fitur Utama</h2>
        <p>Kami menyediakan beberapa fitur utama yang sangat rekomendasi untuk anda</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="bi bi-activity"></i>
              </div>
                <h3>Riwayat Cuti</h3>
              <p>Akses riwayat pengajuan cuti Anda kapan saja untuk referensi di masa mendatang.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-broadcast"></i>
              </div>
                <h3>Pengajuan Cuti yang Mudah</h3>
              <p>Ajukan cuti Anda dengan beberapa klik saja. Tidak ada lagi formulir kertas yang rumit.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-easel"></i>
            </div>
                <h3>Pantauan Sisa Cuti</h3>
              <p>Lihat sisa cuti Anda secara real-time sehingga Anda dapat merencanakan liburan Anda dengan lebih baik.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-bounding-box-circles"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Persetujuan Cuti Online</h3>
              </a>
              <p>Manajer dapat menyetujui atau menolak pengajuan cuti secara online, mempermudah proses persetujuan.</p>
              <a href="#" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-calendar4-week"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Integrasi Kalender</h3>
              </a>
              <p>Sinkronisasikan jadwal cuti Anda dengan kalender pribadi Anda untuk pengelolaan waktu yang lebih baik.</p>
              <a href="#" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-chat-square-text"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Notifikasi Real-time</h3>
              </a>
              <p>Dapatkan notifikasi langsung mengenai status pengajuan cuti Anda.</p>
              <a href="#" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

      <img src="/landing-page/img/cta-bg.jpg" alt="">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
              <h3>Siap untuk mengajukan cuti?</h3>
              <p>Segera ajukan cuti Anda dengan mudah dan cepat menggunakan aplikasi kami. Klik tombol di bawah ini untuk memulai proses pengajuan cuti. Anda akan diarahkan ke halaman login atau registrasi, tergantung status keanggotaan Anda. Nikmati kemudahan dalam mengelola cuti tanpa harus melalui proses yang rumit.</p>
              <a class="cta-btn" href="{{ route('login') }}">Mulai ajukan cuti</a>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Call To Action Section -->

    
    <!-- Team Section -->
    <section id="testimoni" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Testimoni</span>
        <h2>Testimoni</h2>
        <p>Simak apa yang dikatakan oleh pengguna kami yang telah merasakan kemudahan dan manfaat dari aplikasi pengajuan cuti ini. Mereka telah mengalami perubahan signifikan dalam mengelola cuti mereka. Berikut adalah beberapa testimoni dari pengguna yang puas</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="/landing-page/img/team/team-1.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Abdul Qodir</h4>
                <span>Web Development</span>
                <p>
                  Aplikasi ini sangat membantu! Sebelumnya, proses pengajuan cuti memakan waktu dan sering kali memerlukan persetujuan manual yang lama. Dengan aplikasi ini, semuanya menjadi otomatis dan cepat. Saya sangat merekomendasikan kepada rekan-rekan kerja saya.
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="/landing-page/img/team/team-2.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Susi Susanto</h4>
                <span>Human Resources</span>
                <p>
                  Sejak menggunakan aplikasi pengajuan cuti ini, saya dapat mengajukan cuti kapan saja dan dari mana saja. Fitur notifikasi langsung juga sangat berguna untuk mengetahui status pengajuan saya. Terima kasih banyak!
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="/landing-page/img/team/team-3.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Jhon Thor</h4>
                <span>Software Engineer</span>
                <p>
                  Saya suka bagaimana aplikasi ini memberikan transparansi dalam pengelolaan cuti. Saya bisa melihat sisa cuti saya dan merencanakan cuti dengan lebih baik. Aplikasi ini benar-benar meningkatkan efisiensi kerja di tim kami.
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Contact</span>
        <h2>Contact</h2>
        <p>Kami siap membantu Anda! Jika Anda memiliki pertanyaan lebih lanjut tentang penggunaan aplikasi kami atau membutuhkan bantuan teknis, jangan ragu untuk menghubungi tim dukungan kami. Kami tersedia untuk membantu Anda setiap saat</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <p>Jalan Bersamamu, Depok, Jawa Barat 123</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone"></i>
              <h3>Call Us</h3>
              <p>012-345-6789</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope"></i>
              <h3>Email Us</h3>
              <p>support@e-cuti.com</p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div><!-- End Google Maps -->

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="400">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer position-relative dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6">
          <div class="footer-about">
            <a href="index.html" class="logo sitename">E-Cuti</a>
            <div class="footer-contact pt-3">
              <p>Jalan Bersamamu</p>
              <p>Depok, Jawa Barat 123</p>
              <p class="mt-3"><strong>Phone:</strong> <span>012-345-6789</span></p>
              <p><strong>Email:</strong> <span>support@e-cuti.com</span></p>
            </div>
            <div class="social-links d-flex mt-4">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Fitur Utama</a></li>
            <li><a href="#">Testimoni</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Riwayat Cuti</a></li>
            <li><a href="#">Pengajuan Cuti yang Mudah</a></li>
            <li><a href="#">Pantauan Sisa Cuti</a></li>
            <li><a href="#">Pengajuan Cuti Online</a></li>
            <li><a href="#">Integrasi Kalender</a></li>
            <li><a href="#">Notifikasi Real-time</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Our Newsletter</h4>
          <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
          </form>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Day</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{ asset('landing-page/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('landing-page/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('landing-page/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('landing-page/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('landing-page/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('landing-page/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('landing-page/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

<!-- Main JS File -->
<script src="{{ asset('landing-page/js/main.js') }}"></script>

</body>

</html>