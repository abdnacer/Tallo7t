<?php
  $dataid = new ClientController();
  $dataPost = $dataid->getAllPost();
?>
  <?php
    require_once('Includes/Client/header.php')
  ?>
  

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
        <li><a href="profile">Profil</a></li>
        <li><a href="SettingClient">setting</a></li>
        <li><a href="contact">Contact</a></li>
        <li><a href="logout">Se deconnecter</a></li>
      </ul>
  </nav>
    <div class="container-fuild card-group d-flex align-items-center justify-content-start  flex-wrap gap-3 ms-4 mt-5 mx-5">
      <?php 
        foreach($dataPost as $dataClient):
      ?>
      <div class="card d-flex mb-3 justify-content-between me-4" style="min-width:300px; max-width:300px; "> 
        <!-- z-index:-1; -->
      <div style="flex-basis: 300px; overflow:hidden">
          <img class="card-img-top " src="./Public/Images/image_1.png" alt="Card image cap" >
      </div> 
      <div class="card-body flex-grow-0">
          <h2 name="title" class="card-title m-0 fs-4 fw-bold"><?php echo $dataClient['title'] ?></h2>
          <span id="name" name="title" class="card-title">abdenacer</span>
          <p name="description" class="card-text mt-3"><?= $dataClient['description'] ?></p>
          <p name="price" class="card-text"><?= $dataClient['price'] ?>$</p>
          <div class="dropdown d-flex justify-content-between">
            <form action="addOrder" method="POST">
              <input type="hidden" name="id" value="<?php echo $dataClient['id_user'] ?>">
              <input type="hidden" name="id_Post" value="<?php echo $dataClient['id'] ?>">
              <button type="submit" class="btn btn-dark">Buy</button>
             </form>
              <a href="" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></a>
              </div>
          </div>
      </div>
      
      <?php endforeach ?>
      
    </div>







  
  <?php
    require_once('Includes/footer.php')
  ?>