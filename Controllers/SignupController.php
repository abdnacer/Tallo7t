<?php
require('./Models/SignupModals.php');

class SignupController{
  public function signup(){
    if(isset($_POST['submit'])){
      $email = array(
        'email' => $_POST['email'],
      );
      $result = new UserModal();
      $result = $result->verfyEmail($email);
      if($result != 0){
        return false;
      }
      else{
      if($_POST['password'] == $_POST['conferme_password']){
        $data = array(
          'name_complete' => $_POST['name_complete'],
          'username' => $_POST['username'],
          'role' => $_POST['role'],
          'phone' => $_POST['phone'],
          'nationalite' => $_POST['nationalite'],
          'email' => $_POST['email'],
          'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
        );
          $result = new UserModal();
          $result = $result->addUser($data);
          if($result == 'User is created successfully'){
            Redirect::to('signin');
          }
          else{
            echo $result;
          }
      }
      else{
        return true;
      }
    }

    }
  }

  public function signin(){
    if(isset($_POST['submit'])){
      $data = array(
        'email' => $_POST['email'],
        'password' => $_POST['password']
      );
      $signin = new UserModal;
      $signin = $signin->getUser($data);
      if(password_verify($_POST['password'], $signin['password']) == true){
          $_SESSION['id'] = $signin['id'];
          $_SESSION['role'] = $signin['role'];
          if($signin['role'] == 'artiste'){
            Redirect::to('dashboardArtistes');
          }
          else if($signin['role'] == 'client'){
            Redirect::to('homeUser');
          }
          else{
            Redirect::to('dashboardAdmin');
          }
      }
      else{
        return false;
      }
      
      
    }
  }

  public function AddContact(){
    if(isset($_POST['submit'])){
      $data = array(
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'subject' => $_POST['subject'],
        'message' => $_POST['message']
      );

      $contact = new UserModal();
      $result = $contact->AddContact($data);
      if($result == 'An Contact has been Delete in the list'){
        Redirect::to('home');
        // header('location: home');
      }
      else{
        echo $result;
      }
    }
  }
    
}

?>