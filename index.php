<?php
session_start();

require_once('setup.php');
require_once('app/models/db.class.php');
require_once('app/models/user.class.php');
 
// $db = DB::getInstance($dbDetails);

// $reponse = $db->query('SELECT * FROM user');
// $users = array();

// while ($user = $reponse->fetch()) {
// 	$newUser = new User($user['lastname'], $user['firstname'], $user['email'], $user['password'], $user['type']);
// 	array_push($users, $newUser);
// }

// $reponse->closeCursor();

// foreach ($users as $key => $value) {
// 	echo $value->lastname;
// 	echo $value->firstname;
// 	echo $value->email;
// 	echo $value->password;
// 	echo $value->type;
// 	echo '<br/>';
// }

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