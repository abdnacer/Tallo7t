<?php
if ($_SESSION['role'] == 'client'){
  $datainfo = $_SESSION['id'];
  if (isset($datainfo)) {
    $dataProfile = new ClientController();
    $dataProfile = $dataProfile->getInfoSetting($datainfo);
  }
}else if ($_SESSION['role'] == 'artiste'){
  Redirect::to('dashboardArtiste');
}else if ($_SESSION['role'] == 'admin'){
  Redirect::to('dashboardArtiste');
}else{
  Redirect::to('logout');
}
?>
<?php
require_once('Includes/header.php');
?>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link rel="stylesheet" href="./Public/Css/StyleClient.css">


<nav class="navUser">
  <div class="logo">
    <img class="" src="./Public/Assets/logo.png" alt="LOGO">
  </div>
  <input type="checkbox" id="click">
  <label for="click" class="menu-btn">
    <i class="fas fa-bars"></i>
  </label>
  <ul>
    <li><a href="homeUser">Home</a></li>
    <li><a href="profilClient">Profil</a></li>
    <li><a href="SettingClient">Paramètre</a></li>
    <li><a href="contactClient">Contact</a></li>
    <li><a href="logout">Se deconnecter</a></li>
  </ul>
</nav>
<section class="main-content mb-2">
  <div class="container">
    <h1 class="text-center mb-5">Profile Client</h1>
    <div class="row">
      <div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
        <div class="profile-card card rounded-lg shadow p-4 p-xl-5 mb-4 text-center">
          <div class="banner">
          </div>
          <img src="./Public/image_user/avatar.png" alt="" class="img-circle mx-auto mb-3 bg-dark">
          <h3 class="mb-4 text-uppercase"><?= $dataProfile['username'] ?></h3>
          <div class="text-left mb-4">
            <p class="mb-2">
              <i class="fa fa-envelope me-3 fs-5"></i><?= $dataProfile['email'] ?>
            </p>
            <p class="mb-2">
              <i class="fa fa-phone me-3 fs-5"></i><?= $dataProfile['phone'] ?>
            </p>
            <p class="mb-2">
              <i class="fa fa-map-marker-alt me-3 fs-5"></i><?= $dataProfile['nationalite'] ?>
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