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
  }
?>