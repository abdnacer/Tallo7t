<?php 
if ($_SESSION['role'] == 'admin'){
  $dataArtistes = new adminController();
  $dataArtistes = $dataArtistes->getArtistes();
}else if ($_SESSION['role'] == 'client') {
  Redirect::to('homeUser');
} else if ($_SESSION['role'] == 'artiste') {
  Redirect::to('dashboardArtistes');
} else {
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
      Artistes
    </h3>

    <div class="board">
      <table class="table-art" width="100%">
        <thead>
          <tr>
            <td></td>
            <td>Nom Complet</td>
            <td>Nom d'utilisateur</td>
            <td>Téléphoner</td>
            <td>Adresse</td>
            <td>Email</td>
            <td>Date</td>
          </tr>
        </thead>  
      <tbody>
        
        <?php 
        $id = 0;
        foreach($dataArtistes as $dataArt):
        $id += 1;
        ?>
        <tr>
          <td class="number">
            <p><?= $id ?></p>
          </td>

          <td class="name_complete name-row">
            <p><?= $dataArt['name_complete'] ?></p>
          </td>

          <td class="username">
            <p><?= $dataArt['username'] ?></p>
          </td>

          <td class="phone">
            <p><?= $dataArt['phone'] ?></p>
          </td>

          <td class="nationalite">
            <p><?= $dataArt['nationalite'] ?></p>
          </td>

          <td class="email">
            <p><?= $dataArt['email'] ?></p>
          </td>

          <td class="date">
            <p><?= $dataArt['date'] ?></p>
          </td>
        </tr>
        <?php
         endforeach
          ?>
        
      </tbody>
    </table>
    </div>
  </section>

</body>
<?php
    require_once('Includes/footer.php')
  ?>