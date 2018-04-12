<?php

$listContributor = array();

$stmt = $con->prepare('SELECT * FROM user WHERE id_Type_User = 2');
$stmt->execute();

while ($contributor = $stmt->fetchObject()) {
	array_push($listContributor, $contributor);
}

$stmt->closeCursor();

// --------------------------------

if(isset($_POST["submit"])) {

	$errors = array();

	if(isset($_POST["title"])) {
		$temp_title = htmlspecialchars(substr(trim($_POST["title"]), 0, 50));
		if(empty($temp_title)) $errors['title'] = 'Le champ est vide';
		else $title = $temp_title;
	}
	else $errors['title'] = 'Le champ est vide';

	if(isset($_POST["description"])) {
		$temp_description = htmlspecialchars(substr(trim($_POST["description"]), 0, 500));
		if(empty($temp_description)) $errors['description'] = 'Le champ est vide';
		else $description = $temp_description;
	}
	else $errors['description'] = 'Le champ est vide';

	if(isset($_POST["max"])) {
		$temp_max = (int) htmlspecialchars(substr(trim($_POST["max"]), 0, 2));
		if($temp_max <= 0) $errors['max'] = 'Doit être supérieur à 0';
		else if($temp_max > 100) $errors['max'] = 'Doit être inférieur à 100';
		else $max = $temp_max;
	}
	else $errors['max'] = 'Le champ est vide';

	if(isset($_POST["token"])) {
		$temp_token = (int) htmlspecialchars(substr(trim($_POST["token"]), 0, 2));
		if($temp_token <= 0) $errors['token'] = 'Doit être supérieur à 0';
		else if($temp_token > 100) $errors['token'] = 'Doit être inférieur à 100';
		else $token = $temp_token;
	}
	else $errors['token'] = 'Le champ est vide';

	if(isset($_POST["school"])) {
		$temp_school = htmlspecialchars(substr(trim($_POST["school"]), 0, 1));
		if(empty($temp_school) || $temp_school == '') $errors['school'] = 'Aucun choix selectionné';
		else $school = $temp_school;
	}
	else $errors['school'] = 'Aucun choix selectionné';

	if(isset($_POST["year"])) {
		$temp_year = htmlspecialchars(substr(trim($_POST["year"]), 0, 1));
		if(empty($temp_year) || $temp_year == '') $errors['year'] = 'Aucun choix selectionné';
		else $year = $temp_year;
	}
	else $errors['year'] = 'Aucun choix selectionné';

	if(isset($_POST["group"])) {
		$temp_group = htmlspecialchars(substr(trim($_POST["group"]), 0, 1));
		if(empty($temp_group) || $temp_group == '') $errors['group'] = 'Aucun choix selectionné';
		else $group = $temp_group;
	}
	else $errors['group'] = 'Aucun choix selectionné';

	if(isset($_POST["contributors"])) {
		$contributors = $_POST["contributors"];
	}
	else $errors['contributors'] = 'Aucun choix selectionné';

	if(empty($errors)) {
		$stmt = $con->prepare('INSERT INTO project (title, description, nbToken, classe, annee, groupe, maxNbPerson)
		VALUES (:title, :description, :nbToken, :classe, :annee, :groupe, :maxNbPerson)');
		$stmt->bindValue(':title', $title, PDO::PARAM_STR);
		$stmt->bindValue(':description', $description, PDO::PARAM_STR);
		$stmt->bindValue(':nbToken', $token, PDO::PARAM_INT);
		$stmt->bindValue(':classe', $school, PDO::PARAM_INT);
		$stmt->bindValue(':annee', $year, PDO::PARAM_INT);
		$stmt->bindValue(':groupe', $group, PDO::PARAM_INT);
		$stmt->bindValue(':maxNbPerson', $max, PDO::PARAM_INT);
		$stmt->execute();
		$lastId = $stmt->lastInsertId(); 
		$stmt->closeCursor();

		// $stmt = $con->prepare('INSERT INTO inclure (id, id_Project)
		// VALUES (:id, :id_Project)');
		// $stmt->bindValue(':id', $lastId, PDO::PARAM_INT);
		// $stmt->bindValue(':id_Project', $, PDO::PARAM_STR);
		// $stmt->execute();
		// $stmt->closeCursor();

		header("Location: index.php?page=home");
	}
}

require_once(dirname(__FILE__).'/../views/'.$_GET["page"].'.php');