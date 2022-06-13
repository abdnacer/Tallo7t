<?php

class Artistes{

  public function getAll($data){
    $stmt = DB::connect()->prepare("SELECT * FROM `order` WHERE id_user = :id ORDER BY date_order DESC");
    $stmt->bindParam(':id', $data['id']);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
    // $stmt->close();
    $stmt = null;
  }

  public function addPostModal($data){
    $status = 0;
    $stmt = DB::connect()->prepare('INSERT INTO post (id_user, image, title, price, description, status) 
    VALUES (:id_user, :image, :title, :price, :description, :status)');
    $stmt->bindParam(':id_user',     $data['id_user']);
    $stmt->bindParam(':image',       $data['image']); 
    $stmt->bindParam(':title',       $data['title']);
    $stmt->bindParam(':price',       $data['price']);
    $stmt->bindParam(':description', $data['description']);
    $stmt->bindParam(':status',      $status);
    
    if($stmt->execute()){
      return 'An Post has been created in the list';
    }
    else{
      return 'No Post was created in the list';
    }
    $stmt->close();
    $stmt = null;
  }

  public function getAllPost($data){
    $stmt = DB::connect()->prepare('SELECT * FROM `post` WHERE id_user = :id');
    $stmt->bindParam(':id', $data['id']);
    $stmt->execute();
    return $stmt->fetchAll();
    $stmt->close();
    $stmt = null;
  }

  public function getCountOrder($data){
    $stmt = DB::connect()->prepare('SELECT COUNT(*) FROM `order` WHERE id_user = :id');
    $stmt->bindParam(':id', $data['id']);
    $stmt->execute();
    return $get = $stmt->fetchColumn();
    $stmt = null;
  }

  public function getOnePost($data){
    $stmt = DB::connect()->prepare('SELECT * FROM `post` WHERE id = :id');
    $stmt->bindParam(':id', $data['id']);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function updatePost($data){
    $stmt = DB::connect()->prepare('UPDATE `post` SET 
      image =      :image, 
      title =      :title, 
      price =      :price, 
      description = :description
      WHERE id =   :id'
      );

      $stmt->bindParam(':image',       $data['image']);
      $stmt->bindParam(':title',       $data['title']);
      $stmt->bindParam(':price',       $data['price']);
      $stmt->bindParam(':description', $data['description']);
      $stmt->bindParam(':id',          $data['id']);

      if($stmt->execute()){
        return 'An Post data has been Update';
      }
      else{
        return 'No Post User was Update';
      }
      $stmt->close();
      $stmt = null;
  }


}