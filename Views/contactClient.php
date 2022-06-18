  <?php
  if ($_SESSION['role'] == 'client'){
    if(isset($_POST['submit'])){
      $contact = new ClientController();
      $contact->addContact();
    }
  }
  else if($_SESSION['role'] == 'artiste'){
    Redirect::to('dashboardArtistes');
  }
  else if($_SESSION['role'] == 'admin'){
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

  <div class="container">
  <form method="POST" id="form" class="mx-5 my-4" id="form">
      <!-- Text input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form6Example3">Name</label>
        <input type="text" name="name" id="name" class="form-control shadow-none name" />
        <div class="errorName text-danger"></div>
      </div>

      <!-- Email input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form6Example5">Email</label>
        <input type="email" name="email" id="email" class="form-control shadow-none email" />
        <div class="errorEmail text-danger"></div>
      </div>
    
      <!-- Text input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form6Example3">Phone</label>
        <input type="text" name="phone" id="phone" class="form-control shadow-none phone" />
        <div class="errorPhone text-danger"></div>
      </div>
    
      <!-- Text input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form6Example4">Subject</label>
        <input type="text" name="subject" id="subject" class="form-control shadow-none subject" />
        <div class="errorSubject text-danger"></div>
      </div>
      
      <!-- Text input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form6Example4">Message</label>
        <textarea class="form-control shadow-none" id="message" name="message" rows="5" placeholder="Message"></textarea>
        <div class="errorMessage text-danger"></div>
      </div>
    
      <!-- Submit button -->
      <div class="text-center mt-4">
        <button class="btn btn-dark rounded-pill px-3" type="submit" name="submit">Send Message</button>
      </div>
        <!-- <button type="submit" name="update" class="btn btn-dark btn-block mb-4 shadow-none">Send Message</button> -->
    </form> 

  </div>

  <script>
    let form = document.querySelector('#form')
    let name = document.getElementById('name')
    let email = document.getElementById('email')
    let phone = document.getElementById('phone')
    let subject = document.getElementById('subject')
    let message = document.getElementById('message')

    let errorName = document.querySelector('.errorName')
    let errorEmail = document.querySelector('.errorEmail')
    let errorPhone = document.querySelector('.errorPhone')
    let errorSubject = document.querySelector('.errorSubject')
    let errorMessage = document.querySelector('.errorMessage')


    form.addEventListener('submit', (e) => {
      if (name.value.trim() == '') {
        e.preventDefault()
        errorName.textContent = "Name is empty"
        name.style.border = '1px solid red'
      } else {
        errorName.textContent = ""
        name.style.border = ''
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

      if (phone.value.trim() == '') {
        e.preventDefault()
        errorPhone.textContent = "Phone is empty"
        phone.style.border = '1px solid red'
      } else {
        errorPhone.textContent = ""
        phone.style.border = ''
      }
      
      if (subject.value.trim() == '') {
        e.preventDefault()
        errorSubject.textContent = "Subject is empty"
        subject.style.border = '1px solid red'
      } else {
        errorSubject.textContent = ""
        subject.style.border = ''
      }
      
      
      
      if (message.value.trim() == '') {
        e.preventDefault()
        errorMessage.textContent = "Message is empty"
        message.style.border = '1px solid red'
      } else {
        errorMessage.textContent = ""
        message.style.border = ''
      }
    })
  </script>

  
<?php
  require_once('Includes/footer.php')
?>