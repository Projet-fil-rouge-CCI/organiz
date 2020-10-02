<?php


session_start();
if(!array_key_exists('userID',$_SESSION)){
	header('location:../controllers/connexion.php');
	exit;
}



define('DATABASE_DSN','mysql:host=localhost;dbname=organiz;charset=utf8');
define('DATABASE_USERNAME', 'root');
define('DATABASE_PASSWORD', '');


$query='SELECT * FROM Facture where facture.id_societes=idsoc';
$sth->fetchAll();



function ajout($titre,$quantite,$prix,$tva){

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

$query='INSERT INTO facture_details (quantite,prix_unitaire,nom,TVA) values (:quantite,:prix,:nom,:TVA)';
$sth=$dbh ->prepare($query);
$sth->bindValue(':quantite',$quantite,PDO::PARAM_INT);
$sth->bindValue(':prix',$prix,PDO::PARAM_STR);
$sth->bindValue(':nom',$titre,PDO::PARAM_STR);
$sth->bindValue(':TVA',$tva,PDO::PARAM_STR);
$sth->execute();

}








?>
