<?php


session_start();
if(!array_key_exists('userID',$_SESSION)){
	header('location:../controllers/connexion.php');
	exit;
}



define('DATABASE_DSN','mysql:host=localhost;dbname=organiz;charset=utf8');
define('DATABASE_USERNAME', 'root');
define('DATABASE_PASSWORD', '');

function getFacture($idDevis){

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



$query='SELECT * FROM devis where devis.id_societes=:idsoc';
$sth=$dbh ->prepare($query);
$sth->bindValue(':idsoc',$idDevis,PDO::PARAM_STR);
$sth->execute();
$tabDevis=$sth->fetchAll();

return $tabDevis;
}



function ajout($titre,$quantite,$prix,$tva,$devis){

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

$query='INSERT INTO devis_details (quantite,prix_unitaire,nom,TVA,Id_devis) values (:quantite,:prix,:nom,:TVA,:idDevis)';
$sth=$dbh ->prepare($query);
$sth->bindValue(':quantite',$quantite,PDO::PARAM_INT);
$sth->bindValue(':prix',$prix,PDO::PARAM_STR);
$sth->bindValue(':nom',$titre,PDO::PARAM_STR);
$sth->bindValue(':TVA',$tva,PDO::PARAM_STR);
$sth->bindValue(':idDevis',$devis,PDO::PARAM_INT);
$sth->execute();

}








?>