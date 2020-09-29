<?php


session_start();
if(!array_key_exists('userID',$_SESSION)){
	header('location:../controllers/connexion.php');
	exit;
}



define('DATABASE_DSN','mysql:host=localhost;dbname=organiz;charset=utf8');
define('DATABASE_USERNAME', 'root');
define('DATABASE_PASSWORD', '');



function ajout($stock,$titre,$ref,$prix,$id){

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

$query='INSERT INTO stock (stock,nom,num_reference,prix_unitaire,Id_societes) values (:stock,:nom,:ref,:prix,:Id_societes)';
$sth=$dbh ->prepare($query);
$sth->bindValue(':stock',$stock,PDO::PARAM_BOOL);
$sth->bindValue(':nom',$titre,PDO::PARAM_STR);
$sth->bindValue(':ref',$ref,PDO::PARAM_STR);
$sth->bindValue(':prix',$prix,PDO::PARAM_STR);
$sth->bindValue(':Id_societes',$id,PDO::PARAM_INT);
$sth->execute();




}







?>





