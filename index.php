<?php
session_start();

require_once('app/views/includes/header.php');

if(!isset($_SESSION['profil']) || !empty($_SESSION['profil']))
{
	$_GET['page'] = 'login';
}
else if (!empty($_GET['page']) && is_file('app/controllers/'.$_GET['page'].'.php'))
{
	$_GET['page'] = 'accueil';
}
else $_GET['page'] = '404';

require_once('app/controllers/'.$_GET['page'].'.php');
require_once('app/views/includes/footer.php');