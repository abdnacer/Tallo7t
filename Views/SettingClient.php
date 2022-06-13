  <?php
    $datainfo = $_SESSION['id'];
    if(isset($datainfo)){
      $data = new ClientController();
      $data = $data->getInfoSetting($datainfo);
    }

    // var_dump($data);
    // die();
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
        <li><a href="profile">Profil</a></li>
        <li><a href="SettingClient">setting</a></li>
        <li><a href="contact">Contact</a></li>
        <li><a href="logout">Se deconnecter</a></li>
      </ul>
  </nav>

  <form method='POST' class="mx-5 my-3 container " id="form">
      <!-- Text input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form6Example3">Image</label>
        <input type="file" name="avatar" id="form6Example3" class="form-control shadow-none phone" />
        <div class="errorPhone text-danger"></div>
      </div>
      <!-- 2 column grid layout with text inputs for the first and last names -->
      <div class="row mb-4">
        <div class="col">
          <div class="form-outline">
            <label class="form-label" for="form6Example1">Name Complete</label>
            <input type="text" name="name_complete" id="form6Example1" value="<?= $data['name_complete'] ?>" class="form-control shadow-none name_complete" />
            <div class="errorName text-danger"></div>
          </div>
        </div>
        <div class="col">
          <div class="form-outline">
            <label class="form-label" for="form6Example2">Username</label>
            <input type="text" name="username" id="form6Example2" value="<?= $data['username'] ?>" class="form-control shadow-none username" />
            <div class="errorUsername text-danger"></div>
          </div>
        </div>
      </div>
    
      <!-- Text input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form6Example3">Phone</label>
        <input type="text" name="phone" id="form6Example3" value="<?= $data['phone'] ?>" class="form-control shadow-none phone" />
        <div class="errorPhone text-danger"></div>
      </div>
    
      <!-- Text input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form6Example4">Nationalite</label>
        <input type="text" name="nationalite" id="form6Example4" value="<?= $data['nationalite'] ?>" class="form-control shadow-none nationalite" />
        <div class="errorNationalite text-danger"></div>
      </div>
    
      <!-- Email input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form6Example5">Email</label>
        <input type="email" name="email" id="form6Example5" value="<?= $data['email'] ?>" class="form-control shadow-none email" />
        <div class="errorEmail text-danger"></div>
      </div>
    
      <!-- Number input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form6Example6">Password</label>
        <input type="text" name="password" id="form6Example6" value="<?= $data['pass'] ?>" class="form-control shadow-none password" />
        <div class="errorPassword text-danger"></div>
        <div class="text-danger"><?php if(isset($message)) echo $message ?></div>
      </div>
    
      <!-- Submit button -->
      <form method="POST">
        <input type="hidden" name="id" value="<?= $data['id'];?>">
        <button type="submit" name="update" class="btn btn-dark btn-block mb-4 shadow-none">Update</button>
      </form>
    </form>

  <?php
    require_once('Includes/footer.php')
  ?>