<?php 
require_once("../user.php");


	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=localhost;dbname=workshop', "root", "");

	$req = $bdd->prepare('SELECT * FROM user');
	//$req->bindValue(':user', $_POST["user"], PDO::PARAM_STR);
	//$req->bindValue(':pass', $_POST["password"], PDO::PARAM_STR);
	$req->execute();


	$res = $req->fetch();
	$unUser = new User($res[0], $res[1], $res[2]);


	var_dump($unUser);

	//echo $unUser->id;


	if($req) {
		
	}


/*foreach ($req as $var) {
	echo $var['id']; 
	echo $var['name'];
	echo $var['password'];
}


echo json_encode($req->fetch());*/




//Where user = :user AND password = :pass