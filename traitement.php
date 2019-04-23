

<?php  
require 'connect.php';
require 'db.php';
require 'header.php';
 if (isset($_POST['devenirmembre'])) 
{
    $sql = "SELECT * FROM client WHERE `mail`= ?";
        $statement = $pdo->prepare($sql);
        $statement->execute([$mail]);
        $mail = $statement->fetch();{

        if(!$mail){
                if($mail === $mail2){ 
                if(strlen($mdp) <= 10 && strlen($mdp) >= 5){
                        if($mdp === $mdpverif){
                            $mdp = password_hash($mdp, PASSWORD_BCRYPT);
                            


                            if($result){
                                $_SESSION["connect"] = true;
                                $_SESSION["nom"] = $nom;
    {
       
       
                            $sql = "INSERT INTO `client` (`id`, `mail`, `mdp`, `nom`, `prenom`, `adresse`, `complement`, `cp`, `ville`, `pays`, `tel`) VALUES (NULL, ':mail', ':mdp', :nom, :prenom, :prenom, :adresse, :complement, :cp, :ville, :pays, :tel)'";
                            $statement = $pdo->prepare($sql);
                            $result = $statement->execute([
                                ":mail"         =>  $mail,
                                ":mdp"          =>  $mdp ,
                                ":nom"          =>  $nom,
                                ":prenom"       =>  $prenom,
                                ":adresse"      =>  $adresse,
                                "complement"    =>  $complement,
                                ":cp"           =>  $cp,
                                ":ville"        =>  $ville,
                                ":pays"         =>  $pays,
                                ":tel"          =>  $tel]);

    }
    
}

             
?>       


    

<?php
require 'footer.php';
