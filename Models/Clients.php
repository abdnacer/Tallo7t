<?php

  class Client{
    public function getAll(){
      $stmt = DB::connect()->prepare("SELECT * FROM `post`");
      $stmt->execute();
      $get = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $get;
      // $stmt->close();
      $stmt = null;
    }

    public function addOrder($data){
      $status = 1;
      $statusPost = $this->status($status, $data);
      $stmt = DB::connect()->prepare('INSERT INTO `order` (id_user, name_complet, cin, ville, address, code_postale, phone) 
      VALUES (:id_user, :name_complet, :cin, :ville, :address, :code_postale, :phone)');
      $stmt->bindParam(':id_user', $data['id']);
      $stmt->bindParam(':name_complet', $data['name_complet']);
      $stmt->bindParam(':cin', $data['cin']);
      $stmt->bindParam(':ville', $data['ville']);
      $stmt->bindParam(':address', $data['address']);
      $stmt->bindParam(':code_postale', $data['code_postale']);
      $stmt->bindParam(':phone', $data['phone']);
      // $stmt->bindParam(':status', $status);
      if($stmt->execute()){
        return 'An Order has been created in the list';
      }
      else{
        return 'No Order was created in the list';
      }
      $stmt->close();
      $stmt = null;
    }

    public function status($status, $data){
      $stmt = DB::connect()->prepare('UPDATE `post` SET status = :status WHERE id = :id_Post');
      $stmt->bindParam(':status', $status);
      $stmt->bindParam(':id_Post', $data['id_Post']);
      if($stmt->execute()) {
        return true;
      }

      return false;
    }

    public function getinfo($data){
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