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
          'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
          'pass' => $_POST['password'],
        );
          $result = new UserModal();
          $result = $result->addUser($data);
          if($result == 'User is created successfully'){
            header('location: signin');
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
        // $_SESSION['username'] = $signin['username'];
        // $_SESSION['email'] = $signin['email'];
        // $_SESSION['phone'] = $signin['phone'];
        // $_SESSION['nationalite'] = $signin['nationalite'];
        if($signin['role'] == 'artiste'){
          header('location: dashboardArtistes');
        }
        else if($signin['role'] == 'client'){
          header('location: homeUser');
        }
        else{
          header('location: dashboardAdmin');
        }
      }
      else{
        return false;
      }
      
    }
  }

  public function getInfoSetting($datainfo){
    if(isset($datainfo)){
      $data = array(
        'id' => $datainfo
      );
      $setting = new UserModal();
      $setting = $setting->getinfo($data);
      return $setting;
    }
  }

  public function updateUser(){
    if(isset($_POST['update'])){
      if(!empty($_POST['password'])){
        $data = array(
          'id'            => $_POST['id'],
          'name_complete' => $_POST['name_complete'],
          'username'      => $_POST['username'],
          'phone'         => $_POST['phone'],
          'nationalite'   => $_POST['nationalite'],
          'email'         => $_POST['email'],
          'password'      => password_hash($_POST['password'], PASSWORD_DEFAULT),
          'pass'          => $_POST['password'],
        );
        $updateSetting = new UserModal();
        $updateSetting = $updateSetting->update($data);
        
        if($updateSetting == 'An User data has been Update'){
          header('location: Settings');
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

  // public function getImage(){
  //   // 
  // }
}

?>