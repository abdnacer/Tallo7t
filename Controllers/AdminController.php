<?php
  include('Models/admin.php');

  class adminController{
    public function getArtistes(){
      $dataArtistes = new Admin();
      $dataArtistes = $dataArtistes->getArtistes();
      return $dataArtistes;
    }
    
    public function getClient(){
      $dataClient = new Admin();
      $dataClient = $dataClient->getClient();
      return $dataClient;
    }

    public function getAllPost(){
      $result = new Admin();
      $result = $result->getAll();
      return $result;
    }

    public function getContact(){
      $contact = new Admin();
      $result = $contact->getContact();
      return $result;
    }
  }
?>