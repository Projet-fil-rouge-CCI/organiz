<?php

require ('../models/BBDvueFacture.php');

$vueFacture=vueFacture(($_GET['id_facture']));
$vueDetailsFacture=vueDetailsFacture(($_GET['id_facture']));
$nameSoc=nomSociete(($_SESSION['idsoc']));


$tvaTotal=0;
$THT=0;
$TTC=0;



 foreach ($vueDetailsFacture as $details){ 



    $tvaTotal=$tvaTotal+$details['montantTVA'];
    $THT=$THT+$details['prixTotal'];
    $TTC=$TTC+$details['prixTTC'];




 }



/*var_dump($vueFacture);

var_dump($nameSoc);*/

var_dump($vueDetailsFacture);


include ('../views/vueFacture.phtml');

?>