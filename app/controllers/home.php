<?php
if(!isset($_SESSION["profil"])) header("Location: index.php?page=login");

$statut = get_class(unserialize($_SESSION["profil"]));

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

			$stmt = $con->prepare('SELECT * FROM project WHERE');
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