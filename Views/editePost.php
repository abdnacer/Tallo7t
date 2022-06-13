<?php
  if(isset($_POST['id'])){
    $getPost = new ArtistesController();
    $getPost = $getPost->getOnePost();
  }

  if(isset($_POST['update'])){
    $post = new ArtistesController();
    $post->updatePost();
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

    <h3 class="i-name">
      Dashboard Artiste
    </h3>

    <form method='POST' class="mx-5 my-4" id="form">
      <!-- Image input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form6Example3">Image</label>
        <input type="file" name="image" id="form6Example3" value="<?= $getPost['image'] ?>" class="form-control shadow-none phone" />
        <div class="errorPhone text-danger"></div>
      </div>

      <!-- Text input -->
      <div class="form-outline">
        <label class="form-label" for="form6Example1">Title</label>
        <input type="text" name="title" id="form6Example1" value="<?= $getPost['title'] ?>" class="form-control shadow-none title" />
        <div class="errorName text-danger"></div>
      </div>


      <div class="form-outline">
        <label class="form-label" for="form6Example2">Price</label>
        <input type="text" name="price" id="form6Example2" value="<?= $getPost['price'] ?>" class="form-control shadow-none price" />
        <div class="errorUsername text-danger"></div>
      </div>
    
      <!-- Text input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form6Example3">Description</label>
        <input type="text" name="description" id="form6Example3" value="<?= $getPost['description'] ?>" class="form-control shadow-none description" />
        <div class="errorPhone text-danger"></div>
      </div>
    
      
    
      <!-- Submit button -->
      <form method="POST">
        <input type="hidden" name="id" value="<?= $getPost['id'];?>">
        <button type="submit" name="update" class="btn btn-dark btn-block mb-4 shadow-none">Update</button>
      </form>
    </form>  
    
  </section>

  <!-- <script>
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
  </script> -->

  
  <?php
    require_once('Includes/footer.php')
  ?>