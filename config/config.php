<?php

$DB_DNS = 'mysql:host=localhost;dbname=butterfly_db'; // Chaîne de connexion (DSN)
$db_user = "root"; // Nom d'utilisateur MySQL
$db_pass = "";     // Mot de passe MySQL

try {
    // Création d'une nouvelle instance PDO pour se connecter à la base de données
    $pdo = new PDO($DB_DNS, $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Affiche l'erreur si la connexion échoue
    echo "ERREUR  connectionechoue: " . $e->getMessage();
}



// urel racine
define('URLROOT', 'http://localhost/butterfly_photography/public');
