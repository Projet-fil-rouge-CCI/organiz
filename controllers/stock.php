<?php

include '../models/BDDstock.php';

if(!empty($_POST)){

ajout(($_POST['stock']),trim($_POST['titre']),($_POST['ref']),($_POST['prix']),($_SESSION['userID']));

var_dump($_POST,$_SESSION);
}
require '../views/stock.phtml';


?>