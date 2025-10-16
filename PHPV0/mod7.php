<?php
function hello() {
    echo "Hello World! <br>";
}
hello ();

// EXERCICE 2

function afficherEtoile($nbr) {
    for ($i = 0; $i < $nbr; $i++) {
        echo "*";
    }
    echo "<br>";
}

for ($i = 1; $i <= 5; $i++) {
    afficherEtoile($i);
}

// EXERCICE 3

function calculImpots($revenu) {
    $impot = 0;
    if ($revenu > 50000) {
    $impot += ($revenu - 50000) * 0.35;
    $revenu = 50000;
}
    if ($revenu > 35000) {
    $impot += ($revenu - 35000) * 0.25;
    $revenu = 35000;
}
    if ($revenu > 20000) {
    $impot += ($revenu - 20000) * 0.18;
    $revenu = 20000;
}
    if ($revenu > 10000) {
    $impot += ($revenu - 10000) * 0.10;
    $revenu = 0000;
}
return $impot;
}

 echo calculImpots(16000) . " €<br>";
 echo calculImpots(38000) . " €<br>";
 echo calculImpots(64000) . " €<br>";

//  EXERCICE 4

$classe = [
    [
        "prenom" => "Lucie",
        "maths" => 12,
        "francais" => 14,
        "histoire" => 9
    ],
    [
        "prenom" => "Yann",
        "maths" => 8,
        "francais" => 10,
        "histoire" => 7
    ],
    [
        "prenom" => "Sophie",
        "maths" => 16,
        "francais" => 13,
        "histoire" => 15
    ]
];

/* function calculMoyenne($eleve) {
        foreach ($classe as $eleve) {
            $notes = [$eleve["maths"], $eleve["francais"], $eleve["histoire"]];
     $total = array_sum($notes);
     $moyenne = round($total / count($notes), 2);

     if ($moyenne > 10) {
        $mention = "Admis";
     }
     else {
        $mention = "Rejeté";
     }

 echo $eleve["prenom"] . " a obtenu une moyenne de " . $moyenne . "/20 et est donc " . $mention . "<br>";
    }
}

echo calculMoyenne($eleve); */

function calculMoyenne($tableau) {

    if(!isset($tableau["maths"]) && !isset($tableau["francais"]) && !isset($tableau["histoire"])) {
        echo "Il manque des notes";
       return;
    }

    $notes = [$tableau["maths"], $tableau["francais"], $tableau["histoire"]];
    $total = array_sum($notes);
    return round($total / count($notes), 2);

}

function estAdmis($nbr) {
    return ($nbr > 10) ? "Admis" : "Rejeté";
}

function affichage($classe) {
    foreach($classe as $eleve) {
    $moyenne = calculMoyenne($eleve);
    $mention = estAdmis($moyenne);

    echo $eleve["prenom"] . " a obtenu une moyenne de " . $moyenne . "/20 et est donc " . $mention . "<br>";
    }
}

affichage($classe);

// EXERCICE 5

function afficherPairs($debut, $fin, $type) {
    for ($i = $debut; $i <= $fin; $i++) {
    if ($type === "pair" && $i % 2 == 0) {
         echo $i . " ";
                }
    if ($type === "impair" && $i % 2 != 0) {
         echo $i . " ";
                }
}
}

afficherPairs(7, 99, "pair");
"<br>";
afficherPairs(59, 169, "impair");

// EXERCICE 6

function affichertable($nbr) {
    for ($num = 0; $num <= 10; $num++) {
        $total = $nbr * $num;
        echo $nbr . " x " . $num . " = " . $total . "<br>";
    }
}
affichertable(7);