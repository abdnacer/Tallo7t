<?php
  if(isset($_POST['submit'])){
    $dataSignin = new SignupController();
    $data = $dataSignin->signin();
    $message = (!empty($data) && $data == 'email inccorect') ? $data : "";
    $messagePassword = (!empty($data) && $data == 'Password inccorect') ? $data : "";
  }
?>

<?php
    require_once('Includes/header.php')
  ?>
<body>
  <section class="h-100" style="background-color: #fcfcfc;">
    <div class="container h-100 p-5">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-9">
          <div class="card" style="border-radius: 1rem; border: none; box-shadow: 2px 2px 13px 0 rgba(0,0,0,.1)">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="./Public/Images/image_signin.jpg"
                  alt="login form" class="img-fluid w-100 h-100" style="border-radius: 1rem 0 0 1rem; " />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black" >
  
                  <form method="POST" id="form">
  
                    <div class="d-flex align-items-center mb-5">
                      <span class="h1 fw-bold mb-0">Connexion</span>
                    </div>
  
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Connectez-vous à votre compte</h5>
  
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example17">Email</label>
                      <input type="email" name="email" id="email" class="form-control form-control-lg shadow-none" />
                      <div class="text-danger fs-6 errorEmail"></div>
                      <div class="text-danger"><?php if(isset($message)) echo $message ?></div>
                    </div>
  
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example27">Mot de passe</label>
                      <input type="password" name="password" id="password" class="form-control form-control-lg shadow-none" />
                      <div class="text-danger fs-6 errorPassword"></div>
                      <div class="text-danger"><?php if(isset($messagePassword)) echo $messagePassword ?></div>
                    </div>
  
                    <div class="pt-1 mb-4">
                      <button type="submit" name="submit" class="btn btn-dark btn-lg btn-block px-5 py-1 shadow-none">Connexion</button>
                    </div>
                    
                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Vous n'avez pas de compte ? <a href="signup"
                        style="color: #393f81;">Inscrivez-vous ici</a></p>
                  </form>
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <script>
    let form = document.querySelector('#form')
    let email = document.querySelector('#email')
    let password = document.getElementById('password')

    let errorEmail = document.querySelector('.errorEmail')
    let errorPassword = document.querySelector('.errorPassword')


    form.addEventListener('submit', (e) => {
      let regexEmail = /^[A-Za-z0-9_-]{4,}@[a-z]{4,10}[.]{1}[a-z]{3,4}$/;
      if (email.value.trim() == '') {
        e.preventDefault();
        errorEmail.textContent = 'email is empty';
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
        errorPassword.textContent = "password is empty"
        password.style.border = '1px solid red'
      } else {
        errorPassword.textContent = ""
        password.style.border = ''
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