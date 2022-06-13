<?php

include('./Models/Artistes.php');

class ArtistesController{
  public function getAllArtistes($datainfo){
    $data = array(
      'id' => $datainfo
    );
    $artistes = new Artistes();
    $artiste = $artistes->getAll($data);
    return $artiste;
  }

  public function getCountOrder($dataId){
    $data = array(
      'id' => $dataId
    );
    $artistes = new Artistes();
    $artiste = $artistes->getCountOrder($data);
    return $artiste;
  }

  public function addPost($datainfo){
    if(isset($_POST['submit'])){
      $data = array(
        'id_user'     => $datainfo,
        'title'       => $_POST['title'],
        'image'       => $_POST['image'],
        'price'       => $_POST['price'],
        'description' => $_POST['description']
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

  public function getAllPost($datainfo){
    $data = array(
      'id' => $datainfo
    );
    $post = new Artistes();
    $post = $post->getAllPost($data);
    return $post;
  }

  public function deleteOrder(){
    if(isset($_POST['id'])){
      $data = array(
        'id' => $_POST['id']
      );
      $result = new Artistes();
      $result = $result->deleteOrder($data);
      if($result == 'An Order has been Delete in the list'){
        header('location: dashboardArtistes');
      }
      else{
        echo $result;
      }
    }
  }

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

  public function updatePost(){
    if(isset($_POST['update'])){
      $data = array(
        'id'          => $_POST['id'],
        'image'       => $_POST['image'],
        'title'       => $_POST['title'],
        'price'       => $_POST['price'],
        'description' => $_POST['description'],
      );

      $postUpdate = new Artistes();
      $postUpdate = $postUpdate->updatePost($data);
      if($postUpdate == 'An Post data has been Update'){
        header('location: Postuler');
      }
      else{
        echo $postUpdate;
      }
    }
  }

}