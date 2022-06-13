<?php
  $id = $_POST['id'];
  $id_Post = $_POST['id_Post'];
  if(isset($_POST['submit'])){
    $order = new ClientController();
    $orderRoute = $order->AddOrder();
  }
?>
<?php
  require_once('Includes/Client/header.php')
?>

<div class="container w-50 mt-5 bg-light bg-card1 p-4">
    <div class="py-1">
      <h1 class="fs-2 fw-bold">Add Order</h1>
    </div>
    <form method="POST" class="form">
      <div class="mb-3">
        <label for="exampleInputNom" class="form-label">Name Complete</label>
        <input type="text" name="name_complet" class="form-control shadow-none border-dark nom"  aria-describedby="NomHelp">
        <div class="errorNom text-danger"></div>
      </div>

      <div class="mb-3">
        <label for="exampleInputEmail" class="form-label">Cin</label>
        <input type="text" name="cin" class="form-control shadow-none border-dark email" id="cin">
        <div class="errorEmail text-danger"></div>
      </div>
      
      <div class="mb-3">
        <label for="exampleInputEmail" class="form-label">Ville</label>
        <input type="text" name="ville" class="form-control shadow-none border-dark" id="ville">
        <div class="errorEmail text-danger"></div>
      </div>

      <div class="mb-3">
        <label for="exampleInputAdresse" class="form-label">Adresse</label>
        <input type="text" name="address" class="form-control shadow-none border-dark address" id="address">
        <div class="errorAdresse text-danger"></div>
      </div>

      <div class="mb-3">
        <label for="exampleInputDate" class="form-label">Code Postale</label>
        <input type="text" name="code_postale" class="form-control shadow-none border-dark code_postale" id="code_postale">
        <div class="errorDate text-danger"></div>
      </div>
      
      <div class="mb-3">
        <label for="exampleInputDate" class="form-label">Phone</label>
        <input type="text" name="phone" class="form-control shadow-none border-dark phone" id="phone">
        <div class="errorDate text-danger"></div>
      </div>

      <a href="homeUser" type="submit" class="btn btn-secondary px-3 me-2">Cancel</a>
      <form method="POST">  
      <input type="hidden" name="id" value="<?php echo $id ?>">
      <input type="hidden" name="id_Post" value="<?php echo $id_Post ?>">
      <button type="submit" name="submit" class="btn btn-dark px-4">Add</button>
      </form>
    </form>  
  </div>



<?php
  require_once('Includes/Client/footer.php')
?>