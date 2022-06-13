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
  }
?>