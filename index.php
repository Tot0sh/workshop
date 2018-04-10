<?php
session_start();

require_once('setup.php');
require_once('app/models/db.class.php');
require_once('app/models/user.class.php');
 
$db = DB::getInstance($dbDetails);

$reponse = $db->query('SELECT * FROM personne');
$users = array();

while ($personne = $reponse->fetch()) {
	$user = new User($personne['nom'], $personne['prenom']);
	array_push($users, $user);
}

$reponse->closeCursor();

foreach ($users as $key => $value) {
	var_dump($value->nom);
	var_dump($value->prenom);
	echo '<br/>';
}

// -------------------

require_once('app/views/includes/header.php');

if(!isset($_GET['page']))
{
	header('Location: ?page=home');
}

$page = $_GET['page'];

if (is_file('app/controllers/'.$page.'.php'))
{
	$page = $_GET['page'];
}
else $page = '404';
	
require_once('app/controllers/'.$page.'.php');
require_once('app/views/includes/footer.php');