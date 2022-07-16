<?php
if ($_SESSION['role'] == 'artiste') {
  $datainfo = $_SESSION['id'];
  $dataArtistes = new ArtistesController();
  $data = $dataArtistes->getAllArtistes($datainfo);
  if (isset($_POST['id'])) {
    $exiteOrder = new ArtistesController();
    $exiteOrder->deleteOrder();
  }
}else if($_SESSION['role'] == 'artiste'){
  Redirect::to('dashboardArtistes');
}else if ($_SESSION['role'] == 'admin'){
  Redirect::to('dashboardAdmin');
}else{
  Redirect::to('logout');
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
          foreach ($data as $dataArt) :
            $id += 1;
          ?>
            <tr>
              <td class="number">
                <p><?= $id; ?></p>
              </td>

              <td class="name name-row">
                <p><?= $dataArt['name_complet'] ?></p>
              </td>

              <td class="cin">
                <p><?= $dataArt['cin'] ?></p>
              </td>

              <td class="ville">
                <p><?= $dataArt['ville'] ?></p>
              </td>

              <td class="address">
                <p><?= $dataArt['address'] ?></p>
              </td>

              <td class="postale">
                <p><?= $dataArt['code_postale'] ?></p>
              </td>

              <td class="phone">
                <p><?= $dataArt['phone'] ?></p>
              </td>

              <td class="phone">
                <p><?= $dataArt['date_order'] ?></p>
              </td>

              <td class="edit">
                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="border-0 bg-white p-0 fs-4">
                  <i class="bi bi-trash-fill ms-3"></i>
                </button>
              </td>
            </tr>
          <?php endforeach ?>

        </tbody>
      </table>
    </div>
  </section>

  <!-- Modal DELETE-->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete Order</h5>
          <button type="button" class="btn-close btn-outline-none shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          You Are Sure To Delete
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <form method="POST">
            <input type="hidden" name="id" value="<?php echo $dataArt['id']; ?>">
            <button type="submit" class="border-0 btn btn-dark">
              Delete
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>
    let searchInput = document.getElementById('search')

    searchInput.addEventListener('input', function() {
      let value = searchInput.value.toUpperCase()
      let columns = [...document.querySelectorAll('.name-row')]
      
      columns.forEach(column => {
        if (!column.textContent.toUpperCase().trim().startsWith(value)) {
          column.parentElement.style.display = 'none';
        } else {
          column.parentElement.style.display = 'table-row';
        }
      })
    })
  </script>


  <?php
  require_once('Includes/footer.php')
  ?>