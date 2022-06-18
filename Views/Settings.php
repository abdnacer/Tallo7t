<?php
if ($_SESSION['role'] == 'artiste'){
  $datainfo = $_SESSION['id'];
    if(isset($datainfo)){
      $data = new ArtistesController();
      $data = $data->getInfoSetting($datainfo);
    } 
  
    if(isset($_POST['update'])){
      $retourData = new ArtistesController();
      $retourData = $retourData->updateUser();
    }
}else if ($_SESSION['role'] == 'client') {
  Redirect::to('homeUser');
} else if ($_SESSION['role'] == 'admin'){
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

    <h3 class="i-name mb-4">
      Setting
    </h3>

    <form method='POST' class="mx-5 my-4" id="form">
      <!-- Text input -->
      <div class="form-outline mb-4 ">
        <label class="form-label" for="form6Example3">Image</label>
        <input type="file" name="avatar" id="form6Example3" class="form-control shadow-none phone" />
        <div class="errorPhone text-danger"></div>
      </div>
      <!-- 2 column grid layout with text inputs for the first and last names -->
      <div class="row mb-4">
        <div class="col">
          <div class="form-outline">
            <label class="form-label" for="form6Example1">Name Complete</label>
            <input type="text" name="name_complete" id="name" value="<?= $data['name_complete'];?>" class="form-control shadow-none name_complete" />
            <div class="errorName text-danger"></div>
          </div>
        </div>
        <div class="col">
          <div class="form-outline">
            <label class="form-label" for="form6Example2">Username</label>
            <input type="text" name="username" id="username" value="<?= $data['username'];?>" class="form-control shadow-none username" />
            <div class="errorUsername text-danger"></div>
          </div>
        </div>
      </div>
    
      <!-- Text input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form6Example3">Phone</label>
        <input type="text" name="phone" id="phone" value="<?= $data['phone'];?>" class="form-control shadow-none phone" />
        <div class="errorPhone text-danger"></div>
      </div>
    
      <!-- Text input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form6Example4">Nationalite</label>
        <input type="text" name="nationalite" id="nationalite" value="<?= $data['nationalite'];?>" class="form-control shadow-none nationalite" />
        <div class="errorNationalite text-danger"></div>
      </div>
    
      <!-- Email input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form6Example5">Email</label>
        <input type="email" name="email" id="email" value="<?= $data['email'];?>" class="form-control shadow-none email" />
        <div class="errorEmail text-danger"></div>
      </div>
    
      <!-- Submit button -->
      <form method="POST">
        <input type="hidden" name="id" value="<?= $data['id'];?>">
        <button type="submit" name="update" class="btn btn-dark btn-block mb-4 shadow-none">Update</button>
      </form>
    </form>  
    
  </section>

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