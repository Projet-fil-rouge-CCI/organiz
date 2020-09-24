<?php




if(!empty($_POST)){

    var_dump($_POST);


include '../models/BDDinscription.php';


$idSoc = infoSociete(trim($_POST['nomSociete']),trim($_POST['adresse']),trim($_POST['phoneSociete']));

inscritpion(trim($_POST['nom']),trim($_POST['prenom']),trim($_POST['reference']),trim($_POST['phone']),trim($_POST['mail']),password_hash(trim($_POST['password']),PASSWORD_BCRYPT),$idSoc);

  header('location:../controllers/connexion.php');
    exit;


};



require '../views/inscription.phtml';





?>