<?php
    require_once('Includes/header.php')
  ?>

<body class="profil-art">
  <?php
    require_once('Includes/sidebar.php')
  ?>
  <section class="main-content">
    <div class="container">
      <h1 class="text-center mb-5">Profile D'artistes</h1>
      <div class="row">
        <div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
          <div class="profile-card card rounded-lg shadow p-4 p-xl-5 mb-4 text-center">
            <div class="banner">
            </div>
            <img src="./Public/Images/imageProfile.png" alt="" class="img-circle mx-auto mb-3">
            <h3 class="mb-4 text-uppercase"><?= $_SESSION['username']?></h3>
            <div class="text-left mb-4">
              <p class="mb-2">
                <i class="fa fa-envelope me-3 fs-5"></i><?= $_SESSION['email']?>
              </p>
              <p class="mb-2">
                <i class="fa fa-phone me-3 fs-5"></i><?php echo $_SESSION['phone']?>
              </p>
              <p class="mb-2">
                <i class="fa fa-map-marker-alt me-3 fs-5"></i><?php echo $_SESSION['nationalite']?>
              </p>
            </div>

            <div class="social-links">
              <a href="https://www.facebook.com/" class="mx-2">
                <img src="./Public/Images/sociale/facebook.png" alt="facebook">
              </a>
              <a href="https://www.instagram.com/" class="mx-2">
                <img src="./Public/Images/sociale/instagram.png" alt="instagram">
              </a>
              <a href="https://www.linkedin.com/" class="mx-2">
                <img src="./Public/Images/sociale/linkedin.png" alt="linkedin">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php
    require_once('Includes/footer.php')
  ?>