<?php

include '../models/BDDfacture.php';



if(!empty($_POST)){

ajoutFacture(($_POST['num']),($_POST['datePaiement']),($_POST['dateEmission']),($_POST['commentaire']),($_POST['adresseLivraison']),($_POST['adresseFacturation']));



}



require '../views/facture.phtml';


?>