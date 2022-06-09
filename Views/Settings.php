<?php
$datainfo = $_SESSION['id'];
  if(isset($datainfo)){
    $data = new SignupController();
    $data = $data->getInfoSetting($datainfo);
  } 
  if(isset($_POST['update'])){
    $retourData = new SignupController();
    $retourData = $retourData->updateUser();
    $message = ($data == true) ? "password Empty" : "";
  }
  
?>
<?php
    require_once('Includes/header.php')
  ?>
<body class="body-art">
  <section id="menu">
    <div class="logo">
      <img class="" src="./Public/Assets/logo.png" alt="LOGO">
    </div>

    <div class="items">
      <li>
        <a href="dashboardArtistes">
          <i class="fa-solid fa-chart-line">
          </i>Dashboard</a>
      </li>
      <li>
        <a href="Postuler">
          <i class="fa-solid fa-signs-post">
          </i>Poste</a>
      </li>
      <li>
        <a href="Profile">
        <i class="fa-solid fa-user">
        </i>Profile</a>
      </li>
      <li>
        <a href="Settings">
        <i class="fa-solid fa-gear">
        </i>Settings</a>
      </li>
      <li>
        <a href="logout">
        <i class="fa-solid fa-arrow-right-from-bracket">
        </i>Se Deconnecter</a>
      </li>
    </div>
  </section>

  <section id="interface">
    <div class="navigation">
      <div class="n1">
        <div>
          <i id="menu-btn" class="fa-solid fa-bars"></i>
        </div>
        <div class="search">
          <i class="fa-solid fa-magnifying-glass"></i>
          <input type="text" placeholder="Search">
        </div>
      </div>

      <div class="profile">
        <i class="bi bi-cart4 fs-4"></i>
        <a href="Profile.html">
          <img src="./Public/Images/imageProfile.png" alt="image profile">
        </a>
      </div>
    </div>

    <h3 class="i-name">
      Dashboard Artiste
    </h3>

    <form method='POST' class="mx-5 my-4" id="form">
      <!-- 2 column grid layout with text inputs for the first and last names -->
      <div class="row mb-4">
        <div class="col">
          <div class="form-outline">
            <label class="form-label" for="form6Example1">Name Complete</label>
            <input type="text" name="name_complete" id="form6Example1" value="<?= $data['name_complete'];?>" class="form-control shadow-none name_complete" />
            <div class="errorName text-danger"></div>
          </div>
        </div>
        <div class="col">
          <div class="form-outline">
            <label class="form-label" for="form6Example2">Username</label>
            <input type="text" name="username" id="form6Example2" value="<?= $data['username'];?>" class="form-control shadow-none username" />
            <div class="errorUsername text-danger"></div>
          </div>
        </div>
      </div>
    
      <!-- Text input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form6Example3">Phone</label>
        <input type="text" name="phone" id="form6Example3" value="<?= $data['phone'];?>" class="form-control shadow-none phone" />
        <div class="errorPhone text-danger"></div>
      </div>
    
      <!-- Text input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form6Example4">Nationalite</label>
        <input type="text" name="nationalite" id="form6Example4" value="<?= $data['nationalite'];?>" class="form-control shadow-none nationalite" />
        <div class="errorNationalite text-danger"></div>
      </div>
    
      <!-- Email input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form6Example5">Email</label>
        <input type="email" name="email" id="form6Example5" value="<?= $data['email'];?>" class="form-control shadow-none email" />
        <div class="errorEmail text-danger"></div>
      </div>
    
      <!-- Number input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form6Example6">Password</label>
        <input type="text" name="password" id="form6Example6" value="<?= $data['pass'];?>" class="form-control shadow-none password" />
        <div class="errorPassword text-danger"></div>
        <div class="text-danger"><?php if(isset($message)) echo $message ?></div>
      </div>
    
      <!-- Submit button -->
      <form method="POST">
        <input type="hidden" name="id" value="<?= $data['id'];?>">
        <button type="submit" name="update" class="btn btn-dark btn-block mb-4 shadow-none">Update</button>
      </form>
    </form>  
    
  </section>

  <script>
    let form = document.querySelector('.form')
    let name = document.querySelector('.name_complete')
    let username = document.querySelector('.username')
    let phone = document.querySelector('.phone')
    let nationalite = document.querySelector('.nationalite')
    let email = document.querySelector('.email')
    let password = document.querySelector('.password')
    
    let errorName = document.querySelector('.errorName')
    let errorUsername = document.querySelector('.errorUsername')
    let errorPhone = document.querySelector('.errorPhone')
    let errorNationalite = document.querySelector('.errorNationalite')
    let errorEmail = document.querySelector('.errorEmail')
    let errorPassword = document.querySelector('.errorPassword')
    

    form.addEventListener('submit', (e) =>  {
        if(name.value.trim() == ''){
            e.preventDefault()
            errorName.textContent = "Name is empty"
            name.style.border = '1px solid red'
        }
        else{
            errorName.textContent = ""
            name.style.border = ''
        }
        
        if(username.value.trim() == ''){
            e.preventDefault()
            errorUsername.textContent = "Username is empty"
            username.style.border = '1px solid red'
        }else{
            errorUsername.textContent = ""
            username.style.border = ''
        }
       
        if(phone.value.trim() == ''){
            e.preventDefault()
            errorPhone.textContent = "Phone is empty"
            phone.style.border = '1px solid red'
        }else{
            errorPhone.textContent = ""
            phone.style.border = ''
        }
        
        if(nationalite.value.trim() == ''){
            e.preventDefault()
            errorNationalite.textContent = "Natonalite is empty"
            nationalite.style.border = '1px solid red'
        }else{
            errorNationalite.textContent = ""
            nationalite.style.border = ''
        }

        let regexEmail =  /^[A-Za-z0-9_-]{4,}@[a-z]{4,10}[.]{1}[a-z]{3,4}$/;
        if(email.value.trim() == ''){
          e.preventDefault();
          errorEmail.textContent = 'email is empty';
          emailEl.style.border = '1px solid red'
        }
        else if(!regexEmail.test(email.value.trim())){
          e.preventDefault()
          errorEmail.textContent = 'Email no empty sous forme example@email.com'
          email.style.border = '1px solid red'
        }
        else{
          errorEmail.textContent = ''
          email.style.border = ''
        }

        if(password.value.trim() == ''){
            e.preventDefault()
            errorPassword.textContent = "passworP is empty"
            password.style.border = '1px solid red'
        }else{
            errorPassword.textContent = ""
            password.style.border = ''
        }
    })  
  </script>

  
  <?php
    require_once('Includes/footer.php')
  ?>