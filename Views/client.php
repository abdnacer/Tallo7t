<?php 
if ($_SESSION['role'] == 'admin'){
  $dataClient = new adminController();
  $dataClient = $dataClient->getClient();
}else if ($_SESSION['role'] == 'client') {
  Redirect::to('homeUser');
} else if ($_SESSION['role'] == 'artiste'){
  Redirect::to('dashboardArtiste');
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
     Clients
    </h3>

    <div class="board">
      <table class="table-art" width="100%">
        <thead>
          <tr>
            <td></td>
            <td>Name Complet</td>
            <td>Username</td>
            <td>Phone</td>
            <td>Address</td>
            <td>Email</td>
            <td>Date</td>
          </tr>
        </thead>
      <tbody>
        
        <?php 
        $id = 0;
        foreach($dataClient as $dataCl):
        $id += 1;
        ?>
        <tr>
          <td class="number">
            <p><?= $id ?></p>
          </td>

          <td class="name_complete name-row">
            <p><?= $dataCl['name_complete'] ?></p>
          </td>

          <td class="username">
            <p><?= $dataCl['username'] ?></p>
          </td>

          <td class="phone">
            <p><?= $dataCl['phone'] ?></p>
          </td>

          <td class="nationalite">
            <p><?= $dataCl['nationalite'] ?></p>
          </td>

          <td class="email">
            <p><?= $dataCl['email'] ?></p>
          </td>

          <td class="date">
            <p><?= $dataCl['date'] ?></p>
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