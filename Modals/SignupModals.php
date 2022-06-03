<?php

  class UserModal{
    public function addUser($data){
      $stmt = DB::connect()->prepare('INSERT INTO signup (name_complete, username, role, email, password) 
      VALUES (:name_complete, :username, :role, :email, :password)');
      $stmt->bindParam(':name_complete', $data['name_complete']);
      $stmt->bindParam(':username', $data['username']);
      $stmt->bindParam(':role', $data['role']);
      $stmt->bindParam(':email', $data['email']);
      $stmt->bindParam(':password', $data['password']);
      // $stmt->bindParam(':conferme_password', $data['conferme_password']);

      if($stmt->execute()){
        return 'User is created successfully';
      }
      else{
        return 'User was not created successfully';
      }
      $stmt->close();
      $stmt = null;
    }

    public function getUser(){
      $stmt = DB::connect()->prepare('SELECT * FROM signup WHERE email = ":email" AND password = ":password"');
      $stmt->execute();
      $stmt->fetchAll();
      $stmt->close();
      $stmt = null;
    }
  }
?>