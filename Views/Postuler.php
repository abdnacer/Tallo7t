<?php
  $datainfo = $_SESSION['id'];
  if(isset($_POST['submit'])){
    $dataPost = new ArtistesController();
    $dataPost = $dataPost->addPost($datainfo);
  }
  else if(isset($datainfo)){
    $dataAffichePost = new ArtistesController();
    $dataAffichePost = $dataAffichePost->getAllPost($datainfo);
  }
?>

  <?php
    require_once('Includes/header.php')
  ?>
  <body class="body-art">
  <?php
    require_once('Includes/sidebar.php')
  ?>

  <section id="interface">
    <?php
      require_once('Includes/navbar.php')
    ?>

    <div class="d-flex justify-content-between align-items-center">
      <h3 class="i-name">
        Dashboard Artiste
      </h3>
      <div class="btno me-4 mt-4">
          <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-dark px-4 rounded-3 shadow-none">
            Add
          </button>
      </div>
    </div>


    <div class="container-fuild card-group d-flex align-items-center flex-wrap gap-3 ms-4 mt-5 ">
      <?php foreach($dataAffichePost as $getPost): ?>
      <div class="card d-flex mb-3 justify-content-between" style="min-width:270px; max-width:270px; "> 
        <!-- z-index:-1; -->
      <div style="flex-basis: 250px; overflow:hidden">
          <img class="card-img-top " src="./Public/Images/<?= $getPost['image'] ?>" alt="Card image cap" >
      </div> 
      <div class="card-body flex-grow-0">
          <h5 name="title" class="card-title"><?= $getPost['title'] ?></h5>
          <p name="description" class="card-text"><?= $getPost['description'] ?></p>
          <p name="price" class="card-text"><?= $getPost['price'] ?>$</p>
          <div class="dropdown d-flex justify-content-end">
          <!-- <a href="#" class="btn btn-primary"></a> -->
          <a href="" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-three-dots-vertical"></i></a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <form action="editePost" method="POST">
                <input type="hidden" name="id" value="<?= $getPost['id']; ?>">
              <!-- <li> -->
                <button class="dropdown-item">Edit</button>
              <!-- </li> -->
            </form>
              <!-- <li><a class="dropdown-item" href="editCourse.php?edit=<?php echo $getPost['id']; ?>">Edit</a></li> -->
              <li><a class="dropdown-item" href="deleteCourse.php?delete=<?php echo $getPost['id']; ?>"">Delete</a></li>
          </ul>
          </div>
          </div>
      </div>
      <?php endforeach ?>
      
    </div>
    
  </section>


  <!-- Modal de Post-->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Creat Product</h4>
        <button type="button" class="btn-close btn-outline-none shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST">
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="bi bi-card-image"></i>
          <label data-error="wrong" data-success="right" for="form34">Images</label>
          <input type="file" name="image" id="form34" class="form-control validate shadow-none mt-2">
        </div>

        <div class="md-form mb-5">
        <i class="bi bi-sticky-fill prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="form29">Title</label>
          <input type="text" name="title" id="form29" class="form-control validate shadow-none mt-2">
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-tag prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="form32">Price</label>
          <input type="text" name="price" id="form32" class="form-control validate shadow-none mt-2">
        </div>

        <div class="md-form">
          <i class="fas fa-pencil prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="form8">Description</label>
          <textarea type="text" name="description" id="form8" class="md-textarea form-control shadow-none mt-2" rows="4"></textarea>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" name="submit" class="btn btn-dark px-4 shadow-none">Send</button>
      </div>
    </form>
    </div>
  </div>
</div>




<?php
    require_once('Includes/footer.php')
  ?>