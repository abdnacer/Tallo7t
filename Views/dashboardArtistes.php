<?php
  $dataArtistes = new ArtistesController();
  $data = $dataArtistes->getAllArtistes();
  $datainfo['id'] = $_SESSION['id'];
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
        <!-- <form action="Settings" method="POST">
          <input type="hidden" name="id" value="<?php echo $datainfo['id'] ?>">
          <button  class="border-0 bg-light p-0">
          <i class="fa-solid fa-gear">
          </i>Settings</a>
          </button>
        </form> -->

        <a href="Settings">
          <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
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
        <a href="Profile.html">
          <img src="./Public/Images/imageProfile.png" alt="image profile">
        </a>
      </div>
    </div>

    <h3 class="i-name">
      Dashboard Artiste
    </h3>

    <div class="board">
      <table class="table-art" width="100%">
        <thead>
          <tr>
            <td></td>
            <td>Name Complet</td>
            <td>CIN</td>
            <td>Ville</td>
            <td>Address</td>
            <td>Code Postale</td>
            <td>Phone</td>
            <td>Date Order</td>
            <td>Action</td>
          </tr>
        </thead>
      <tbody>
        
        <?php 
        $id = 0;
        foreach($data as $dataArtistes): 
        $id += 1;?>
        <tr>
          <td class="number">
            <p><?= $id ;?></p>
          </td>

          <td class="name">
            <p><?= $dataArtistes['name_complet']?></p>
          </td>

          <td class="cin">
            <p><?= $dataArtistes['cin']?></p>
          </td>

          <td class="ville">
            <p><?= $dataArtistes['ville']?></p>
          </td>

          <td class="address">
            <p><?= $dataArtistes['address']?></p>
          </td>

          <td class="postale">
            <p><?= $dataArtistes['code_postale']?></p>
          </td>

          <td class="phone">
            <p><?= $dataArtistes['phone']?></p>
          </td>

          <td class="phone">
            <p><?= $dataArtistes['date_order']?></p>
          </td>

          <td class="edit">
            <p>
              <a href="">
                <i class="fa-solid fa-pen-to-square fs-4 me-2 text-secondary"></i>
              </a>
              <a href="">
                <i class="fa-solid fa-trash-can fs-4 text-secondary"></i>
              </a>
            </p>
          </td>
        </tr>
        <?php endforeach ?>
        
      </tbody>
    </table>
    </div>
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