<?php 
require 'connect.php';
require 'db.php';
require 'header.php';
?>


    
<div class="container">
 <h1>Vos coordonnées</h1>  

    <form action="traitement.php" method="post">

	    <p>
            <label for="mail">Courriel</label> : <br/>
            <input type="email" name="mail" id="mail" required placeholder="utilisateur@domaine.fr">
        </p>
        <p>C'est votre adresse mail qui vous servira d'identifiant.</p>
        <p>
            <label for="mdp">Mot de Passe</label> : <br/>
            <input type="text" name="mdp" id="mdp" required>
            
        </p>
        <p>
            <label for="nom">Nom</label> : <br/>
            <input type="text" name="nom" id="nom" required>
            
        </p>
        <p>
            <label for="prenom">Prénom</label> : <br/>
            <input type="text" name="prenom" id="prenom" required>
        </p>
        <p>
            <label for="addresse">Adresse</label> : <br/>
            <input type="text" name="adresse" id="adresse" required>
            
        </p>
        <p>
            <label for="addresse">Complément d'adresse</label> : <br/>
            <input type="text" name="complement" id="complement">
            
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
        
      
    </form>

       
        


        <input type="submit" value="Envoyer">

<?php        
       
    $sql = ' INSERT INTO `client` (`id`, `mail`, `mdp`, `nom`, `prenom`, `adresse`, `complement`, `cp`, `ville`, `pays`, `tel`) VALUES (NULL, :mail, :mdp, :nom, :prenom, :prenom, :adresse, :complement, :cp, :ville, :pays, :tel)';

    $query = $pdo->prepare($sql);
    $query->execute();
   


?>       

</body>

<?php
require 'footer.php';
?>
    

