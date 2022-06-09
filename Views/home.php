<?php
    require_once('Includes/header.php')
  ?>
<body>
  <header id="header" class="fixed-top bg-light">
    <div class="container d-flex align-items-center justify-content-btween">
      <a href="index.html" class="logo me-auto"><img src="./Public/Assets/logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#home">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#products">Products</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <div class="d-flex">
            <a href="signin" class="text-decoration-none "><button class="btn btn-outline-dark px-3 py-1 shadow-none">LOGIN</button></a>
            <a href="signup"class="shadow-none"><button class="btn bg-dark text-white shadow-none">Sign Up</button></a>
          </div>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Home Section ======= -->
  <section id="home" class="bg-white d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1 " data-aos="fade-up" data-aos-delay="200">
          <h1>E-commerce</h1>
          <h2>Website</h2>
          <p class="fs-4">TALLO7T est une platforme d'art qui présent les différentes offres des tebleaux artistique afin de faciliter l’achat et introduire la culture artistique dans la société</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="Signup" class="btn-get-started mb-5">Get Started</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="./Public/Images/image.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Home -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about ">
    <div class="container" data-aos="fade-up">
      <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">
        <div class="col-lg-4">
          <div class="about-img">
            <img src="./Public/Images/page_Art.jpg" class=" img-fluid" alt="">
          </div>
        </div>
        <div class="col-lg-7 d-flex justify-content-center flex-column">
          <h1 class="pt-0 pt-lg-5">About</h1>
          <!-- Tab Content -->
          <div class="tab-content">
            <div class="tab-pane fade show active" id="tab1">
              <p>Le meilleur site de vente des tableaux artistiques qui favorisera la vente pour les vendeurs des créations artistiques
                et deviendra un nouveau point de vente . Ce qui les aidera à atteindre leurs objectifs dans ce domaine ainsi qu'à augmenter 
                leurs revenus financiers Et pour les clients qui aiment l'art ça sera un environnement convenable, et une opportunité de 
                trouver les meilleurs tableaux avec un prix optimal</p>
            </div><!-- End Tab 1 Content -->
          </div>
        </div>
      </div>
    </div>
  </section><!-- End About Section -->

  <!-- ======= Products Section ======= -->
  <section id="products" class="recent-blog-posts">

    <div class="container" data-aos="fade-up">

      <div class="section-header text-center m-4">
        <h1 class="fw-bold fs-1">Products</h1>
      </div>

      <div class="row mt-4">

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="post-box">
            <div class="post-img mb-4"><img src="./Public/Images/image_1.png" class="img-fluid" alt=""></div>
            <h3 class="post-title">Vie Traditionnelle</h3>
            <p>Fashion Sport Men's Stainless Steel Case Leather Band Quartz Analog Wrist Watch</p>
            <div class="meta">
              <p class="fw-bold">$20.99</p>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 " data-aos="fade-up" data-aos-delay="200">
          <div class="post-box">
            <div class="post-img mb-4"><img src="./Public/Images/image_2.png" class="img-fluid" alt=""></div>
            <h3 class="post-title">Envirennement Traditionnelle</h3>
            <p>Fashion Sport Men's Stainless Steel Case Leather Band Quartz Analog Wrist Watch</p>
            <div class="meta">
              <p class="fw-bold">$20.99</p>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 " data-aos="fade-up" data-aos-delay="200">
          <div class="post-box">
            <div class="post-img mb-4"><img src="./Public/Images/image_4.png" class="img-fluid" alt=""></div>
            <h3 class="post-title">La tendresse De La Mére</h3>
            <p>Fashion Sport Men's Stainless Steel Case Leather Band Quartz Analog Wrist Watch</p>
            <div class="meta">
              <p class="fw-bold">$20.99</p>
            </div>
          </div>
        </div>

      </div>

    </div>

  </section><!-- End Product Section -->

  
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="section-title text-center">
          <h1 class="fw-bold fs-1">Contact</h1>
        </div>
      </div>

      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <div class="d-flex align-middle">
                  <i class="bi bi-person fs-4 me-2"></i>
                  <h3 class="">Location:</h3>
                </div>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <div class="d-flex align-middle">
                  <i class="bi bi-envelope fs-4 me-2"></i>
                  <h4>Email:</h4>
                </div>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <div class="d-flex align-middle">
                  <i class="bi bi-telephone fs-4 me-2"></i>
                  <h4>Call:</h4>
                </div>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="" method="post" role="form" >
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control shadow-none" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control shadow-none" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control shadow-none" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control shadow-none" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="text-center mt-4"><button class="btn btn-dark rounded-pill" type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <?php
    require_once('Includes/footer.php')
  ?>