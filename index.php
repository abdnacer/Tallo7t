<?php
require_once './autoload.php';
require_once './controllers/homeController.php';
// require_once './Views/alert.php';

 $home = new homeController();

 $pages = [
   'home', 
   'signup',
   'signin',
   'dashboardArtistes',
   'Profile',
   'Settings',
   'logout',
   'Postuler',
   'homeUser',
   'addOrder',
   'editePost',
   'SettingClient',
   'profilClient',
   'dashboardAdmin',
   'client',
   'PostArtistes',
   ];

   
      if(isset($_GET['page'])){
         if(in_array($_GET['page'],$pages)){
            $page = $_GET['page'];
            $home->index($page);
         }else {
            include('Views/includes/404.php');
         }
      }else{
         $home->index('home');
      }
?>