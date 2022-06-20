<?php

class Artistes
{

  // get Order d'artistes
  public function getAll($data)
  {
    $stmt = DB::connect()->prepare("SELECT * FROM `order` WHERE id_user = :id ORDER BY date_order DESC");
    $stmt->bindParam(':id', $data['id']);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
    // $stmt->close();
    $stmt = null;
  }

  // Count Order
  public function getCountOrder($data)
  {
    $stmt = DB::connect()->prepare('SELECT COUNT(*) FROM `order` WHERE id_user = :id');
    $stmt->bindParam(':id', $data['id']);
    $stmt->execute();
    return $get = $stmt->fetchColumn();
    $stmt = null;
  }

  // Delete des Orders d'artiste
  public function deleteOrder($data)
  {
    $stmt = DB::connect()->prepare('DELETE FROM `order` WHERE id = :id');
    $stmt->bindParam(':id', $data['id']);
    if ($stmt->execute()) {
      return 'An Contact has been Deleted in the list';
    } else {
      return 'No Contact was Deleted in the list';
    }
    // $stmt->close();
    $stmt = null;
  }

  // Cereat Post
  public function addPostModal($data)
  {
    $status = 0;
    $stmt = DB::connect()->prepare('INSERT INTO post (id_user, title, price, description, status, image) 
    VALUES (:id_user, :title, :price, :description, :status, :image)');
    $stmt->bindParam(':id_user',     $data['id_user']);
    $stmt->bindParam(':title',       $data['title']);
    $stmt->bindParam(':price',       $data['price']);
    $stmt->bindParam(':description', $data['description']);
    $stmt->bindParam(':status',      $status);

    if (!file_exists("./image_user/")) {
      mkdir("Public/image_user/");
    }
    $imageData = $_FILES['image'];
    $imageName = $imageData['name'];
    $tempName = $imageData['tmp_name'];
    $folder = "Public/image_user/" . $imageName;
    move_uploaded_file($tempName, $folder);


    $stmt->bindParam(':image', $imageName);

    if ($stmt->execute()) {
      return 'An Post has been created in the list';
    } else {
      return 'No Post was created in the list';
    }
    // $stmt->close();
    $stmt = null;
  }

  // Afiiche Un Post Pour Edite
  public function getOnePost($data)
  {
    $stmt = DB::connect()->prepare('SELECT * FROM `post` WHERE id = :id');
    $stmt->bindParam(':id', $data['id']);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  // Afficher les Posts qu'il a créées
  public function getAllPost($data)
  {
    $stmt = DB::connect()->prepare('SELECT * FROM `post` WHERE id_user = :id');
    $stmt->bindParam(':id', $data['id']);
    $stmt->execute();
    return $stmt->fetchAll();
    // $stmt->close();
    $stmt = null;
  }

  // Pour Insert Update d'Post
  public function updatePost($data){
    $stmt = DB::connect()->prepare(
      'UPDATE `post` SET 
        title       = :title, 
        price       = :price,
        description = :description,
        image       = :imageShow
        WHERE id    = :id'
    );

    $stmt->bindParam(':title',       $data['title']);
    $stmt->bindParam(':price',       $data['price']);
    $stmt->bindParam(':description', $data['description']);
    if(empty($_FILES['imageShow'])){
      echo "1";
      die();
      $data['imageShow'] = $data['image'];
    }
    $imageData = $data['imageShow'];
    $imageName = $imageData['name'];
    $tempName = $imageData['tmp_name'];
    $folder = "Public/image_user/" . $imageName;
    move_uploaded_file($tempName, $folder);

    $stmt->bindParam(':imageShow',   $imageName);
    $stmt->bindParam(':id',          $data['id']);

    if ($stmt->execute()) {
      return 'An Post data has been Update';
    } else {
      return 'No Post User was Update';
    }
    // $stmt->close();
    $stmt = null;
  }


  // Delete Les Posts d'artiste
  public function deletePost($data)
  {
    $stmt = DB::connect()->prepare('DELETE FROM `post` WHERE id = :id');
    $stmt->bindParam(':id', $data['id']);
    if ($stmt->execute()) {
      return 'An Contact has been Deleted in the list';
    } else {
      return 'No Contact was Deleted in the list';
    }
    // $stmt->close();
    $stmt = null;
  }

  // get les Information d'artistes Pour l'Edite
  public function getinfo($data)
  {
    $stmt = DB::connect()->prepare('SELECT * FROM `signup` WHERE id = :id');
    $stmt->bindParam(':id', $data['id']);
    $stmt->execute();
    $get = $stmt->fetch(PDO::FETCH_ASSOC);
    return $get;
    $stmt = null;
  }

  // Edite des Informations D'artiste
  public function update($data)
  {
    $stmt = DB::connect()->prepare(
      'UPDATE `signup` SET 
      name_complete = :name_complete, 
      username = :username, 
      phone = :phone, 
      nationalite = :nationalite,
      email = :email
      WHERE id = :id'
    );

    $stmt->bindParam(':name_complete', $data['name_complete']);
    $stmt->bindParam(':username',      $data['username']);
    $stmt->bindParam(':phone',         $data['phone']);
    $stmt->bindParam(':nationalite',   $data['nationalite']);
    $stmt->bindParam(':email',         $data['email']);
    $stmt->bindParam(':id',            $data['id']);

    if ($stmt->execute()) {
      return 'An User data has been Update';
    } else {
      return 'No data User was Update';
    }
    // $stmt->close();
    $stmt = null;
  }

  // Créer le contact qui envoie l'administrateur
  public function addContact($data)
  {
    $artiste = 'artiste';
    $stmt = DB::connect()->prepare('INSERT INTO contact (name, email, phone, role, subject, message)
    VALUES (:name, :email, :phone, :role, :subject, :message)');
    $stmt->bindParam(':name',    $data['name']);
    $stmt->bindParam(':email',   $data['email']);
    $stmt->bindParam(':phone',   $data['phone']);
    $stmt->bindParam(':role',    $artiste);
    $stmt->bindParam(':subject', $data['subject']);
    $stmt->bindParam(':message', $data['message']);

    if ($stmt->execute()) {
      return 'An Contact has been created in the list';
    } else {
      return 'No Contact was created in the list';
    }
    // $stmt->close();
    $stmt = null;
  }
}
