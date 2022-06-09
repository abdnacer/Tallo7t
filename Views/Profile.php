<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile D'artistes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Core theme CSS (includes Bootstrap)-->
  <link rel="stylesheet" href="./Public/Css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="./Public/Css/style.css">
</head>

<body class="profil-art">
  <section class="main-content">
    <div class="container">
      <h1 class="text-center mb-5">Profile D'artistes</h1>

      <div class="row">
        <div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
          <div class="profile-card card rounded-lg shadow p-4 p-xl-5 mb-4 text-center">
            <div class="banner">
              <a href="dashboardArtistes" class="icon-rout-profil"><i class="bi bi-arrow-return-left back"></i></a>
              <!-- <a href="Settings.html" class="icon-profil"><i class="bi bi-pen-fill edit"></i></a> -->
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
              <a href="" class="mx-2">
                <img src="./Public/Images/sociale/instagram.png" alt="instagram">
              </a>
              <a href="" class="mx-2">
                <img src="./Public/Images/sociale/linkedin.png" alt="linkedin">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>















  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/2e18c067b3.js" crossorigin="anonymous"></script>
  <!-- <script src="Arsha/assets/js/main.js"></script> -->
  <script src="../Public/Js/script.js"></script>
</body>

</html>