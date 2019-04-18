<?php
require 'config.php';


/* Connexion à une base MySQL avec l'invocation de pilote */
$bdd = 'mysql:dbname='.$dbname.';host='.$dbhost.';charset=UTF8';


try {
    $pdo = new PDO($bdd, $dbuser, $dbpass);
} catch (PDOException $e) {
    echo 'Connexion échouée';
}