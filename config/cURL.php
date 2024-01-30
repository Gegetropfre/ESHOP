<?php 


// on definie l'url cible
$url = 'https://fakestoreapi.com/products';

// on vient initialiser curl
$ch = curl_init($url);

// On met des options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


// On execute la requete avec curl_exec
$resp = curl_exec($ch);


// Si il y a une erreur, on l'affiche, 
// sinon on décode la réponse qui est en json
if ($e = curl_error($ch)){
    var_dump($e);
} else {
    $products = json_decode($resp, true);
}

curl_close($ch);