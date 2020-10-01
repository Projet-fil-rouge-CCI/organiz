<?php

include '../models/BDDfactureDetails.php';



if(!empty($_POST)){

ajoutFacture(($_POST['num']),($_POST['datePaiement']),($_POST['dateEmission']),($_POST['commentaire']),($_POST['adresseLivraison']),($_POST['adresseFacturation']));
ajout(trim($_POST['titre']),trim($_POST['quantite']),trim($_POST['prix']),($_POST['tva']));


}



require '../views/factureDetails.phtml';


?>