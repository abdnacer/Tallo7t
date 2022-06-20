<?php
$dataId = $_SESSION['id'];
$dataIdOrder = new ArtistesController();
$dataIdOrder = $dataIdOrder->getCountOrder($dataId);
?>
<div class="navigation">
  <div class="n1">
    <div>
      <i id="menu-btn" class="fa-solid fa-bars"></i>
    </div>
    <div class="search">
        <form class="d-flex" method="POST">
          <button type="submit" name="find" class="bg-white border-0">
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>
          <input class="form-control shadow-none border-dark" id="search" name="search" type="search" placeholder="Search" aria-label="Search">
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
    <a href="Profile">
      <img src="./Public/image_user/avatar.png" alt="image profile">
    </a>
  </div>
</div>