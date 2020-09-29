<?php

include '../models/BDDstock.php';

if(!empty($_POST)){

    if((empty($_POST['stock']))){

        $_POST['stock'] = false;
    };

ajout(($_POST['stock']),trim($_POST['titre']),($_POST['ref']),($_POST['prix']),($_SESSION['idsoc']));

var_dump($_POST,$_SESSION);
}
var_dump($_SESSION);
require '../views/stock.phtml';


?>