<?php

include '../models/BDDfactureDetails.php';



if(!empty($_POST)){


ajout(trim($_POST['titre']),trim($_POST['quantite']),trim($_POST['prix']),($_POST['tva']));


}



require '../views/factureDetails.phtml';


?>