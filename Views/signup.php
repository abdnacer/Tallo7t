<?php
  if(isset($_POST['submit'])){
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
              <h2 class="fw-bold mb-3 text-center">SIGN UP</h2>
              <form method="POST">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="form-label" for="form3Example1">Name Complet</label>
                      <input type="text" name="name_complete" id="form3Example1" class="form-control shadow-none" />
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="form-label" for="form3Example2">Username</label>
                      <input type="text" name="username" id="form3Example1" class="form-control shadow-none" />
                    </div>
                  </div>
                </div>

                <!-- Role input -->
                <div class="form-outline mb-4">
                  <label class="form-label " for="form3Example1">Role</label>
                  <select name="role" class="form-select shadow-none" aria-label="Default select example">
                    <option></option>
                    <option value="artiste">Artiste</option>
                    <option value="client">Client</option>
                  </select>
                </div>

                <!-- 2 column ++grid layout with text inputs for the first and last names -->
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                    <label class="form-label" for="form3Example3">Phone</label>
                    <input type="text" name="phone" id="form3Example3" class="form-control shadow-none" />
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                    <label class="form-label" for="form3Example3">Nationalité</label>
                    <input type="text" name= "nationalite" id="form3Example3" class="form-control shadow-none" />
                    </div>
                  </div>
                </div>
                
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">Email</label>
                  <input type="email" name="email" id="form3Example3" class="form-control shadow-none" />
                  <div class="text-danger"><?php if(isset($message)) echo $message ?></div>
                </div>

                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="form-label " for="form3Example1">Password</label>
                      <input type="password" name="password" id="form3Example1" class="form-control shadow-none" />
                      <div class="text-danger"><?php if(isset($messagepassword)) echo $messagepassword ?></div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="form-label " for="form3Example1">Conferme Password</label>
                  <input type="password" name="conferme_password" id="form3Example1" class="form-control shadow-none" />
                  <div class="text-danger"><?php if(isset($messagepassword)) echo $messagepassword ?></div>
                    </div>
                  </div>
                </div>

                <!-- Submit button -->
                <div class="d-flex flex-column align-items-center">
                  <button type="submit" name="submit" class="btn btn-dark px-4 btn-block rounded btn-block my-2 shadow-none">
                    Sign up
                  </button>
                  <p class="pb-lg-0">Already have an account? <a href="signin" class="text-dark">login</a></p>
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


  <?php
    require_once('Includes/footer.php')
  ?>