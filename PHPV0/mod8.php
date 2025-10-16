<?php
$chaine = "12,5,abc,32,-7,42";

$tableau = explode(",", $chaine);
var_dump($tableau);

$entiers = [];

foreach ($tableau as $valeur) { 
    if (is_numeric($valeur)){
    var_dump($valeur);
}
$entiers [] = intval($valeur);
}
var_dump($entiers);

var_dump(min($entiers));
var_dump(max($entiers));

$form = [
  "nom" => "   ",
  "age" => "28",
  "email" => ""
];

$champs = ["nom", "age", "email", "city"];

foreach($champs as $champ) {
    if(isset($form[$champ]) && trim($form[$champ]) !== "") {
        
        if($champ === "age") {
            if(!is_numeric($form[$champ]) || $form[$champ] > 0) {
                echo "Le champ $champ est invalide <br>";
                continue;
            }
        } 
    
        echo "Le champ $champ est valide <br>";
        } else {
    echo "Le champ $champ est invalide <br>";
    }
}

/* if(isset($form["nom"]) && trim($form["nom"]) !== "") {
    echo "Le champ nom est valide";
} else {
    echo "Le champ nom est invalide";
}

if(isset($form["age"]) && trim($form["age"]) !== "" && is_numeric($form["age"] && $form["age"] > 0)) {
    echo "Le champ age est valide";
} else {
    echo "Le champ age est invalide";
}

if(isset($form["email"]) && trim($form["email"]) !== "") {
    echo "Le champ email est valide";
} else {
    echo "Le champ email est invalide";
} */

    // EXERCICE 3

$panier = "Stylo:2.5, Cahier:4.25, gomme:abc, Table:42.99, chaise:14.9";
$articles = explode(",", $panier);
foreach ($articles as $article) {
    $details = explode(":", $article);
    $nom = strtolower(trim($details[0]));
    $prix = $details[1];
    
    if (is_numeric($prix)) {
        $produits_valides[$nom] = $prix;
       echo "$nom : $prix - Valide <br>";
    }
    else {
        echo "$nom : $prix - Invalide <br>";
    }
    
    
}
var_dump($produits_valides);
echo "Nombres de produits valide : " . count($produits_valides) . "<br>";
$prixtotal = array_sum($produits_valides);
echo "Prix total du panier : $prixtotal € <br>";

?>