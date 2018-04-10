<?php
session_start();

require_once('app/views/includes/header.php');

if(!isset($_GET['page']))
{
	header('Location: ?page=accueil');
}

$page = $_GET['page'];

if (is_file('app/controllers/'.$page.'.php'))
{
	$page = $_GET['page'];
}
else $page = '404';
	
require_once('app/controllers/'.$page.'.php');
require_once('app/views/includes/footer.php');