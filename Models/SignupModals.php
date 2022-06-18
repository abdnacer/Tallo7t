<?php

  class UserModal{
    public function verfyEmail($email){
      $stmt = DB::connect()->prepare('SELECT * FROM signup WHERE email = :email');
      $stmt->bindParam(':email', $email['email']);
      $stmt->execute();
      return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function addUser($data){
      $stmt = DB::connect()->prepare('INSERT INTO signup (name_complete, username, role, phone, nationalite, email, password) 
      VALUES (:name_complete, :username, :role, :phone, :nationalite, :email, :password)');
      $stmt->bindParam(':name_complete', $data['name_complete']);
      $stmt->bindParam(':username', $data['username']);
      $stmt->bindParam(':role', $data['role']);
      $stmt->bindParam(':phone', $data['phone']);
      $stmt->bindParam(':nationalite', $data['nationalite']);
      $stmt->bindParam(':email', $data['email']);
      $stmt->bindParam(':password', $data['password']);

      if($stmt->execute()){
        return 'User is created successfully';
      }
      else{
        return 'User was not created successfully';
      }
      // $stmt->close();
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

    public function AddContact($data){
      $user = 'user';
      $stmt = DB::connect()->prepare('INSERT INTO contact (name, email, phone, role, subject, message) 
      VALUES (:name, :email, :phone, :role, :subject, :message)');
      $stmt->bindParam(':name', $data['name']);
      $stmt->bindParam(':email', $data['email']);
      $stmt->bindParam(':phone', $data['phone']);
      $stmt->bindParam(':role', $user);
      $stmt->bindParam(':subject', $data['subject']);
      $stmt->bindParam(':message', $data['message']);

      if($stmt->execute()){
        return 'An Contact has been created in the list';
      }
      else{
        return 'No Contact was created in the list';
      }
      // $stmt->close();
      $stmt = null;
    }
  }
?>