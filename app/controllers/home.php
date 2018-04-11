<?php
if(!isset($_SESSION["profil"])) header("Location: index.php?page=login");

require_once(dirname(__FILE__).'/../views/'.$_GET["page"].'.php');