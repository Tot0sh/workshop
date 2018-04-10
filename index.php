<?php
session_start();

try
{
	//$bdd = new PDO('mysql:host=localhost;dbname=dbtest;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

include('app/views/includes/header.php');
 
if (!empty($_GET['page']) && is_file('controllers/'.$_GET['page'].'.php'))
{
    include('app/controllers/'.$_GET['page'].'.php');
}
else
{
    include('app/controllers/accueil.php');
}
 
include('app/views/includes/footer.php');