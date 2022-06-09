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
        'image' => $_FILES['image']['name'],
        // 'image' => $_POST['image'],
        'title' => $_POST['title'],
        'price' => $_POST['price'],
        'description' => $_POST['description'],
      );
      // var_dump[$data];



      // if(isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK){
      //   $info->getimagesize($_FILES['image']['tmp_name']);
      //   $allowedTypes = [IMAGETYPE_JPEG => '.jpg',IMAGETYPE_PNG => '.png'];
      //   if($info === false){
      //     header('location: Postuler'); 
      //   }
      //   else if(!array_key_exists($info[2],$allowedTypes)){
      //     header('location: Postuler');
      //   }
      //   else{
      //     $path = getcwd().DIRECTORY_SEPARATOR. 'image' .DIRECTORY_SEPARATOR;
      //     $filename = uniqid().$allowedTypes[$info[2]];
      //     move_upload_file($_FILES['image']['tmp_name'], $path.$filename);
      //   }
      // } 


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
}