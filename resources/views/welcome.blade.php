<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>HIMA Informatika</title>
  <meta name="description" content="Website resmi Himpunan Mahasiswa Informatika">
  <meta name="keywords" content="hima, informatika, mahasiswa, teknologi, programming">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!-- Favicons -->
  <link href="/build/assets/img/favicon.png" rel="icon">
  <link href="/build/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/build/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/build/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/build/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/build/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/build/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="/build/assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="/build/assets/img/logo.png" alt="">
        <h1 class="sitename">HIMA INFORMATIKA</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Beranda</a></li>
          <li><a href="#about">Tentang</a></li>
          <li><a href="#activities">Kegiatan</a></li>
          <li><a href="#gallery">Galeri</a></li>
          <li><a href="#team">Pengurus</a></li>
          <li><a href="#contact">Kontak</a></li>
              <li><a href="serasi">Serasi</a></li> <!-- Tambahkan ini -->

        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
      <img src="/build/assets/img/hero-bg-2.jpg" alt="" class="hero-bg">

      <div class="container">
        <div class="row gy-4 justify-content-between">
          <div class="col-lg-4 order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
            <img src="/build/assets/img/hero-img.png" class="img-fluid animated" alt="">
          </div>

          <div class="col-lg-6  d-flex flex-column justify-content-center" data-aos="fade-in">
            <h1>Himpunan Mahasiswa <span>Informatika</span></h1>
            <p>Wadah pengembangan diri dan profesionalisme bagi mahasiswa informatika</p>
            <div class="d-flex">
              <a href="#about" class="btn-get-started">Jelajahi</a>
              <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Tonton Video</span></a>
            </div>
          </div>

        </div>
      </div>

      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
          <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
        </defs>
        <g class="wave1">
          <use xlink:href="#wave-path" x="50" y="3"></use>
        </g>
        <g class="wave2">
          <use xlink:href="#wave-path" x="50" y="0"></use>
        </g>
        <g class="wave3">
          <use xlink:href="#wave-path" x="50" y="9"></use>
        </g>
      </svg>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-xl-center gy-5">

          <div class="col-xl-5 content">
            <h3>Tentang Kami</h3>
            <h2>Himpunan Mahasiswa Informatika</h2>
            <p>HIMA Informatika adalah organisasi mahasiswa yang mewadahi mahasiswa program studi informatika untuk mengembangkan potensi akademik, soft skills, dan profesionalisme di bidang teknologi informasi.</p>
            <a href="#" class="read-more"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
          </div>

          <div class="col-xl-7">
            <div class="row gy-4 icon-boxes">

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box">
                  <i class="bi bi-code-square" style="color: #ffbb2c;"></i>
                  <h3>Pengembangan Skill</h3>
                  <p>Meningkatkan kemampuan teknis dan non-teknis melalui berbagai pelatihan dan workshop</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <i class="bi bi-people" style="color: #5578ff;"></i>
                  <h3>Jaringan & Kolaborasi</h3>
                  <p>Memperluas jaringan dengan industri dan komunitas teknologi lainnya</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                  <i class="bi bi-lightbulb" style="color: #e80368;"></i>
                  <h3>Inovasi & Kreativitas</h3>
                  <p>Mendorong inovasi dan kreativitas dalam pengembangan solusi teknologi</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box">
                  <i class="bi bi-award" style="color: #e361ff;"></i>
                  <h3>Prestasi</h3>
                  <p>Mendorong prestasi akademik dan non-akademik mahasiswa informatika</p>
                </div>
              </div> <!-- End Icon Box -->

            </div>
          </div>

        </div>
      </div>

    </section><!-- /About Section -->

    <!-- Activities Section -->
    <section id="activities" class="features section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="features-item">
              <i class="bi bi-code-slash" style="color: #ffbb2c;"></i>
              <h3><a href="" class="stretched-link">Coding Bootcamp</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="features-item">
              <i class="bi bi-mic" style="color: #5578ff;"></i>
              <h3><a href="" class="stretched-link">Tech Talk</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="features-item">
              <i class="bi bi-trophy" style="color: #e80368;"></i>
              <h3><a href="" class="stretched-link">Kompetisi</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="400">
            <div class="features-item">
              <i class="bi bi-kanban" style="color: #e361ff;"></i>
              <h3><a href="" class="stretched-link">Project Based Learning</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="500">
            <div class="features-item">
              <i class="bi bi-building" style="color: #47aeff;"></i>
              <h3><a href="" class="stretched-link">Kunjungan Industri</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="600">
            <div class="features-item">
              <i class="bi bi-people" style="color: #ffa76e;"></i>
              <h3><a href="" class="stretched-link">Study Group</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="700">
            <div class="features-item">
              <i class="bi bi-calendar-event" style="color: #11dbcf;"></i>
              <h3><a href="" class="stretched-link">Seminar & Workshop</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="800">
            <div class="features-item">
              <i class="bi bi-heart" style="color: #4233ff;"></i>
              <h3><a href="" class="stretched-link">Social Project</a></h3>
            </div>
          </div><!-- End Feature Item -->

        </div>

      </div>

    </section><!-- /Activities Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-emoji-smile"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="250" data-purecounter-duration="1" class="purecounter"></span>
              <p>Anggota Aktif</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-journal-richtext"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Kegiatan</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-award"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Prestasi</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-people"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1" class="purecounter"></span>
              <p>Pengurus</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Details Section -->
    <section id="details" class="details section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Program Kerja</h2>
        <div><span>Program Unggulan</span> <span class="description-title">HIMA Informatika</span></div>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4 align-items-center features-item">
          <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
            <img src="/build/assets/img/details-1.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
            <h3>Informatics Excellence Center 
</h3>
            <p class="fst-italic">
              : Ruang Inovasi dan Prestasi Mahasiswa Informatika
            </p>
            <ul>
              <li><i class="bi bi-check"></i><span> Deskripsi: Program ini bertujuan untuk menciptakan ruang inovasi yang mendukung mahasiswa Informatika untuk berprestasi. 
</span></li>
              <li><i class="bi bi-check"></i> <span>Kegiatan Utama:
Pengembangan ruang inovasi dan Menciptakan ruang kompetitif
Memeberikan fasilitas dukungan kompetitif. 
</span></li>
              <li><i class="bi bi-check"></i> <span>Manfaat: Meningkatkan kreativitas, kemampuan kompetitif, dan keterampilan teknis.</span></li>
            </ul>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item">
          <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="/build/assets/img/details-2.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">
            <h3>Tech Week</h3>
            <p class="fst-italic">
              Serangkaian acara teknologi selama seminggu yang mencakup workshop dan seminar.
            </p>
            <p>
              Tech Week merupakan program unggulan yang dirancang untuk memberikan exposure terhadap teknologi terkini dan tren industri. Peserta akan mendapatkan insight langsung dari praktisi industri dan kesempatan untuk mengembangkan project nyata.
            </p>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-center features-item">
          <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out">
            <img src="/build/assets/img/details-3.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-7" data-aos="fade-up">
            <h3>Informatics Goes to School</h3>
            <p>Program pengabdian masyarakat dengan mengajarkan dasar-dasar pemrograman dan teknologi informasi kepada siswa sekolah.</p>
            <ul>
              <li><i class="bi bi-check"></i> <span>Memperkenalkan coding sejak dini</span></li>
              <li><i class="bi bi-check"></i><span> Membangun minat terhadap teknologi informasi</span></li>
              <li><i class="bi bi-check"></i> <span>Memberikan kontribusi nyata untuk pendidikan</span></li>
            </ul>
          </div>
        </div><!-- Features Item -->

      </div>

    </section><!-- /Details Section -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Divisi</h2>
        <div><span>Divisi</span> <span class="description-title">HIMA Informatika</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-4 col-md-4">
            <div class="gallery-item">
              <a href="/build/assets/img/gallery/gallery-1.png" class="glightbox" data-gallery="images-gallery">
                <img src="/build/assets/img/gallery/gallery-1.png" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-4 col-md-4">
            <div class="gallery-item">
              <a href="/build/assets/img/gallery/gallery-2.png" class="glightbox" data-gallery="images-gallery">
                <img src="/build/assets/img/gallery/gallery-2.png" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-4 col-md-4">
            <div class="gallery-item">
              <a href="/build/assets/img/gallery/gallery-3.png" class="glightbox" data-gallery="images-gallery">
                <img src="/build/assets/img/gallery/gallery-3.png" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-4 col-md-4">
            <div class="gallery-item">
              <a href="/build/assets/img/gallery/gallery-4.png" class="glightbox" data-gallery="images-gallery">
                <img src="/build/assets/img/gallery/gallery-4.png" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-4 col-md-4">
            <div class="gallery-item">
              <a href="/build/assets/img/gallery/gallery-5.png" class="glightbox" data-gallery="images-gallery">
                <img src="/build/assets/img/gallery/gallery-5.png" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-4 col-md-4">
            <div class="gallery-item">
              <a href="/build/assets/img/gallery/gallery-6.png" class="glightbox" data-gallery="images-gallery">
                <img src="/build/assets/img/gallery/gallery-6.png" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

        
        </div>

      </div>

    </section><!-- /Gallery Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section dark-background">

      <img src="/build/assets/img/testimonials-bg.jpeg" class="testimonials-bg" alt="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

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
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="/build/assets/img/profile.png" class="testimonial-img" alt="">
                <h3>Budi Santoso</h3>
                <h4>Ade Chandra 2022</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>HIMA Informatika telah memberikan saya pengalaman berharga dalam kepemimpinan dan manajemen organisasi. Skill yang saya dapatkan sangat berguna untuk karir saya sekarang.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="/build/assets/img/profile.png" class="testimonial-img" alt="">
                <h3>Dela Se</h3>
                <h4>Anggota Aktif</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Melalui berbagai workshop dan pelatihan yang diadakan HIMA, saya bisa mengembangkan skill programming yang langsung applicable di dunia kerja. Senang sekali bisa menjadi bagian dari komunitas ini.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="/build/assets/img/profile.png" class="testimonial-img" alt="">
                <h3>Risma IF 22 Dx</h3>
                <h4>Koordinator Acara</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Mengorganisir Tech Week 2023 adalah pengalaman yang menantang namun sangat memuaskan. Saya belajar banyak tentang event management dan jaringan profesional di industri teknologi.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Pengurus</h2>
        <div><span>Struktur Kepengurusan</span> <span class="description-title">HIMA Informatika</span></div>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-5">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="pic"><img src="/build/assets/img/profile.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Rifki Abdullah</h4>
                <span>Ketua HIMA</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="pic"><img src="/build/assets/img/profile.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Selpia Ayu</h4>
                <span>Wakil Ketua</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="pic"><img src="/build/assets/img/profile.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Clara Maradini</h4>
                <span>Sekretaris</span>
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
        <h2>Kontak</h2>
        <div><span>Hubungi</span> <span class="description-title">Kami</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Alamat</h3>
                <p>Gedung Student Center Lt.2, Kampus Universitas Example, Jl. Informatika No.123</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Telepon</h3>
                <p>+62 812 3456 7890</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email</h3>
                <p>hima.informatika@example.ac.id</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subjek" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Pesan" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Pesan Anda telah terkirim. Terima kasih!</div>

                  <button type="submit">Kirim Pesan</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->




  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">HIMA Informatika</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Gedung Student Center Lt.2</p>
            <p>Kampus Universitas Example, Jl. Informatika No.123</p>
            <p class="mt-3"><strong>Telepon:</strong> <span>+62 812 3456 7890</span></p>
            <p><strong>Email:</strong> <span>hima.informatika@example.ac.id</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Tautan Berguna</h4>
          <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Tentang Kami</a></li>
            <li><a href="#">Kegiatan</a></li>
            <li><a href="#">Galeri</a></li>
            <li><a href="#">Kontak</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Program Kami</h4>
          <ul>
            <li><a href="#">Coding Bootcamp</a></li>
            <li><a href="#">Tech Talk</a></li>
            <li><a href="#">Kompetisi</a></li>
            <li><a href="#">Workshop</a></li>
            <li><a href="#">Study Group</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Newsletter Kami</h4>
          <p>Berlangganan newsletter kami untuk mendapatkan informasi terbaru tentang kegiatan dan event HIMA Informatika!</p>
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form"><input type="email" name="email" placeholder="Email Anda"><input type="submit" value="Berlangganan"></div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Permintaan berlangganan Anda telah terkirim. Terima kasih!</div>
          </form>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">HIMA Informatika</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="/build/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/build/assets/vendor/php-email-form/validate.js"></script>
  <script src="/build/assets/vendor/aos/aos.js"></script>
  <script src="/build/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/build/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/build/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="/build/assets/js/main.js"></script>

</body>

</html>