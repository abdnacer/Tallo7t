<?php

if (isset($_POST['submit'])) {
  $data = new SignupController();
  $data = $data->signup();
  $message = ($data == false) ? "email déja existe" : "";
  $messagepassword = ($data == true) ? "password not Matched" : "";
}

?>
<?php
require_once('Includes/header.php')
?>

<style>
  .cascading-right {
    margin-right: -50px;
  }

  @media (max-width: 991.98px) {
    .cascading-right {
      margin-right: 0;
    }
  }
</style>

<body class="royal_preloader">
  <!-- Section: Design Block -->
  <section class="d-flex align-items-center text-lg-start p-2">

    <!-- Jumbotron -->
    <div class="container">
      <div class="row g-0 align-items-center">
        <div class="col-lg-6 mb-lg-0">
          <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
            <div class="card-body p-5 shadow-5 ">
              <h2 class="fw-bold mb-3 text-center">S'inscrire</h2>
              <form method="POST" id="form">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="form-label" for="form3Example1">Nom Complet</label>
                      <input type="text" name="name_complete" id="name" class="form-control shadow-none" />
                      <div class="text-danger fs-6 errorName"></div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="form-label" for="form3Example2">Nom d'utilisateur</label>
                      <input type="text" name="username" id="username" class="form-control shadow-none" />
                      <div class="text-danger fs-6 errorUsername"></div>
                    </div>
                  </div>
                </div>

                <!-- Role input -->
                <div class="form-outline mb-4">
                  <label class="form-label " for="form3Example1">Rôle</label>
                  <select name="role" id="role" class="form-select shadow-none" aria-label="Default select example">
                    <option></option>
                    <option value="artiste">Artiste</option>
                    <option value="client">Client</option>
                  </select>
                  <div class="text-danger fs-6 errorRole"></div>
                </div>

                <!-- 2 column ++grid layout with text inputs for the first and last names -->
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="form-label" for="form3Example3">Téléphoner</label>
                      <input type="text" name="phone" id="phone" class="form-control shadow-none" />
                      <div class="text-danger fs-6 errorPhone"></div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="form-label" for="form3Example3">Nationalité</label>
                      <input type="text" name="nationalite" id="nationalite" class="form-control shadow-none" />
                      <div class="text-danger fs-6 errorNationalite"></div>
                    </div>
                  </div>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">Email</label>
                  <input type="email" name="email" id="email" class="form-control shadow-none" />
                  <div class="text-danger fs-6 errorEmail"></div>
                  <div class="text-danger"><?php if (isset($message)) echo $message ?></div>
                </div>

                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="form-label " for="form3Example1">Mot de passe</label>
                      <input type="password" name="password" id="password" class="form-control shadow-none" />
                      <div class="text-danger fs-6 errorPassword"></div>
                      <div class="text-danger"><?php if (isset($messagepassword)) echo $messagepassword ?></div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="form-label " for="form3Example1">Confirmez le mot de passe</label>
                      <input type="password" name="conferme_password" id="Cpassword" class="form-control shadow-none" />
                      <div class="text-danger fs-6 errorCpassword"></div>
                      <div class="text-danger"><?php if (isset($messagepassword)) echo $messagepassword ?></div>
                    </div>
                  </div>
                </div>

                <!-- Submit button -->
                <div class="d-flex flex-column align-items-center">
                  <button type="submit" name="submit" class="btn btn-dark px-4 btn-block rounded btn-block my-2 shadow-none">
                  S'inscrire
                  </button>
                  <p class="pb-lg-0">Vous avez déjà un compte? <a href="signin" class="text-dark">Connexion</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0 img_respo">
          <!-- <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" class="rounded-5 shadow-4" -->
          <img src="./Public/Images/image_signup.jpg" class="w-75 rounded-5 shadow-4 ms-4" alt="" />
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
  <!-- Section: Design Block -->

  <script>
    let form = document.querySelector('#form')
    let name = document.getElementById('name')
    let username = document.getElementById('username')
    let role = document.getElementById('role')
    let phone = document.getElementById('phone')
    let nationalite = document.getElementById('nationalite')
    let email = document.getElementById('email')
    let password = document.getElementById('password')
    let Cpassword = document.getElementById('Cpassword')

    let errorName = document.querySelector('.errorName')
    let errorUsername = document.querySelector('.errorUsername')
    let errorRole = document.querySelector('.errorRole')
    let errorPhone = document.querySelector('.errorPhone')
    let errorNationalite = document.querySelector('.errorNationalite')
    let errorEmail = document.querySelector('.errorEmail')
    let errorPassword = document.querySelector('.errorPassword')
    let errorCpassword = document.querySelector('.errorCpassword')


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

      if (role.value.trim() == '') {
        e.preventDefault()
        errorRole.textContent = "Role is empty"
        role.style.border = '1px solid red'
      } else {
        errorRole.textContent = ""
        role.style.border = ''
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

      if (password.value.trim() == '') {
        e.preventDefault()
        errorPassword.textContent = "Password is empty"
        password.style.border = '1px solid red'
      } else {
        errorPassword.textContent = ""
        password.style.border = ''
      }

      if (Cpassword.value.trim() == '') {
        e.preventDefault()
        errorCpassword.textContent = "Conferme Password is empty"
        Cpassword.style.border = '1px solid red'
      } else {
        errorCpassword.textContent = ""
        Cpassword.style.border = ''
      }
    })
  </script>

   <script src="./Public/Js/jquery.min.js"></script>
    <script src="./Public/Js/royal_preloader.min.js"></script>


    <script>
            window.jQuery = window.$ = jQuery;
            (function($) { "use strict";
                //Preloader
                Royal_Preloader.config({
                    mode           : 'logo',
                    logo           : './Public/Assets/logo_white.png',
                    logo_size: [200,200],
                    showProgress   : true,
                    showPercentage : true,
                    // text_colour: '#ffffff',
                    background:  '#000'
                });
            })(jQuery);
        </script>
  <?php
  require_once('Includes/footer.php')
  ?>