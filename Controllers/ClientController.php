<?php

  include('./Models/Clients.php');

  class ClientController{

    public function getAllPost(){
      $result = new Client();
      $result = $result->getAll();
      return $result;
    }

    public function addOrder(){
      if(isset($_POST['submit'])){
        $data = array(
          'id'           => $_POST['id'],
          'id_Post'      => $_POST['id_Post'],
          'name_complet' => $_POST['name_complet'],
          'cin'          => $_POST['cin'],
          'ville'        => $_POST['ville'],
          'address'      => $_POST['address'],
          'code_postale' => $_POST['code_postale'],
          'phone'        => $_POST['phone'],
        );
        $result = new Client();
        $resultPost = $result->addOrder($data);
        
        if($resultPost == 'An Order has been created in the list'){
          header('location: homeUser');
        }
        else{
          echo $result;
        }
      }
    }

    public function getInfoSetting($datainfo){
      if(isset($datainfo)){
        $data = array(
          'id' => $datainfo
        );
        $setting = new Client();
        $setting = $setting->getinfo($data);
        return $setting;
      }
    }

    public function updateClient(){
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
          $updateSetting = new Client();
          $updateSetting = $updateSetting->update($data);
          
          if($updateSetting == 'An User data has been Update'){
            header('location: profilClient');
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

?>