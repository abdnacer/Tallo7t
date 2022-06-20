<?php
if ($_SESSION['role'] == 'admin'){
  $contact = new adminController();
  $result = $contact->getContact();
}else if ($_SESSION['role'] == 'artiste') {
  Redirect::to('dashboardArtistes');
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
      Contact
    </h3>

    <div class="container-fuild card-group d-flex align-items-center justify-content-start  flex-wrap  mt-5 ms-2 ">
      <?php
      foreach($result as $getContact):
      ?>
    <div class="card d-flex mb-5 ms-3 justify-content-between me-4 p-3" style=" background-color: rgb(249 246 246);min-width:500px; max-width:500px; border-radius: 18px; box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25); z-index: -1;">
      <div class="card-body" >
        <h4 class="card-title mb-3" >Name : <span class="fs-5 text-dark"><?php echo $getContact['name'] ?></span> </h4>
        <h4 class="card-text mb-3">Email : <span class="fs-5 text-dark"><?php echo $getContact['email'] ?></span></h4>
        <h4 class="card-text mb-3">Phone : <span class="fs-5 text-dark"><?php echo $getContact['phone'] ?></span></h4>
        <h4 class="card-text mb-3">Role : <span class="fs-5 text-dark"><?php echo $getContact['role'] ?></span></h4>
        <h4 class="card-text mb-3">Subject : <span class="fs-5 text-dark"><?php echo $getContact['subject'] ?></span></h4>
        <h4 class="card-text mb-3">Message : 
        <span class="fs-5 text-dark"><?php echo $getContact['message'] ?></span></h3>
      </div>
      </div>
      <?php endforeach ?>
    </div>
  </section>

</body>
<?php
    require_once('Includes/footer.php')
  ?>