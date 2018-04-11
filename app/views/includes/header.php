<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Workshop</title>
		<link rel="stylesheet" href="css/style.css"/>
		<script type="text/javascript" src="js/vendors/jquery.js"></script>
		<script type="text/javascript" src="js/vendors/bootstrap.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</head>
	<body>	

		<header class="mb-5">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="?page=home">
					<img src="images/logo-mini.svg" height="30" width="30" class="d-inline-block align-top mr-2"/>
					<span class="font-weight-bold">WORKSHOP</span>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<?php if(isset($_SESSION["profil"]) AND !empty($_SESSION["profil"])): ?>

					<div class="collapse navbar-collapse" id="navbarText">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item active">
								<a class="nav-link" href="?page=home">Accueil</a>
							</li>
						</ul>

						<div class="btn-group mr-3" role="group">
							<a href="?page=profil" class="btn btn-outline-primary" data-toggle="tooltip" data-delay='{"show":"1000"}' title="Profil">
								<i class="fas fa-user"></i>
							</a>
							<a href="?page=settings" class="btn btn-outline-primary" data-toggle="tooltip" data-delay='{"show":"1000"}' title="Option">
								<i class="fas fa-cog"></i>
							</a>
						</div>

						<a href="?page=logout" class="btn btn-outline-danger" data-toggle="tooltip" data-delay='{"show":"1000"}' title="Déconnexion" >
							<i class="fas fa-sign-out-alt"></i>
						</a>
					</div>

				<?php endif; ?>
			</nav>
		</header>

		<div class="container">