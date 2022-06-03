<?php
require_once './autoload.php';
require_once './controllers/homeController.php';
// require_once './Views/alert.php';

 $home = new homeController();

 $pages = [
    'home', 
    'signup',
    'signin',
    'homeUser',
    'homeArtiste'];
   
        if(isset($_GET['page'])){
            if(in_array($_GET['page'],$pages)){
            $page = $_GET['page'];
            $home->index($page);
            }else {
            include('views/includes/404.php');
            }
         }else{
            $home->index('home');
         }
?>