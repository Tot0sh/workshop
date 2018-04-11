<?php
if(!isset($_SESSION["profil"])) header("Location: index.php?page=login");

$projects = array();

$stmt = $con->prepare('SELECT * FROM projet');
$stmt->execute();

while ($project = $stmt->fetchObject()) {
	array_push($projects, $project);
}

$stmt->closeCursor();

require_once(dirname(__FILE__).'/../views/'.$_GET["page"].'.php');