<?php




if(!empty($_POST)){

    var_dump($_POST);


include '../models/BDDinscription.php';

inscritpion(trim($_POST['nom']),trim($_POST['prenom']),trim($_POST['reference']),trim($_POST['phone']),trim($_POST['mail']),password_hash(trim($_POST['password']),PASSWORD_BCRYPT));


infoSociete(trim($_POST['nomSociete']),trim($_POST['adresse']),trim($_POST['phoneSociete']));

};



require '../views/inscription.phtml';





?>