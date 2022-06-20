<?php
if($_SESSION['role'] == 'client') {
  $dataPost = new ClientController();
  $dataPost = $dataPost->getAllPost();
}else if($_SESSION['role'] == 'artiste'){
  Redirect::to('dashboardArtistes');
}
else if($_SESSION['role'] == 'admin'){
  Redirect::to('dashboardAdmin');
}else{
  Redirect::to('logout');
}
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
    <li><a href="profilClient">Profil</a></li>
    <li><a href="SettingClient">Paramètre</a></li>
    <li><a href="contactClient">Contact</a></li>
    <li><a href="logout">Se deconnecter</a></li>
  </ul>
</nav>
<div class="container-fuild card-group d-flex align-items-center justify-content-start flex-wrap gap-3 ms-4 mt-5" style="padding-left: 55px;">
  <?php
  foreach ($dataPost as $dataAdmin) :
  ?>
    <div class="card d-flex mb-3 justify-content-between me-4" style="min-width:300px; max-width:300px; ">
      <!-- z-index:-1; -->
      <div style="flex-basis: 350px; overflow:hidden">
        <img class="card-img-top " src="./Public/image_user/<?= $dataAdmin['image'] ?>" alt="Card image cap">
      </div>
      <div class="card-body flex-grow-0">
        <h2 name="title" class="card-title m-0 fs-4 fw-bold"><?php echo $dataAdmin['title'] ?></h2>
        <p name="description" class="card-text mt-3"><?= $dataAdmin['description'] ?></p>
        <p name="price" class="card-text"><?= $dataAdmin['price'] ?>$</p>
        <div class="dropdown d-flex justify-content-between">
          <form action="addOrder" method="POST">
            <input type="hidden" name="id" value="<?php echo $dataAdmin['id_user'] ?>">
            <input type="hidden" name="id_Post" value="<?php echo $dataAdmin['id'] ?>">
            <?php if ($dataAdmin['status'] == 1) { ?>
              <!-- <button type="submit" class="btn btn-dark" disabled>Buy</button> -->
              <p class="mt-2 fw-bold" style="font-size: 14px;">Ce Tableaux Déja acheté</p>
            <?php } else { ?>
              <div class="d-flex justify-content-center">
                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-info rounded-3 shadow-none me-3">Paypal</button>
                <button type="submit" class="btn btn-dark px-4">Buy</button>
              </div>
            <?php } ?>
          </form>
          <a href="" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></a>
        </div>
      </div>
    </div>

  <?php endforeach ?>

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <button type="button" class="btn-close btn-outline-none shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div id="paypal-button-container" class="p-4"></div>
    </div>
  </div>
</div>

<script src="https://www.paypal.com/sdk/js?client-id=AaZVtSP_rZ6Lcf4JLZUnKKwyd-ZMBu9C88U6uToCeIG5mLFWrr-5VdSekQM9dksegYjIzNFL4M5ZKycV&currency=EUR"></script>
<script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '1000.0'
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      return actions.order.capture().then(function(details) {
        alert('Transaction completed by' + details.payer.name.given_name)
      });
    }
  }).render('#paypal-button-container');
</script>
<?php
require_once('Includes/footer.php')
?>