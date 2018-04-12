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

				$flag = false;
				$statut = 'student';
				$stmt = $con->prepare('SELECT * FROM student WHERE id = :id');
				$stmt->bindValue(':id', $rep->id_Type_User, PDO::PARAM_INT);
				$stmt->execute();

				var_dump($stmt->rowCount());

				if($stmt->rowCount() != 1) {
					$statut = 'contributor';
					$stmt = $con->prepare('SELECT * FROM contributor WHERE id = :id');
					$stmt->bindValue(':id', $rep->id_Type_User, PDO::PARAM_INT);
					$stmt->execute();

					if($stmt->rowCount() != 1) {
						$statut = 'manager';
						$stmt = $con->prepare('SELECT * FROM manager WHERE id = :id');
						$stmt->bindValue(':id', $rep->id_Type_User, PDO::PARAM_INT);
						$stmt->execute();

						if($stmt->rowCount() != 1) echo "???";
						else $flag = true;
					}
					else $flag = true;
				}
				else $flag = true; 

				if($flag) {

					$rep = $stmt->fetchObject();
					$stmt->closeCursor();

					switch ($statut) {
						case 'student':
							$user = new Student($rep->firstname, $rep->lastname, "Epsi", 3, 2);
							break;
						case 'contributor':
							$user = new Contributor($rep->firstname, $rep->lastname, "superpass", "Électronique");
							break;
						case 'manager':
							$user = new Manager($rep->firstname, $rep->lastname, "superpass");
							break;
						default:
							echo "???";
							break;
					}
					$_SESSION["profil"] = serialize($user);
					header("Location: index.php?page=home");
				}
			}
			else $error = true;
		}
	}
}
	
require_once(dirname(__FILE__).'/../views/'.$_GET["page"].'.php');