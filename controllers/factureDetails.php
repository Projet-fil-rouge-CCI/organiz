<?php

include '../models/BDDfactureDetails.php';



if(!empty($_POST)){


ajout(trim($_POST['titre']),($_POST['quantite']),($_POST['prix']),($_POST['tva']));


}



require '../views/factureDetails.phtml';


?>