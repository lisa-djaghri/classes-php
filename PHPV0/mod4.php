<?php

$role = "x";

if ($role == "admin") {
    echo "Accès complet autorisé <br>";
}
elseif ($role == "éditeur") {
    echo "Accès limité aux modifications  <br>";
}
elseif ($role == "visiteur") {
    echo "Accès lecture seule  <br>";
}
else {
    echo "Rôle inconnu  <br>";
}

// SWITCH 

switch ($role) {
    case "admin":
        echo "Accès complet autorisé";
        break;
    case "éditeur":
        echo "Accès limité aux modifications";
        break;
    case "visiteur":
        echo "Accès lecture seule";
        break;
    default:
        echo "Rôle inconnu";
}
?>
<br>
<?php
// EXERCICE 2
$jour = "Samedi";

switch ($jour) {
    case "Lundi":
    case "Mardi":
    case "Mercredi":
    case "Jeudi":
    case "Vendredi":
        echo "Jour ouvré";
        break;
    case "Samedi":
    case "Dimanche":
        echo "Week-end";
        break;
    default:
        echo "Vacances";
}
?>
<br>
<!-- EXERCICE 3 -->
<?php
$status = "livrée";
$message = match ($status) {
    "en cours" => "Votre commande est en cours de traitement.",
    "expédiée" => "Votre commande a été expédiée.",
    "livrée" => "Votre commande a été livrée.",
    "annulée" => "Votre commande a été annulée.",
    default => "Statut inconnu",
};
echo $message;
?>
<br>
<!-- EXERCICE 4 -->
<?php
$temperature = 21;
$message = $temperature <= 10 ? "Froid" : ($temperature >= 20 ? "Chaud" : "Doux");
echo $message;
?>
<!-- EXERCICE 5 -->
<br>
<?php

$size = "L";
const TAUX_TVA = 0.20;

switch ($size) {
    case "S":
        $prixHT = 10;
        break;
        case "M":
         $prixHT = 12;
        break;
        case "L":
         $prixHT = 14;
        break;
        case "XL":
         $prixHT = 16;
        break;
        default:
        echo "Taille inconnue";
        exit();
        }

$prixTTC = (($prixHT * TAUX_TVA) + $prixHT);
$message = "Le prix du t-shirt Taille $size est de $prixTTC € TTC ($prixHT € HT + 20% TVA).";
echo $message;
?>
