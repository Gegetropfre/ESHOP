<?php

// FICHIER DE FONCTIONS UTILES

// SIGNUP

function checkExists($field, $param, $pdo) {
    // Vérifier si le nom et l'email ne sont pas déjà en BDD
    $sql = "SELECT * FROM users WHERE $field = ?";
    $stmt = $pdo->prepare($sql);
    $result = $stmt->execute([$param]);
    
    // operateur ternaire = autre maniere de faire if else ...
    return ($stmt->rowCount() > 0) ? true : false;
}
