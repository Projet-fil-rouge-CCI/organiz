<?php

include '../models/BDDdevisDetails.php';

$tabDevis=getFacture(($_SESSION['idsoc']));


if(!empty($_POST)){


ajout(trim($_POST['titre']),trim($_POST['quantite']),trim($_POST['prix']),($_POST['tva']),($_POST['devis']));



}



require '../views/devisDetails.phtml';


?>