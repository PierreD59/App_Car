<?php

try {
    // Connexion √† la BDD et stocker la connectivit√© dans $database
    $database = new PDO('mysql:host=localhost;dbname=appcar;charset=utf8', 'root', '');
} catch (Exception $exception) {
    var_dump($exception);
    exit;
}

return $database;
