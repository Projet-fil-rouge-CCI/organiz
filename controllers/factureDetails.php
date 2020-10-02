<?php

include '../models/BDDfactureDetails.php';

$tabFact=getFacture(($_SESSION['idsoc']));


if(!empty($_POST)){


ajout(trim($_POST['titre']),trim($_POST['quantite']),trim($_POST['prix']),($_POST['tva']),($_POST['facture']));



}



require '../views/factureDetails.phtml';


?>