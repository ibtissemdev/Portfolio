<?php

/**
 * Retourne une connexion à la base de donnée
 * @return PDO
 */
function getPdo() : PDO {
    $pdo = new PDO('mysql:host=localhost;dbname=backoffice;charset=utf8', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    return $pdo;
}


?>
