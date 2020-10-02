<?php


session_start();
if(!array_key_exists('userID',$_SESSION)){
	header('location:../controllers/connexion.php');
	exit;
}



define('DATABASE_DSN','mysql:host=localhost;dbname=organiz;charset=utf8');
define('DATABASE_USERNAME', 'root');
define('DATABASE_PASSWORD', '');




function ajoutFacture($num,$datePaiement,$dateEmission,$comm,$adresseLivraison,$adresseFacturation,$id){

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

$query='INSERT INTO facture (numero_facture,date_paiement,date_emission,commentaire,adresse_livraison,adresse_facturation,Id_societes) values (:numero,:date_paiement,:date_emission,:commentaire,:adresse_livraison,:adresse_facturation,:id)';
$sth=$dbh ->prepare($query);
$sth->bindValue(':numero',$num,PDO::PARAM_INT);
$sth->bindValue(':date_paiement',$datePaiement,PDO::PARAM_STR);
$sth->bindValue(':date_emission',$dateEmission,PDO::PARAM_STR);
$sth->bindValue(':commentaire',$comm,PDO::PARAM_STR);
$sth->bindValue(':adresse_livraison',$adresseLivraison,PDO::PARAM_STR);
$sth->bindValue(':adresse_facturation',$adresseFacturation,PDO::PARAM_STR);
$sth->bindValue(':id',$id,PDO::PARAM_INT);
$sth->execute();

}





?>
