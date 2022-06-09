<?php
  $dataArtistes = new ArtistesController();
  $data = $dataArtistes->getAllArtistes();
  $datainfo['id'] = $_SESSION['id'];
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


  <?php
    require_once('Includes/footer.php')
  ?>