<?php

if(!empty($_POST)){

include '../models/BDDconnexion.php';

$user=connexion(trim($_POST['pseudo']));

if($user!==false AND password_verify(trim($_POST['password']),$user['hashedPassword'])){

    session_start();
    $_SESSION['userID']=$user['id_vendeur'];
    var_dump($_SESSION);

    /*header('location:../controllers/pageConnecté.php');
    exit;*/


}  


}




require '../views/connexion.phtml';


?>