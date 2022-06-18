<?php 

  if(isset($_POST['submit'])){
    $contact = new SignupController();
    $contact = $contact->AddContact();
  }

?>
<?php
    require_once('Includes/header.php')
  ?>
<body>
  <header id="header" class="fixed-top bg-light">
    <div class="container d-flex align-items-center justify-content-btween">
      <a href="home" class="logo me-auto"><img src="./Public/Assets/logo.png" alt="" class="img-fluid w50"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#home">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">À propos de</a></li>
          <li><a class="nav-link scrollto" href="#products">Produit</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <div class="d-flex">
            <a href="signin" class="text-decoration-none "><button class="btn btn-outline-dark px-3 py-1 shadow-none">CONNEXION</button></a>
            <a href="signup"class="shadow-none"><button class="btn bg-dark text-white shadow-none">S'inscrire</button></a>
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
          <p class="fs-4" style="letter-spacing: 4px;">TALLO7T est une platforme d'art qui présent les différentes offres des tebleaux artistique afin de faciliter l’achat et introduire la culture artistique dans la société</p>
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
          <h1 class="pt-0 pt-lg-5 mb-4">À PROPOS DE</h1>
          <!-- Tab Content -->
          <div class="tab-content">
            <div class="tab-pane fade show active" id="tab1" style="letter-spacing: 4px; line-height: 30px;">
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
        <h1 class="fw-bold fs-1">Produit</h1>
      </div>

      <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
        <div class="col">
          <div class="card" style="min-width :360px; max-width:360px;">
            <img src="./Public/images/image_1.png" class="card-img-top" alt="Hollywood Sign on The Hill" style="flex-basis: 400px; overflow:hidden" />
            <div class="card-body">
              <h5 class="card-title">Environnement De la Maison</h5>
              <p class="card-text">
                This is a longer card with supporting text below as a natural lead-in to
                additional content. This content is a little bit longer.
              </p>
              <p>25$</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="min-width: 360px; max-width:360px;">
            <img src="./Public/images/image_2.png" class="card-img-top" alt="Hollywood Sign on The Hill" style="flex-basis: 400px; overflow:hidden" />
            <div class="card-body">
              <h5 class="card-title">Mom Love</h5>
              <p class="card-text">
                This is a longer card with supporting text below as a natural lead-in to
                additional content. This content is a little bit longer.
              </p>
              <p>300$</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="min-width: 360px; max-width:360px;">
            <img src="./Public/images/image_4.png" class="card-img-top" alt="Hollywood Sign on The Hill" style="flex-basis: 400px; overflow:hidden" />
            <div class="card-body">
              <h5 class="card-title">La vie</h5>
              <p class="card-text">
                This is a longer card with supporting text below as a natural lead-in to
                additional content. This content is a little bit longer.
              </p>
              <p>255$</p>
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
                <p>Boulevard moulay youssef, Youssoufia, Maroc</p>
              </div>

              <div class="email">
                <div class="d-flex align-middle">
                  <i class="bi bi-envelope fs-4 me-2"></i>
                  <h4>Email:</h4>
                </div>
                <p>Tallo7t@gmail.com</p>
              </div>

              <div class="phone">
                <div class="d-flex align-middle">
                  <i class="bi bi-telephone fs-4 me-2"></i>
                  <h4>Call:</h4>
                </div>
                <p>+212 762 401 604</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form method="POST" role="form" id="form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control shadow-none" id="name" placeholder="Your Name">
                  <div class="text-danger fs-6 errorName"></div>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control shadow-none" name="email" id="email" placeholder="Your Email">
                  <div class="text-danger fs-6 errorEmail"></div>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control shadow-none" name="phone" id="phone" placeholder="Phone">
                <div class="text-danger fs-6 errorPhone"></div>
              </div>
              
              <div class="form-group mt-3">
                <input type="text" class="form-control shadow-none" name="subject" id="subject" placeholder="Subject" >
                <div class="text-danger fs-6 errorSubject"></div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control shadow-none" name="message" id="message" rows="5" placeholder="Message"></textarea>
                <div class="text-danger fs-6 errorMessage"></div>
              </div>
              <div class="text-center mt-4">
                <button class="btn btn-dark rounded-pill px-3" type="submit" name="submit">Send Message</button>
              </div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
    <script>
    let form = document.querySelector('#form')
    let name = document.getElementById('name')
    let email = document.getElementById('email')
    let phone = document.getElementById('phone')
    let subject = document.getElementById('subject')
    let message = document.getElementById('message')

    let errorName = document.querySelector('.errorName')
    let errorEmail = document.querySelector('.errorEmail')
    let errorPhone = document.querySelector('.errorPhone')
    let errorSubject = document.querySelector('.errorSubject')
    let errorMessage = document.querySelector('.errorMessage')


    form.addEventListener('submit', (e) => {
      if (name.value.trim() == '') {
        e.preventDefault()
        errorName.textContent = "Name is empty"
        name.style.border = '1px solid red'
      } else {
        errorName.textContent = ""
        name.style.border = ''
      }

      let regexEmail = /^[A-Za-z0-9_-]{4,}@[a-z]{4,10}[.]{1}[a-z]{3,4}$/;
      if (email.value.trim() == '') {
        e.preventDefault();
        errorEmail.textContent = 'Email is empty';
        email.style.border = '1px solid red'
      } else if (!regexEmail.test(email.value.trim())) {
        e.preventDefault()
        errorEmail.textContent = 'Email no empty sous forme example@email.com'
        email.style.border = '1px solid red'
      } else {
        errorEmail.textContent = ''
        email.style.border = ''
      }

      if (phone.value.trim() == '') {
        e.preventDefault()
        errorPhone.textContent = "Phone is empty"
        phone.style.border = '1px solid red'
      } else {
        errorPhone.textContent = ""
        phone.style.border = ''
      }
      
      if (subject.value.trim() == '') {
        e.preventDefault()
        errorSubject.textContent = "Subject is empty"
        subject.style.border = '1px solid red'
      } else {
        errorSubject.textContent = ""
        subject.style.border = ''
      }
      
      
      
      if (message.value.trim() == '') {
        e.preventDefault()
        errorMessage.textContent = "Message is empty"
        message.style.border = '1px solid red'
      } else {
        errorMessage.textContent = ""
        message.style.border = ''
      }
    })
  </script>
    <?php
    require_once('Includes/footer.php')
  ?>