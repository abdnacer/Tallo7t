<?php

include('./Modals/Artistes.php');

class ArtistesController{
  public function getAllArtistes(){
    $artistes = new Artistes();
    $artiste = $artistes->getAll();
    return $artiste;
  }
}