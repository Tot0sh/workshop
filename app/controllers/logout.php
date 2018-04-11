<?php
if(!isset($_SESSION["profil"])) header("Location: index.php?page=login");
if (isset($_SESSION))
{
    unset($_SESSION);
    session_unset();
    session_destroy();
}

header('Location: index.php?page=login');