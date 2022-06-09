<?php
$datainfo = $_SESSION['id'];
  if(isset($datainfo)){
    $data = new SignupController();
    $data = $data->getInfoSetting($datainfo);
  } 
  if(isset($_POST['update'])){
    $retourData = new SignupController();
    $retourData = $retourData->updateUser();
  } 
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Artistes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Core theme CSS (includes Bootstrap)-->
  <link rel="stylesheet" href="./Public/Css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="./Public/Css/style.css">
</head>
<body class="body-art">
  <section id="menu">
    <div class="logo">
      <img class="" src="./Public/Assets/logo.png" alt="LOGO">
    </div>

    <div class="items">
      <li>
        <a href="dashboardArtistes">
          <i class="fa-solid fa-chart-line">
          </i>Dashboard</a>
      </li>
      <li>
        <a href="Postuler">
          <i class="fa-solid fa-signs-post">
          </i>Poste</a>
      </li>
      <li>
        <a href="Profile">
        <i class="fa-solid fa-user">
        </i>Profile</a>
      </li>
      <li>
        <a href="Settings">
        <i class="fa-solid fa-gear">
        </i>Settings</a>
      </li>
      <li>
        <a href="logout">
        <i class="fa-solid fa-arrow-right-from-bracket">
        </i>Se Deconnecter</a>
      </li>
    </div>
  </section>

  <section id="interface">
    <div class="navigation">
      <div class="n1">
        <div>
          <i id="menu-btn" class="fa-solid fa-bars"></i>
        </div>
        <div class="search">
          <i class="fa-solid fa-magnifying-glass"></i>
          <input type="text" placeholder="Search">
        </div>
      </div>

      <div class="profile">
        <i class="bi bi-cart4 fs-4"></i>
        <a href="Profile.html">
          <img src="./Public/Images/imageProfile.png" alt="image profile">
        </a>
      </div>
    </div>

    <h3 class="i-name">
      Dashboard Artiste
    </h3>

    <form method='POST' class="mx-5 my-4">
      <!-- 2 column grid layout with text inputs for the first and last names -->
      <div class="row mb-4">
        <div class="col">
          <div class="form-outline">
            <label class="form-label" for="form6Example1">Name Complete</label>
            <input type="text" name="name_complete" id="form6Example1" value="<?= $data['name_complete'];?>" class="form-control shadow-none" />
          </div>
        </div>
        <div class="col">
          <div class="form-outline">
            <label class="form-label" for="form6Example2">Username</label>
            <input type="text" name="username" id="form6Example2" value="<?= $data['username'];?>" class="form-control shadow-none" />
          </div>
        </div>
      </div>
    
      <!-- Text input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form6Example3">Phone</label>
        <input type="text" name="phone" id="form6Example3" value="<?= $data['phone'];?>" class="form-control shadow-none" />
      </div>
    
      <!-- Text input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form6Example4">Nationalite</label>
        <input type="text" name="nationalite" id="form6Example4" value="<?= $data['nationalite'];?>" class="form-control shadow-none" />
      </div>
    
      <!-- Email input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form6Example5">Email</label>
        <input type="email" name="email" id="form6Example5" value="<?= $data['email'];?>" class="form-control shadow-none" />
      </div>
    
      <!-- Number input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form6Example6">Password</label>
        <input type="password" name="password" id="form6Example6" value="<?= $data['password'];?>" class="form-control shadow-none" />
      </div>
    
      <!-- Submit button -->
      <button type="submit" name="update" class="btn btn-dark btn-block mb-4">Update</button>
    </form>  
    
  </section>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/2e18c067b3.js" crossorigin="anonymous"></script>
  <!-- <script src="Arsha/assets/js/main.js"></script> -->
  <script src="./Public/Js/script.js"></script>
</body>
</html>