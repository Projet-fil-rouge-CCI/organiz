<?php

require ('../models/BBDvueFacture.php');

$vueFacture=vueFacture(($_GET['id_facture']));
$vueDetailsFacture=vueDetailsFacture(($_GET['id_facture']));

/*var_dump($vueFacture);
var_dump($vueDetailsFacture);*/

include ('../views/vueFacture.phtml');

?>