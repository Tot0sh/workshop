<?php
session_start();

require_once('setup.php');

function chargerClasse($className){
    require_once 'app/models/'.$className.'.class.php';
}

spl_autoload_register('chargerClasse');
 
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