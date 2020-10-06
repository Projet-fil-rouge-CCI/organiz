<?php

require ('../models/BBDvueFacture.php');

$vueFacture=vueFacture(($_GET['id_facture']));
$vueDetailsFacture=vueDetailsFacture(($_GET['id_facture']));
$nameSoc=nomSociete(($_SESSION['idsoc']));

/*var_dump($vueFacture);
var_dump($vueDetailsFacture);
var_dump($nameSoc);*/


include ('../views/vueFacture.phtml');

?>