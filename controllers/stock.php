<?php

include '../models/BDDstock.php';


ajout(trim($_POST['titre']),($_POST['stock']),($_POST['ref']),($_SESSION['userID']),($_POST['prix']));



require '../views/stock.phtml';


?>