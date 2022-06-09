<?php
  if(isset($_POST['submit'])){
    $data = new SignupController();
    $data = $data->signin();
    $message = ($data == false) ? "email or password not correct" : "";
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
  
                  <form method="POST">
  
                    <div class="d-flex align-items-center mb-5">
                      <span class="h1 fw-bold mb-0">LOGIN</span>
                    </div>
  
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
  
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example17">Email</label>
                      <input type="email" name="email" id="form2Example17" class="form-control form-control-lg shadow-none" />
                      <div class="text-danger"><?php if(isset($message)) echo $message ?></div>
                    </div>
  
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example27">Password</label>
                      <input type="password" name="password" id="form2Example27" class="form-control form-control-lg shadow-none" />
                      <div class="text-danger"><?php if(isset($message)) echo $message ?></div>
                    </div>
  
                    <div class="pt-1 mb-4">
                      <button type="submit" name="submit" class="btn btn-dark btn-lg btn-block px-5 py-1 shadow-none">Login</button>
                    </div>
                    
                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="signup"
                        style="color: #393f81;">Register here</a></p>
                  </form>
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <?php
    require_once('Includes/footer.php')
  ?>