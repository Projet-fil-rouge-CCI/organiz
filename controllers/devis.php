<?php

include '../models/BDDdevis.php';



if(!empty($_POST)){

ajoutDevis(($_POST['num']),($_POST['dateEmission']),($_POST['commentaire']),($_POST['adresseFacturation']),($_SESSION['idsoc']));



}



require '../views/devis.phtml';


?>