<?php 
require 'connect.php';
require 'db.php';

if (!empty($_POST)) {
        $id_mail = $_POST['mail'];
        $id_mail2 = $_POST['mail2'];
        $id_mdp = $_POST['mdp'];
        $id_mdpverif = $_POST['mdpverif'];
        $id_nom = $_POST['nom'];
        $id_prenom = $_POST['prenom'];
        $id_adresse = $_POST['adresse'];
        $id_complement = $_POST['complement'];
        $id_cp = $_POST['cp'];
        $id_ville = $_POST['ville'];
        $id_pays = $_POST['pays'];
        $id_tel = $_POST['tel'];

            if ($id_mail === $id_mail2)
            {
                 if(strlen($id_mdp) <= 10 && strlen($id_mdp) >= 5)
                {
                    if($id_mdp === $id_mdpverif)
                    {
                    $id_mdp = password_hash($id_mdp, PASSWORD_BCRYPT);

                        $sql = "INSERT INTO client (mail, mdp, nom, prenom, adresse, complement, cp, ville, pays, tel) VALUES (:mail, :mdp, :nom, :prenom, :adresse, :complement, :cp, :ville, :pays, :tel)";
                        $query = $pdo->prepare($sql);
                        $query->execute([
                            ":mail"         =>  $id_mail,
                            ":mdp"          =>  $id_mdp,
                            ":nom"          =>  $id_nom,
                            ":prenom"       =>  $id_prenom,
                            ":adresse"      =>  $id_adresse,
                            ":complement"   =>  $id_complement,
                            ":cp"           =>  $id_cp,
                            ":ville"        =>  $id_ville,
                            ":pays"         =>  $id_pays,
                            ":tel"          =>  $id_tel
                        ]);
                        
                    }       
                        else           
                    {
                        echo "Vos mots de passe ne correspondent pas !";
                    }
           
                }
                    else
                {
                    echo "Votre mot de passe ne fait pas la longueur souhaitée !";
                }
            }
            else
            {
                echo "Vos adresses mails ne correspondent pas !";
            }
                       
           

            
    

}

?>           

<?php
require 'header.php';            
?>

<div class=container align= "center">
    <h1>Vos coordonnées</h1>  <br/>

    <form action="" method="post">
        
        <p>C'est votre adresse mail qui vous servira d'identifiant.</p>
        <table align="center">             
            <tr>
                <td> 
                    <label for="mail">Email :</label> <br/>
                    <input type="email" name="mail" id="mail" required placeholder="utilisateur@domaine.fr">
                </td>
            </tr>
            <tr>
               <td> 
                    <label for="mail2">Confirmation Email :</label> <br/>
                    <input type="email" name="mail2" id="mail2" required placeholder="confirmez votre email">
                </td>
            </tr>
            <tr>
               <td> 
                    <label for="mdp">Mot de Passe  (mot de passe contenant entre 5 et 10 charactères dont au moins une majuscule et un chiffre) :</label> <br/>
                    <input type="password" name="mdp" id="mdp" required >
                </td>
            </tr>
            <tr>
               <td> 
                    <label for="mdpverif">Vérification du Mot de Passe :</label> <br/>
                    <input type="password" name="mdpverif" id="mdpverif" required>
                </td>
            </tr>
            <tr>
               <td> 
                <label for="nom">Nom :</label> <br/>
                <input type="text" name="nom" id="nom" required>
                </td>
            </tr>
            <tr>
               <td> 
                    <label for="prenom">Prénom :</label> <br/>
                    <input type="text" name="prenom" id="prenom" required>
                </td>
            </tr>
            <tr>
               <td> 
                    <label for="adresse">Adresse :</label> <br/>
                    <input type="text" name="adresse" id="adresse" required>
                </td>
            </tr>
            <tr>
               <td> 
                    <label for="complement">Complément d'adresse :</label> <br/>
                    <input type="text" name="complement" id="complement">
                </td>
            </tr>
            <tr>
               <td> 
                    <label for="cp">Code postal :</label> <br/>
                    <input type="text" name="cp" id="cp">
                </td>
            </tr>
            <tr>
               <td> 
                    <label for="ville">Ville :</label> <br/>
                    <input type="text" name="ville" id="ville" required>
                </td>
            </tr>
            <tr>
               <td> 
                    <label for="pays">Pays :</label> <br/>
                    <input type="text" name="pays" id="pays" required>
                </td>
            </tr>
            <tr>
               <td> 
                    <label for="tel">Téléphone :</label> <br/>
                    <input type="text" name="tel" id="tel">
                </td>
            </tr>
            <tr>
                <td>   
                    <input type="submit" name="devenirmembre" value="Je deviens membre">
                </td>
            </tr>
        </table>


      
    </form>


<?php
require 'footer.php';  
?>