<?php

  class Admin{
    public function getArtistes(){
      $artistes = 'artiste';
      $stmt = DB::connect()->prepare('SELECT * FROM `signup` WHERE role = :role ');
      $stmt->bindParam(':role', $artistes);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
      // $stmt->close();
      $stmt = null;
    }    
    
    public function getClient(){
      $clients = 'client';
      $stmt = DB::connect()->prepare('SELECT * FROM `signup` WHERE role = :role ');
      $stmt->bindParam(':role', $clients);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
      // $stmt->close();
      $stmt = null;
    } 
    
    public function getAll(){
      $stmt = DB::connect()->prepare("SELECT * FROM `post`");
      $stmt->execute();
      $get = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $get;
      $stmt = null;
    }

    public function getContact(){
      $stmt = DB::connect()->prepare('SELECT * FROM `contact`');
      $stmt->execute();
      $get = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $get;
      $stmt = null;
    }
  }
?>