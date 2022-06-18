<?php
// require_once 'validateSession.php';
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
   'contactArtiste',
   'logout',
   'Postuler',
   'homeUser',
   'addOrder',
   'editePost',
   'SettingClient',
   'profilClient',
   'contactClient',
   'dashboardAdmin',
   'client',
   'PostArtistes',
   'contactAdmin',
   ];
 
   $sessionValidate = [ 
   'dashboardArtistes',
   'Profile',
   'Settings',
   'contactArtiste',
   'logout',
   'Postuler',
   'homeUser',
   'addOrder',
   'editePost',
   'SettingClient',
   'profilClient',
   'contactClient',
   'dashboardAdmin',
   'client',
   'PostArtistes',
   'contactAdmin'
   ];

   if(isset($_GET['page'])){
      if(in_array($_GET['page'],$pages)){
         if(in_array($_GET['page'],$sessionValidate)){
            if(isset($_SESSION['id'])){
               $home->index($_GET['page']);
            }
            else{
               header('location: signin');
            }
         }
         else{
            $home->index($_GET['page']);
         }
      }
      else{
         include('views/includes/404.php');
      }
   }
   else{
      $home->index('home');
   }
?>