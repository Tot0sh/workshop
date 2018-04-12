<?php
if(!isset($_SESSION["profil"])) header("Location: index.php?page=login");

// Contient le type de l'User 'Manager/Student/Contributor'
$statut = get_class(unserialize($_SESSION["profil"]));

// Contient l'objet User
$objUser = unserialize($_SESSION["profil"]);

	switch ($statut) {
		case 'Manager':
			$projects = array();

			$stmt = $con->prepare('SELECT * FROM project');
			$stmt->execute();

			while ($project = $stmt->fetchObject()) {
				array_push($projects, $project);
			}

			$stmt->closeCursor();
			break;

		case 'Contributor' :

			break;

		case 'Student':
			$projects = array();

			$stmt = $con->prepare('SELECT * FROM project WHERE classe = :school AND annee = :year AND groupe = :group');
			$stmt->bindValue(':school', $objUser->school, PDO::PARAM_STR);
			$stmt->bindValue(':year', $objUser->year, PDO::PARAM_STR);
			$stmt->bindValue(':group', $objUser->group, PDO::PARAM_STR);
			$stmt->execute();

			while ($project = $stmt->fetchObject()) {
				array_push($projects, $project);
			}

			$stmt->closeCursor();
			break;
		default:

			break;
	}

require_once(dirname(__FILE__).'/../views/'.$_GET["page"].'.php');