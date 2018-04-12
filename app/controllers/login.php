<?php

if(isset($_SESSION["profil"]) AND !empty($_SESSION["profil"])) header("Location: index.php?page=home");

if(isset($_POST["submit"])) {
	if(isset($_POST["login"]) && isset($_POST["password"])) {

		$error = false;

		$login = htmlspecialchars($_POST["login"]);
		$password = htmlspecialchars($_POST["password"]);

		if(empty(trim($login)) || empty(trim($password))) {
			$error = true;
		}

		if(!$error) {
			$stmt = $con->prepare('SELECT * FROM user WHERE login = :login AND password = :password');
			$stmt->bindValue(':login', $login, PDO::PARAM_STR);
			$stmt->bindValue(':password', $password, PDO::PARAM_STR);
			$stmt->execute();

			$rep = $stmt->fetchObject();
			$stmt->closeCursor();

			if($rep) {
				switch ($rep->id_Type_User) {
					case 1:
						$user = new Student($rep->firstname, $rep->lastname, "Epsi", 3, 2);
						break;
					case 2:
						$user = new Contributor($rep->firstname, $rep->lastname, "superpass", "Électronique");
						break;
					case 3:
						$user = new Manager($rep->firstname, $rep->lastname, "superpass");
						break;
					default:
						echo "???";
						break;
				}
				$_SESSION["profil"] = serialize($user);
				header("Location: index.php?page=home");
			}
			else $error = true;
		}
	}
}
	
require_once(dirname(__FILE__).'/../views/'.$_GET["page"].'.php');