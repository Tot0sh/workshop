<?php

$contributors = array();

$stmt = $con->prepare('SELECT * FROM user WHERE id_Type_User = 2');
$stmt->execute();

while ($contributor = $stmt->fetchObject()) {
	array_push($contributors, $contributor);
}

$stmt->closeCursor();

// --------------------------------

if(isset($_POST["submit"])) {

	$title = htmlspecialchars($_POST["title"]);
	$description = htmlspecialchars($_POST["description"]);
	$token = htmlspecialchars($_POST["token"]);
	$school = htmlspecialchars($_POST["school"]);
	$year = htmlspecialchars($_POST["year"]);
	$group = htmlspecialchars($_POST["group"]);

	$stmt = $con->prepare('INSERT INTO project (title, description, nbToken) VALUES (:title, :description, :nbToken)');
	$stmt->bindValue(':title', $title, PDO::PARAM_STR);
	$stmt->bindValue(':description', $description, PDO::PARAM_STR);
	$stmt->bindValue(':nbToken', $token, PDO::PARAM_INT);
	$stmt->execute();
	$stmt->closeCursor();
}

require_once(dirname(__FILE__).'/../views/'.$_GET["page"].'.php');