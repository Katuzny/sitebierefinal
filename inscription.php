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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/reset.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"> 
    <link rel="shortcut.icon" type="img" href="assets/img/favicon.png">

</head>
<body id="home">
        <header >
            <h1>CHEZ KEV&JUJU</h1>
        </header>
    
<div class="container">

    <form>
        <h1>Vos coordonnées</h1>
        <p>
            <label for="nom">Nom</label> : <br/>
            <input type="text" name="nom" id="nom" required>
            
        </p>
        <p>
            <label for="prenom">Prénom</label> : <br/>
            <input type="text" name="prenom" id="prenom" required>
        </p>
        <p>
            <label for="addresse">Adressse</label> : <br/>
            <input type="text" name="addresse" id="addresse" required>
            
        </p>
        <p>
            <label for="cp">Code postal</label> : <br/>
            <input type="text" name="cp" id="cp">
        </p>
        <p>
            <label for="ville">Ville</label> : <br/>
            <input type="text" name="ville" id="ville" required>
        </p>
        <p>
            <label for="pays">Pays</label> : <br/>
            <input type="text" name="pays" id="pays" required>
        </p>
        <p>
            <label for="tel">Téléphone</label> : <br/>
            <input type="text" name="tel" id="tel">
        </p>
        <p>
            <label for="courriel">Courriel</label> : <br/>
            <input type="email" name="courriel" id="courriel" required placeholder="utilisateur@domaine.fr">
        </p>
    </form>

        <h1>Bon de commande<h1>

    <table>
        
    <thead>
        <tr>
            <th>Nom de la bière</th>
            <th>Prix HT</th>
            <th>Prix TTC</th>
            <th>Quantité</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($beerArray as $i => $value) : ?>
            <tr>
                <td><p class= "text-center"><?= $value[0] ?></p></td>           
                <td><p class= "text-center">
                <?
                    if ($quantite<=0) :
                        echo "number_format($value[3], 2, ',', '.')";
                    else :
                        echo "number_format($value[3]*$Quantite, 2, ',', '.')"; 
                ?>€</p></td>
                <td><p class="text-center"><?= ttc($beerArray[$i][3])?>€</p></td>
                <td><input type="number" name="quantite" id="quantite"></td>
            </tr>
            
        <?php endforeach; ?>
        
    </tbody>
</table>






    <input type="submit" value="Envoyer">

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







</body>