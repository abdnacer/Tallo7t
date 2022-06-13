<?php

  class UserModal{
    public function verfyEmail($email){
      $stmt = DB::connect()->prepare('SELECT * FROM signup WHERE email = :email');
      $stmt->bindParam(':email', $email['email']);
      $stmt->execute();
      return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function addUser($data){
      $stmt = DB::connect()->prepare('INSERT INTO signup (name_complete, username, role, phone, nationalite, email, password, pass) 
      VALUES (:name_complete, :username, :role, :phone, :nationalite, :email, :password, :pass)');
      $stmt->bindParam(':name_complete', $data['name_complete']);
      $stmt->bindParam(':username', $data['username']);
      $stmt->bindParam(':role', $data['role']);
      $stmt->bindParam(':phone', $data['phone']);
      $stmt->bindParam(':nationalite', $data['nationalite']);
      $stmt->bindParam(':email', $data['email']);
      $stmt->bindParam(':password', $data['password']);
      $stmt->bindParam(':pass', $data['pass']);

      if($stmt->execute()){
        return 'User is created successfully';
      }
      else{
        return 'User was not created successfully';
      }
      $stmt->close();
      $stmt = null;
    }

    public function getUser($data){
      $stmt = DB::connect()->prepare('SELECT * FROM signup WHERE email = :email');
      $stmt->bindParam(':email', $data['email']);
      $stmt->execute();
      $get = $stmt->fetch(PDO::FETCH_ASSOC);
      $stmt = null;
      return $get;
      // $stmt->close();
    }

    public function getinfo($data){
      // $id = $data['id'];
      $stmt = DB::connect()->prepare('SELECT * FROM `signup` WHERE id = :id');
      $stmt->bindParam(':id', $data['id']);
      $stmt->execute();
      $get = $stmt->fetch(PDO::FETCH_ASSOC);
      return $get;
      $stmt = null;
    }

    public function update($data){
      $stmt = DB::connect()->prepare('UPDATE `signup` SET 
        name_complete = :name_complete, 
        username = :username, 
        phone = :phone, 
        nationalite = :nationalite,
        email = :email, 
        password = :password,
        pass = :pass
        WHERE id = :id'
        );

      $stmt->bindParam(':name_complete', $data['name_complete']);
      $stmt->bindParam(':username',      $data['username']);
      $stmt->bindParam(':phone',         $data['phone']);
      $stmt->bindParam(':nationalite',   $data['nationalite']);
      $stmt->bindParam(':email',         $data['email']);
      $stmt->bindParam(':password',      $data['password']);
      $stmt->bindParam(':pass',          $data['pass']);
      $stmt->bindParam(':id',            $data['id']);

      if($stmt->execute()){
        return 'An User data has been Update';
      }
      else{
        return 'No data User was Update';
      }
      $stmt->close();
      $stmt = null;
    }
  }
?>