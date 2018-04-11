<?php
if(!isset($_SESSION["profil"])) header("Location: index.php?page=login");

$profil = $_SESSION["profil"];

require_once(dirname(__FILE__).'/../views/'.$_GET["page"].'.php');