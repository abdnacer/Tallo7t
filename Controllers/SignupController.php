<?php
require('./Modals/SignupModals.php');

class SignupController{
  public function signup(){
    if(isset($_POST['submit'])){
      if($_POST['password'] == $_POST['conferme_password']){
        $data = array(
          'name_complete' => $_POST['name_complete'],
          'username' => $_POST['username'],
          'role' => $_POST['role'],
          'email' => $_POST['email'],
          'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
        );
          $result = new UserModal();
          $result = $result->addUser($data);
          // $result = signupM::addUser($data);
          if($result == 'User is created successfully'){
            header('location: signin');
          }
          else{
            echo $result;
          }
      }
      else{
        echo 'password not matched';
      }

    }
  }

  public function signin(){
    if(isset($_POST['submit'])){
      $data = array(
        'email' => $_POST['email'],
        'password' => $_POST['password'],
      );

      $signin = new UserModal;
      $signin = $signin->getUser($data);
      print_r($signin);

      if($signin['role'] == 'artiste'){
        // header('location: homeArtiste');
        echo 'artiste';
      }
      else{
        echo 'client';
        // header('location: homeUser');
      }
    }
  }
}

?>