<?php

require ('../models/BBDvueFacture.php');

$vueFacture=vueFacture(($_SESSION['idsoc']));

var_dump($vueFacture);

include ('../views/vueFacture.phtml');

?>