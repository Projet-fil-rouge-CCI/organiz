<?php


session_start();
if(!array_key_exists('userID',$_SESSION)){
	header('location:../controllers/connexion.php');
	exit;
}



define('DATABASE_DSN','mysql:host=localhost;dbname=organiz;charset=utf8');
define('DATABASE_USERNAME', 'root');
define('DATABASE_PASSWORD', '');




function ajoutFacture($num,$datePaiement,$dateEmission,$comm,$adresseLivraison,$adresseFacturation){

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

$query='INSERT INTO facture (numero_facture,date_paiement,date_emission,commentaire,adresse_livraison,adresse_facturation) values (:numero,:date_paiement,:date_emission,:commentaire,:adresse_livraison,:adresse_facturation)';
$sth=$dbh ->prepare($query);
$sth->bindValue(':numero',$num,PDO::PARAM_INT);
$sth->bindValue(':date_paiement',$datePaiement,PDO::PARAM_STR);
$sth->bindValue(':date_emission',$dateEmission,PDO::PARAM_STR);
$sth->bindValue(':commentaire',$comm,PDO::PARAM_STR);
$sth->bindValue(':adresse_livraison',$adresseLivraison,PDO::PARAM_STR);
$sth->bindValue(':adresse_facturation',$adresseFacturation,PDO::PARAM_STR);

$sth->execute();

}




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
