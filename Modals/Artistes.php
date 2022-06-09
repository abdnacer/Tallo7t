<?php

class Artistes{

  public function getAll(){
    $stmt = DB::connect()->prepare("SELECT * FROM `order` ORDER BY date_order DESC");
    $stmt->execute();
    return $stmt->fetchAll();
    $stmt->close();
    $stmt = null;
  }

  public function addPostModal($data){
    $stmt = DB::connect()->prepare('INSERT INTO `post`(image, title, price, description) 
    VALUES (:image, :title, :price, :description)');
    $stmt->bindParam(':image', $data['image']);
    $stmt->bindParam(':title', $data['image']);
    $stmt->bindParam(':price', $data['price']);
    $stmt->bindParam(':description', $data['description']);

    if($stmt->execute()){
      return 'An Post has been created in the list';
    }
    else{
      return 'No Post was created in the list';
    }
    $stmt->close();
    $stmt = null;
  }

  public function getAllPost(){
    $stmt = DB::connect()->prepare('SELECT * FROM `post`');
      $stmt->execute();
      return $stmt->fetchAll();
      $stmt->close();
      $stmt = null;
  }
}