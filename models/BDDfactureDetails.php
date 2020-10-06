<?php


session_start();
if(!array_key_exists('userID',$_SESSION)){
	header('location:../controllers/connexion.php');
	exit;
}



define('DATABASE_DSN','mysql:host=localhost;dbname=organiz;charset=utf8');
define('DATABASE_USERNAME', 'root');
define('DATABASE_PASSWORD', '');

function getFacture($idFact){

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



$query='SELECT * FROM Facture where facture.id_societes=:idsoc';
$sth=$dbh ->prepare($query);
$sth->bindValue(':idsoc',$idFact,PDO::PARAM_STR);
$sth->execute();
$tabFact=$sth->fetchAll();

return $tabFact;
}



function ajout($titre,$quantite,$prix,$tva,$facture,$ref){

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

$query='INSERT INTO facture_details (ref_produit,quantite,prix_unitaire,nom,TVA,Id_facture) values (:ref,:quantite,:prix,:nom,:TVA,:idFacture)';
$sth=$dbh ->prepare($query);
$sth->bindValue(':ref',$ref,PDO::PARAM_STR);
$sth->bindValue(':quantite',$quantite,PDO::PARAM_INT);
$sth->bindValue(':prix',$prix,PDO::PARAM_STR);
$sth->bindValue(':nom',$titre,PDO::PARAM_STR);
$sth->bindValue(':TVA',$tva,PDO::PARAM_STR);
$sth->bindValue(':idFacture',$facture,PDO::PARAM_INT);
$sth->execute();

}








?>
