  <?php
  if ($_SESSION['role'] == 'client'){
    $datainfo = $_SESSION['id'];
    if(isset($datainfo)){
      $data = new ClientController();
      $data = $data->getInfoSetting($datainfo);
    }

    if(isset($_POST['update'])){
      $retourData = new ClientController();
      $retourData = $retourData->updateClient();
      $message = ($data == true) ? "password Not change" : "";
    }
  }elseif ($_SESSION['role'] == 'artiste'){
    Redirect::to('dashboardArtiste');
  }else if ($_SESSION['role'] == 'admin'){
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

  <form method='POST' class="mx-5 my-3 container mt-5" id="form">
      <!-- Text input -->
      <div class="form-outline mb-4 ">
        <label class="form-label" for="form6Example3">Image</label>
        <input type="file" name="avatar" id="form6Example3" class="form-control shadow-none image">
      </div>
      <!-- 2 column grid layout with text inputs for the first and last names -->
      <div class="row mb-4">
        <div class="col">
          <div class="form-outline">
            <label class="form-label" for="form6Example2">Name Complete</label>
            <input type="text" name="name_complete" id="name" value="<?= $data['name_complete'] ?>" class="form-control shadow-none name_complete  fs-6" />
            <div class="errorName text-danger"></div>
          </div>
        </div>
        <div class="col">
          <div class="form-outline">
            <label class="form-label" for="form6Example2">Username</label>
            <input type="text" name="username" id="username" value="<?= $data['username'] ?>" class="form-control shadow-none username" />
            <div class="errorUsername text-danger"></div>
          </div>
        </div>
      </div>
    
      <!-- Text input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form6Example3">Phone</label>
        <input type="text" name="phone" id="phone" value="<?= $data['phone'] ?>" class="form-control shadow-none phone" />
        <div class="errorPhone text-danger"></div>
      </div>
    
      <!-- Text input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form6Example4">Nationalite</label>
        <input type="text" name="nationalite" id="nationalite" value="<?= $data['nationalite'] ?>" class="form-control shadow-none nationalite" />
        <div class="errorNationalite text-danger"></div>
      </div>
    
      <!-- Email input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form6Example5">Email</label>
        <input type="email" name="email" id="email" value="<?= $data['email'] ?>" class="form-control shadow-none email" />
        <div class="errorEmail text-danger"></div>
      </div>
    
      <!-- Submit button -->
      <form method="POST">
        <input type="hidden" name="id" value="<?= $data['id'];?>">
        <button type="submit" name="update" class="btn btn-dark btn-block mb-4 shadow-none">Update</button>
      </form>
    </form>

    <script>
    let form = document.getElementById('form')
    let name = document.getElementById('name')
    let username = document.getElementById('username')
    let phone = document.getElementById('phone')
    let nationalite = document.getElementById('nationalite')
    let email = document.getElementById('email')

    let errorName = document.querySelector('.errorName')
    let errorUsername = document.querySelector('.errorUsername')
    let errorPhone = document.querySelector('.errorPhone')
    let errorNationalite = document.querySelector('.errorNationalite')
    let errorEmail = document.querySelector('.errorEmail')


    form.addEventListener('submit', (e) => {
      if (name.value.trim() == '') {
        e.preventDefault()
        errorName.textContent = "Name is empty"
        name.style.border = '1px solid red'
      } else {
        errorName.textContent = ""
        name.style.border = ''
      }

      if (username.value.trim() == '') {
        e.preventDefault()
        errorUsername.textContent = "Username is empty"
        username.style.border = '1px solid red'
      } else {
        errorUsername.textContent = ""
        username.style.border = ''
      }

      if (phone.value.trim() == '') {
        e.preventDefault()
        errorPhone.textContent = "Phone is empty"
        phone.style.border = '1px solid red'
      } else {
        errorPhone.textContent = ""
        phone.style.border = ''
      }

      if (nationalite.value.trim() == '') {
        e.preventDefault()
        errorNationalite.textContent = "Nationalite is empty"
        nationalite.style.border = '1px solid red'
      } else {
        errorNationalite.textContent = ""
        nationalite.style.border = ''
      }

      let regexEmail = /^[A-Za-z0-9_-]{4,}@[a-z]{4,10}[.]{1}[a-z]{3,4}$/;
      if (email.value.trim() == '') {
        e.preventDefault();
        errorEmail.textContent = 'Email is empty';
        email.style.border = '1px solid red'
      } else if (!regexEmail.test(email.value.trim())) {
        e.preventDefault()
        errorEmail.textContent = 'Email no empty sous forme example@email.com'
        email.style.border = '1px solid red'
      } else {
        errorEmail.textContent = ''
        email.style.border = ''
      }
    })
  </script>

  <?php
    require_once('Includes/footer.php')
  ?>