<?php
$dataId = $_SESSION['id'];
$dataIdOrder = new ArtistesController();
$dataIdOrder = $dataIdOrder->getCountOrder($dataId);
// $data = $data->getCountOrder($dataId);

// if (isset($_POST['find'])) {
//   $data = new ArtistesController();
//   $client = $data->findClient();
// }
?>
<div class="navigation">
  <div class="n1">
    <div>
      <i id="menu-btn" class="fa-solid fa-bars"></i>
    </div>
    <div class="search">
      <!-- <button type="submit" name="find" class="position-absolute top-50 end-0 bg-white border-0  translate-middle">
        </button> -->
        <form class="d-flex" method="POST">
          <button type="submit" name="find" class="bg-white border-0">
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>
          <input class="form-control shadow-none border-dark" id="search" name="search" type="search" onkeyup="search()" placeholder="Search" aria-label="Search">
        </form>
    </div>
  </div>

  <div class="profile">
    <a href="dashboardArtistes" class="position-relative text-dark">
      <span class="position-absolute top-0 start-75 translate-middle badge rounded-pill bg-danger">
        <?= $dataIdOrder ?>
      </span>
      <i class="bi bi-cart4 fs-3"></i>
    </a>
    <!-- <i class="bi bi-cart4 fs-4"></i> -->
    <a href="Profile">
      <img src="./Public/Images/imageProfile.png" alt="image profile">
    </a>
  </div>
</div>