<?php

  include('./Models/Clients.php');

  class ClientController{

    // Affichage des Post le Client
    public function getAllPost(){
      $result = new Client();
      $result = $result->getAll();
      return $result;
    }

    // Achat De Produit et envoyer un order l'artiste
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
          'phone'        => $_POST['phone']
        );
        $result = new Client();
        $resultPost = $result->addOrder($data);
        
        if($resultPost == 'An Order has been created in the list'){
          Redirect::to('homeUser');
          // header('location: homeUser');
        }
        else{
          echo $result;
        }
      }
    }

    // get les Information de Client Pour l'Edite
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

    // Edite des Informations De Client
    public function updateClient(){
      if(isset($_POST['update'])){
          $data = array(
            'id'            => $_POST['id'],
            'name_complete' => $_POST['name_complete'],
            'username'      => $_POST['username'],
            'phone'         => $_POST['phone'],
            'nationalite'   => $_POST['nationalite'],
            'email'         => $_POST['email']
          );
          $updateSetting = new Client();
          $updateSetting = $updateSetting->update($data);
          
          if($updateSetting == 'An User data has been Update'){
            Redirect::to('profilClient');
            // header('location: profilClient');
          }
          else{
            echo $updateSetting;
          }
    }
    }

    // Créer le contact qui envoie l'administrateur
    public function addContact(){
      if(isset($_POST['submit'])){
        $data = array(
          'name' => $_POST['name'],
          'email' => $_POST['email'],
          'phone' => $_POST['phone'],
          'subject' => $_POST['subject'],
          'message' => $_POST['message']
        );

        $contact = new Client();
        $result= $contact->addContact($data);

        if($result == 'An Contact has been created in the list'){
          Redirect::to('homeUser');
          // header('location: homeUser');
        }
        else{
          echo $result;
        }
      }
    }
  }

?>