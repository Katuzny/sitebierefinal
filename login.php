<?php 
require 'connect.php';
require 'db.php';
require 'header.php';

if ($connect) {
    header("Location: beer.php");
}
if(!empty($_POST)){
    $id_email = strtolower($_POST["mail"]);
    $id_mdp = $_POST["mdp"];
    if (!empty($id_email) && !empty($password)){
        require_once 'db.php';
        $sql2 = "SELECT * FROM client WHERE `mail`= :mail";
        $state = $pdo->prepare($sql2);
        $state->execute([":mail" => $id_email]);
        $id_usermail = $state->fetch();
        
        if(isset($id_usermail)){
            if (password_verify($password, $usermail["mdp"])){
                    $_SESSION["connect"] = true;
                    $_SESSION["mail"] = $id_email;
                    header("Location: profil.php");
            }else{
                header("HTTP/1.0 403 Forbidden");
                $message = 'Email ou Mot de passe incorrect';
            }
        }else{
            header("HTTP/1.0 403 Forbidden");
            $message = 'Email ou Mot de passe incorrect';
        }
    }else{
        header("HTTP/1.0 403 Forbidden");
        $message = 'Veuillez remplir tous les champs';
    }
}
?>

<section class="form">
    <form method="POST" action="">
        <label for="mail">Adresse mail</label>
        <input type="email" name="mail" required>

        <label for="mdp">Mot de passe</label>
        <input type="password" name="mdp" required>

        <input class="button" type="submit" name="submit" value="Se connecter">
        <p class="deconnect"></p>
    </form>
    <p><a href="newpass.php">Vous avez oublié votre mot de passe ?</a></p>
    <p>Pas encore inscrit ? <a href="inscription.php">Inscrivez-vous</a> !</p>
</section>

<?php
require 'footer.php';
?>


	