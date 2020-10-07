<?php

require ('../models/BBDvueFacture.php');

$vueFacture=vueFacture(($_GET['id_facture']));
$vueDetailsFacture=vueDetailsFacture(($_GET['id_facture']));
$nameSoc=nomSociete(($_SESSION['idsoc']));



$add=0;

 foreach ($vueDetailsFacture as $details){ 

if($details['TVA']>0 && $details['TVA']=20.0){

    ++$add;

}


 }



/*var_dump($vueFacture);

var_dump($nameSoc);*/

var_dump($vueDetailsFacture);


include ('../views/vueFacture.phtml');

?>