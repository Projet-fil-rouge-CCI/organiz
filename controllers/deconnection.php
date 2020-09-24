<?php



    session_start();
    unset($_SESSION['userID']);
	
  
var_dump($_SESSION);



header('location:./accueil.php');
exit;






?>