<?php

require ('../models/BBDvueFacture.php');

$vueFacture=vueFacture(($_SESSION['idsoc']));



include ('../views/vueFacture.phtml');

?>