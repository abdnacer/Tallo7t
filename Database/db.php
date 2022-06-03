<?php
    class DB{
        static public function connect(){
            $db = new PDO("mysql:host=localhost;dbname=tallo7t","root","");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            return $db;
        }
    }
 ?>