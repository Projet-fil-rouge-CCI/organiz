<?php

require ('../models/BBDvueFacture.php');

$vueFacture=vueFacture(($_GET['id_facture']));
$vueDetailsFacture=vueDetailsFacture(($_GET['id_facture']));
$nameSoc=nomSociete(($_SESSION['idsoc']));
$add=0;

/*var_dump($vueFacture);

var_dump($nameSoc);*/

var_dump($vueDetailsFacture);


include ('../views/vueFacture.phtml');

?>