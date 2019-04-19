<?php 
require 'connect.php';
require 'db.php';
?>

<!DOCTYPE html>
<html lang ="fr">
<head>
	<meta charset="utf-8">
	<title>Mobile first</title>

	<meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1">
	<link  rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/reset.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">	
	<link rel="shortcut.icon" type="img" href="assets/img/favicon.png">


</head>
<body id="home">
		<header >
			<h1>CHEZ KEV&JUJU</h1>
		</header>

	<div class="wrapper">

		
		<header >
		
		</header>
	<section class="row">   
	     <form>
	     	<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=bieres;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM bieres');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
<article class="col-10-offset-1 col-sm-5 offset-0  col-md-4  col-lg-4 ">
				<h2 class="col-10 offset-1 col-sm-10 col-md-3  col-lg-10 text-center"><?php echo $donnees['nom']; ?></h2><br />
				<img class="col-4 offset-3 col-sm-3 col-md-3  col-lg-3 w-100" src="<?php echo $donnees['img']; ?>" alt="<?php echo $donnees['img']; ?>" style=max-width:50% height:auto/><br />
				<p class="col-10 offset-1 col-sm-10 col-md-10  col-lg-10 text-justify"><?php echo $donnees['description']; ?></p><br />
				<p class="col-10 offset-1 col-sm-10 col-md-10  col-lg-10 text-center"><?php echo $donnees['prixttc']; ?>€</p>
 
 </article>
<?php
 }	?>     	
	     </form>

       


		
	
			

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