<?php

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-with, initial-scale=1.0">
	<title>Identification</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body id="home">
		<header >
			<h1>CHEZ KEV&JUJU</h1>
		</header>

	<div class="wrapper">

		
		<header >
		
		</header>
		
	<div class="wrapper">
		<section class="login-container">
			<div>
				<header>
					<h2>Identification</h2>
				</header>
				<form action="" method="post">
					<input <?= $errmail ?> type="text" name="mail" placeholder="Email" required="required" />
					<input <?= $errpassword ?> type="password" name="password" placeholder="Mot de passe" required="required" />
					<button type="submit">Connexion</button>
				</form>
			</div>
		</section>
		<nav id="primary_nav">
		
		<ul>
			<li><a href="beer.php">Les bières</a></li>
			<li><a href="login.php">Déjà client</a></li>
			<li><a href="">Mon panier</a></li>
			<li><a href="page.php">Nouveau client</a></li>
			<li><a href="?deconnect=true">Déconnexion</a></li>
			<li class="top"><a href="#home">Top</a></li>
		</ul>

	</nav>
	<footer>

			 <p>L'abus d'alcool est dangereux pour la santé</p>
			 <p>Créé par Christophe K</p>
			 <p>CHEZ KEV&JUJU Marque déposée Tout droit réservé 2019</p>

	</footer>

	</div>
</body>
</html>