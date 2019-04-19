<?php 
require 'connect.php';
require 'db.php';
require 'header.php';
?>


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
				<p class="col-10 offset-1 col-sm-10 col-md-10  col-lg-10 text-center"><?php echo $donnees['prixttc'];  ?>€</p>
 
 </article>
<?php
 }	?>     	
	     </form>

       


		
	
			

	</section>
	

<?php
require 'footer.php';
?>