<?php
if ($_SESSION['role'] == 'admin'){
  $dataid = new adminController();
  $dataPost = $dataid->getAllPost();
}else if ($_SESSION['role'] == 'artiste') {
  Redirect::to('dashboardArtiste');
} else if ($_SESSION['role'] == 'client'){
  Redirect::to('homeUser');
}else{
  Redirect::to('logout');
}

?>
<?php
  require_once('Includes/header.php')
?>

<body class="body-art">

<?php
  require_once('Includes/Admin/sidebar.php')
?>

<section id="interface">
    <?php
      require_once('Includes/Admin/navbar.php')
    ?>

    <h3 class="i-name">
      Posts
    </h3>

    <!-- <div class="board"> -->
      <div class="container-fuild card-group d-flex align-items-center justify-content-start  flex-wrap gap-3 ms-4 mt-5">
      <?php 
        foreach($dataPost as $dataClient):
      ?>
      <div class="card d-flex mb-5 ms-3 justify-content-between me-4" style="min-width:320px; max-width:320px; z-index: -1;"> 
        <!-- z-index:-1; -->
      <div style="flex-basis: 350px; overflow:hidden;">
          <img class="card-img-top " src="Public/image_user/<?= $dataClient['image'] ?>" alt="Card image cap" >
      </div> 
      <div class="card-body flex-grow-0" >
          <h2 name="title" class="card-title m-0 fs-4 fw-bold"><?php echo $dataClient['title'] ?></h2>
          <p name="description" class="card-text mt-3"><?= $dataClient['description'] ?></p>
          <p name="price" class="card-text"><?= $dataClient['price'] ?>$</p>
          <div class="dropdown d-flex justify-content-between">
            <form action="addOrder" method="POST">
              <input type="hidden" name="id" value="<?php echo $dataClient['id_user'] ?>">
              <input type="hidden" name="id_Post" value="<?php echo $dataClient['id'] ?>">
              <?php if($dataClient['status'] == 1){ ?>
                <!-- <button type="submit" class="btn btn-dark" disabled>Buy</button> -->
                <p class="mt-2 fw-bold" style="font-size: 14px;">Ce Tableaux Déja acheté</p>
                <?php } 
                else{ ?>
                  <p class="mt-2 fw-bold" style="font-size: 14px;">Ce Tableau N'est pas acheté</p>
                  <!-- <button type="submit" class="btn btn-dark mb-2 ">Buy</button> -->
              <?php } ?>
             </form>
              <a href="" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></a>
              </div>
          </div>
      </div>
      
      <?php endforeach ?>
      
    <!-- </div> -->
    </div>
  </section>

</body>
<?php
    require_once('Includes/footer.php')
  ?>