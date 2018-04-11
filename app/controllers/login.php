<?php

if(isset($_SESSION["profil"]) AND !empty($_SESSION["profil"])) header("Location: index.php?page=home");

require_once('setup.php');
require_once('app/models/db.class.php');
require_once('app/models/user.class.php');

if(isset($_POST["submit"])) {
	if(isset($_POST["email"]) && isset($_POST["password"])) {

		$error = false;

		$email = htmlspecialchars($_POST["email"]);
		$password = htmlspecialchars($_POST["password"]);

		if(empty(trim($email)) || empty(trim($password))) {
			$error = true;
		}

		if(!$error) {
			$db = DB::getInstance($dbDetails);
			$con = $db->getDbh();

			$stmt = $con->prepare('SELECT * FROM user WHERE email = :email AND password = :password');
			$stmt->bindValue(':email', $email, PDO::PARAM_STR);
			$stmt->bindValue(':password', $password, PDO::PARAM_STR);
			$stmt->execute();

			$rep = $stmt->fetchObject();
			$stmt->closeCursor();

			if($rep) {
				$_SESSION["profil"] = array(
					'firstname' => $rep->firstname, 
					'lastname' => $rep->lastname, 
					'email' => $rep->email, 
					'type' => $rep->type
				);
				header("Location: index.php?page=home");
			}
			else $error = true;
		}
	}
}
	
require_once(dirname(__FILE__).'/../views/'.$_GET["page"].'.php');