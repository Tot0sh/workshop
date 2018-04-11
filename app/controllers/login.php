<?php

if(isset($_SESSION["profil"]) AND !empty($_SESSION["profil"])) header("Location: index.php?page=home");

if(isset($_POST["submit"])) {
	if(isset($_POST["lastname"]) && isset($_POST["password"])) {

		$error = false;

		$lastname = htmlspecialchars($_POST["lastname"]);
		$password = htmlspecialchars($_POST["password"]);

		if(empty(trim($lastname)) || empty(trim($password))) {
			$error = true;
		}

		if(!$error) {
			$stmt = $con->prepare('SELECT * FROM user WHERE lastname = :lastname AND password = :password');
			$stmt->bindValue(':lastname', $lastname, PDO::PARAM_STR);
			$stmt->bindValue(':password', $password, PDO::PARAM_STR);
			$stmt->execute();

			$rep = $stmt->fetchObject();
			$stmt->closeCursor();

			if($rep) {
				$user = new User($rep->firstname, $rep->lastname, $rep->lastname, $rep->password, $rep->type);
				$_SESSION["profil"] = serialize($user);
				header("Location: index.php?page=home");
			}
			else $error = true;
		}
	}
}
	
require_once(dirname(__FILE__).'/../views/'.$_GET["page"].'.php');