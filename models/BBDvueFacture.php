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



$query='SELECT * FROM facture where facture.id_facture=:idfact' ;
$sth=$dbh ->prepare($query);
$sth->bindValue(':idfact',$idFacture,PDO::PARAM_STR);
$sth->execute();

$vueFacture=$sth->fetch();

return $vueFacture;
}





function vueDetailsFacture($idFacture){

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



$query='SELECT *,(quantite*prix_unitaire) AS prixTotal,((quantite*prix_unitaire)*TVA/100) AS montantTVA,(quantite*prix_unitaire)*(TVA/100+1)AS prixTTC  FROM facture_details where facture_details.id_facture=:idfact' ;
$sth=$dbh ->prepare($query);
$sth->bindValue(':idfact',$idFacture,PDO::PARAM_STR);
$sth->execute();

$vueFacture=$sth->fetchAll();

return $vueFacture;
}


function nomSociete($nameSoc){

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



$query='SELECT nom FROM societes where Id_societes=:nomSoc' ;
$sth=$dbh ->prepare($query);
$sth->bindValue(':nomSoc',$nameSoc,PDO::PARAM_STR);
$sth->execute();

$nameSoc=$sth->fetch();

return $nameSoc;
}






?>