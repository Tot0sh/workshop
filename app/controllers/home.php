<?php
if(!isset($_SESSION["profil"])) header("Location: index.php?page=login");

$projects = array();

$stmt = $con->prepare('SELECT * FROM project');
$stmt->execute();

while ($project = $stmt->fetchObject()) {
	array_push($projects, $project);
}

$stmt->closeCursor();

$statut = get_class(unserialize($_SESSION["profil"]));

require_once(dirname(__FILE__).'/../views/'.$_GET["page"].'.php');