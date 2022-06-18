<?php

include('./Models/Artistes.php');

class ArtistesController{
  // get Order de Artistes
  public function getAllArtistes($datainfo){
    $data = array(
      'id' => $datainfo
    );
    $artistes = new Artistes();
    $artiste = $artistes->getAll($data);
    return $artiste;
  }

  // count des order
  public function getCountOrder($dataId){
    $data = array(
      'id' => $dataId
    );
    $artistes = new Artistes();
    $artiste = $artistes->getCountOrder($data);
    return $artiste;
  }
  
  // creat les posts de artistes 
  public function addPost($datainfo){
    if(isset($_POST['submit'])){
      $data = array(
        'id_user'     => $datainfo,
        'title'       => $_POST['title'],
        'price'       => $_POST['price'],
        'description' => $_POST['description']
      );
      $result = new Artistes();
      $result = $result->addPostModal($data);
      if($result == 'An Post has been created in the list'){
        Redirect::to('Postuler');
        // header('location: Postuler');
      }
      else{
        echo $result;
      }
    }
  }

  // Afficher les Posts qu'il a créées
  public function getAllPost($datainfo){
    $data = array(
      'id' => $datainfo
    );
    $post = new Artistes();
    $post = $post->getAllPost($data);
    return $post;
  }

  // Delete des Orders d'artiste
  public function deleteOrder(){
    if(isset($_POST['id'])){
      $data = array(
        'id' => $_POST['id']
      );
      $result = new Artistes();
      $results = $result->deleteOrder($data);
      if($results == 'An Contact has been Deleted in the list'){
        Redirect::to('dashboardArtistes');
        // header('location: dashboardArtistes');
      }
      else{
        echo $result;
      }
    }
  }

  // Afiiche Un Post Pour Edite
  public function getOnePost(){
    if(isset($_POST['id'])){
      $data = array(
        'id' => $_POST['id']
      );
      $dataPost = new Artistes();
      $dataPost = $dataPost->getOnePost($data);
      return $dataPost;
    }
  }

  // Pour Insert Update d'Artistes
  public function updatePost(){
    if(isset($_POST['update'])){
      $data = array(
        'id'          => $_POST['id'],
        'imageShow'   => $_POST['imageShow'],
        'image'       => $_POST['image'],
        'title'       => $_POST['title'],
        'price'       => $_POST['price'],
        'description' => $_POST['description']
      );

      $postUpdate = new Artistes();
      $postUpdate = $postUpdate->updatePost($data);
      if($postUpdate == 'An Post data has been Update'){
        Redirect::to('Postuler');
        // header('location: Postuler');
      }
      else{
        echo $postUpdate;
      }
    }
  }

  // Delete Les Posts d'artiste
  public function deletePost(){
    if(isset($_POST['delete']) && isset($_POST['id'])){
      $data = array(
        'id' => $_POST['id']
      );
      $result = new Artistes();
      $results = $result->deletePost($data);
      if($results == 'An Contact has been Deleted in the list'){
        Redirect::to('Postuler');
        // header('location: Postuler');
      }
      else{
        echo $result;
      }
    }
  }

  // get les Information d'artistes Pour l'Edite
  public function getInfoSetting($datainfo){
    if(isset($datainfo)){
      $data = array(
        'id' => $datainfo
      );
      $setting = new Artistes();
      $setting = $setting->getinfo($data);
      return $setting;
    }
  }

  // Edite des Informations D'artiste
  public function updateUser(){
    if(isset($_POST['update'])){
        $data = array(
          'id'            => $_POST['id'],
          'name_complete' => $_POST['name_complete'],
          'username'      => $_POST['username'],
          'phone'         => $_POST['phone'],
          'nationalite'   => $_POST['nationalite'],
          'email'         => $_POST['email'],
        );
        $updateSetting = new Artistes();
        $updateSetting = $updateSetting->update($data);
        
        if($updateSetting == 'An User data has been Update'){
          Redirect::to('Profile');
          // header('location: Profile');
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

      $contact = new Artistes();
      $result = $contact->addContact($data);
      if($result == 'An Contact has been created in the list'){
        Redirect::to('dashboardArtistes');
        // header('location: dashboardArtistes');
      }
      else{
        echo $result;
      }
    }
  }

}