<?php

require ('../models/BBDvueDevis.php');

$vueDevis=vueFacture(($_SESSION['idsoc']));

var_dump($vueDevis);

include ('../views/vueDevis.phtml');

?>