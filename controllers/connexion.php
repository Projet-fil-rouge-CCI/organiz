<?php

if(!empty($_POST)){

include '../models/BDDconnexion.php';

$user=connexion(($_POST['pseudo']));

if($user!==false AND password_verify($_POST['password'].'toto',$user['hashedPassword'])){

    session_start();
    $_SESSION['userID']=$user['id_vendeur'];
    $_SESSION['socName']=$user['socName'];
    $_SESSION['idsoc']=$user['idsoc'];
    var_dump($_SESSION);

    header('location:../controllers/pageConnectée.php');
    exit;


}  


}




require '../views/connexion.phtml';


?>