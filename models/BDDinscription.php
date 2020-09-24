<?php


define('DATABASE_DSN', 'mysql:host=localhost;dbname=organiz;charset=utf8');
define('DATABASE_USERNAME','root');
define('DATABASE_PASSWORD', '');

function inscritpion(string $nom,$prenom,$ref,$telephone,$email,$hashedpassword,$idSoc ){


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
$query='INSERT INTO vendeur(nom,prenom,ref_vendeur,email,telephone,hashedPassword,id_societes) VALUES (:nom,:prenom,:ref,:email,:tel,:hashedPassword,:idSoc)';
$sth=$dbh ->prepare($query);
$sth->bindValue(':nom',$nom,PDO::PARAM_STR);
$sth->bindValue(':prenom',$prenom,PDO::PARAM_STR);
$sth->bindValue(':ref',$ref,PDO::PARAM_STR);
$sth->bindValue(':tel',$telephone,PDO::PARAM_STR);
$sth->bindValue(':email',$email,PDO::PARAM_STR);
$sth->bindValue(':idSoc',$idSoc,PDO::PARAM_INT);
$sth->bindValue(':hashedPassword',$hashedpassword,PDO::PARAM_STR);
$sth->execute();




};


function infoSociete(string $nom,$adresse,$telephone){


  
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
$query='INSERT INTO societes(nom,adresse,telephone) VALUES (:nom,:adresse,:tel)';
$sth=$dbh ->prepare($query);
$sth->bindValue(':nom',$nom,PDO::PARAM_STR);
$sth->bindValue(':adresse',$adresse,PDO::PARAM_STR);
$sth->bindValue(':tel',$telephone,PDO::PARAM_STR);
$sth->execute();

return $dbh->lastInsertId();


};





?>