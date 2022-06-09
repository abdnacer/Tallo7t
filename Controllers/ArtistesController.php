<?php

include('./Modals/Artistes.php');

class ArtistesController{
  public function getAllArtistes(){
    $artistes = new Artistes();
    $artiste = $artistes->getAll();
    return $artiste;
  }

  public function addPost(){
    if(isset($_POST['addPost'])){
      $data = array(
        'image' => $_POST['image'],
        'title' => $_POST['title'],
        'price' => $_POST['price'],
        'description' => $_POST['description'],
      );

      $result = new Artistes();
      $result = $result->addPostModal($data);
      if($result == 'An Post has been created in the list'){
        header('location: Postuler');
      }
      else{
        echo $result;
      }
    }
  }

  public function getAllPost(){
    $post = new Artistes();
    $post = $post->getAllPost();
    return $post;
  }

  // public function addPicture(){
    
  // }
}