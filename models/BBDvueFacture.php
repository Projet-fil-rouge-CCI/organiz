<?php


session_start();
if(!array_key_exists('userID',$_SESSION)){
	header('location:../controllers/connexion.php');
	exit;
}



define('DATABASE_DSN','mysql:host=localhost;dbname=organiz;charset=utf8');
define('DATABASE_USERNAME', 'root');
define('DATABASE_PASSWORD', '');

function vueFacture($idFacture){

	$dbh = new PDO
	(
		DATABASE_DSN,
		DATABASE_USERNAME,
		DATABASE_PASSWORD,
		[
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
		]
	);



$query='SELECT * FROM facture,facture_details where facture.id_societes=:idsoc';
$sth=$dbh ->prepare($query);
$sth->bindValue(':idsoc',$idFacture,PDO::PARAM_STR);
$sth->execute();

$vueFacture=$sth->fetchAll();

return $vueFacture;
}


?>