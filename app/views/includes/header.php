<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Workshop</title>
		<link rel="stylesheet" href="css/style.css"/>
		<script type="text/javascript" src="js/jquery.js"></script>
	</head>
	<body>
		<header class="mb-5">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="?page=accueil">
					<img src="images/logo-mini.svg" height="30" width="30" class="d-inline-block align-top mr-2"/>
					Workshop
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarText">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link <?php if($_GET['page'] == 'accueil') echo ' disabled'; ?>" href="?page=accueil">Accueil <span class="sr-only">(current)</span></a>
						</li>
					</ul>

					<div class="btn-group mr-3" role="group" aria-label="Basic example">
						<button type="button" class="btn">
							<i class="fas fa-user"></i>
						</button>
						<button type="button" class="btn">
							<i class="fas fa-cog fa-lg"></i>
						</button>
					</div>

					<button class="btn btn-outline-danger">
						<i class="fas fa-sign-out-alt fa-lg"></i>
					</button>
				</div>
			</nav>
		</header>

		<div class="container">