<?php
session_start();
if (isset($_SESSION["connect"])) {
    $connect = $_SESSION["connect"];
}else{
    $connect = false;
}
if($connect){
    header("Location: page.php");
    //fin du traitement
}
if(!empty($_POST)){
    $username = strtolower($_POST["username"]);
    $password = $_POST["password"];
    $passwordVerif = $_POST["password_verif"];
    if (!empty($username) && !empty($password)){
        require_once 'db.php';
        $sql = "SELECT * FROM users WHERE `name`= ?";
        $statement = $pdo->prepare($sql);
        $statement->execute([$username]);
        $user = $statement->fetch();
        
        if(!$user){
            if(strlen($password) <= 10 && strlen($password) >= 5){
                if($password === $passwordVerif){
                    $password = password_hash($password, PASSWORD_BCRYPT);
                    require_once 'db.php';
                    $sql = "INSERT INTO `users` (`name`, `password`) VALUES (:name , :password)";
                    $statement = $pdo->prepare($sql);
                    $result = $statement->execute([
                        ":name"     =>  $username,
                        ":password" =>  $password]);
                    if($result){
                        $_SESSION["connect"] = true;
                        $_SESSION["username"] = $username;
                        header("Location: page.php");
                    }else{
                        die("erreur enregistrement en bdd");
                        // TODO : signaler erreur
                    }
                }else{
                    die("mdp différents");
                    // TODO : signaler que mdp non identiques
                }
            }else{
                // TODO : signaler que mdp est pas d'un bon format
                die("mdp pas bon format");
            }
        }else{
            die("utilisateur existe");
            // TODO : signaler que username existe
        }
    
    }else{
        // TODO : signaler les champs vides
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire d'inscription'</title>
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
                    <h2>Inscription</h2>
                </header>
                <form action="" method="Post">
                    <input type="text" name="username" placeholder="Nom d'utilisateur"  />
                    <input type="password" name="password" placeholder="Mot de passe"  />
                    <input type="password" name="password_verif" placeholder="Confirmez le mot de passe"  />
                    <button type="submit">S'enregistrer</button>
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