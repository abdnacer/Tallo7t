<?php 
  $dataClient = new adminController();
  $dataClient = $dataClient->getClient();
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
      Dashboard Admin
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
            <td>Action</td>
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

          <td class="edit">
          <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="border-0 bg-white p-0 fs-4">
            <i class="bi bi-trash-fill ms-3"></i>
          </button>
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