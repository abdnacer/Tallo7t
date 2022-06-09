<?php

class Artistes{

  public function getAll(){
    $stmt = DB::connect()->prepare("SELECT * FROM `order` ORDER BY date_order DESC");
    $stmt->execute();
    return $stmt->fetchAll();
    $stmt->close();
    $stmt = null;
  }
}