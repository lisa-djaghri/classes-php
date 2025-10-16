<?php
$villes = ["Monaco", "Nantes", "Bordeaux", "Lille", "Marseille", "Lyon", "Paris", "Lens", "Montpellier", "Dieppe"];
echo $villes[4] . "<br>";
$villes[0] = "Nice";
$villes[] = "Reims";
echo count ($villes) . "<br>";
foreach ($villes as $ville) {
    echo $ville . "<br>";
}
"<br><br>";
// EXERCICE 2

$eleves = [
    "Alice"  => 15,
    "Benoît" => 9,
    "Claire" => 18,
    "David"  => 11
];

$bonEleve = 0;

foreach ($eleves as $prenom => $note) {
    echo "$prenom a obtenu $note/20 <br>";

   if ($note >= 10) {
        $bonEleve++;
   }
}

echo "$bonEleve élèves ont obtenu la moyenne";
?>
<br>
<?php
// EXERCICE 3

$produits = [
    ["nom" => "T-shirt", "prix" => 15, "stock" => 10],
    ["nom" => "Casquette", "prix" => 12, "stock" => 5],
    ["nom" => "Pull", "prix" => 25, "stock" => 8]
];



echo $produits [1]["stock"] . "<br>";

$produits[]=["nom" => "Veste", "prix" => 40, "stock" => 25];

echo $produits[3]["nom"] . $produits[3]["prix"] . $produits[3]["stock"];

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Document</title>
</head>
<body>
     <table>
        <tr>
            <th>Produits</th>
            <th>Prix</th>
            <th>Stock</th>
            <th>CA</th>
</tr>
    <?php
    foreach ($produits as $produit) {
        $CA = ($produit["prix"] * $produit["stock"]);
        echo "<tr>";
        echo "<td>" . $produit["nom"] . "</td>";
        echo "<td>" . $produit["prix"] . "</td>";
        echo "<td>" . $produit["stock"] . "</td>";
        echo "<td>" . $CA . "</td>";
        echo"</tr>";
    };
    ?>
    </table>
</body>
</html>
<br>
<!-- EXERCICE 4 -->
<?php 
$temperatures = [30, 32, 34, 30, 35, 34, 31];
$result = 0;
foreach ($temperatures as $temperature) {
    $result += $temperature;
}
$moyenne =($result) / count($temperatures);  
echo $moyenne . "<br>";
// EXERCICE 5

$commandes = [
    ["client" => "Alice", "montant_ht" => 120, "statut" => "payée"],
    ["client" => "Bob", "montant_ht" => 75,  "statut" => "en attente"],
    ["client" => "Claire", "montant_ht" => 200, "statut" => "payée"],
    ["client" => "David", "montant_ht" => 50,  "statut" => "en attente"]
];
const TAUX_TVA = 0.20;
$CAHT = 0;
foreach ($commandes as $commande) {
$TTC = (($commande["montant_ht"] * TAUX_TVA) + $commande["montant_ht"]);
echo "Commande de " . $commande["client"] . " : " . $commande["montant_ht"] . "€ HT, " . $TTC . "€ TTC - " . $commande["statut"] . "<br>";
$CAHT += $commande["montant_ht"];
$CATTC = ($CAHT * TAUX_TVA) + $CAHT;
}
echo "Chiffre d'affaire HT : " . $CAHT . "€ <br> Chiffre d'affaire TTC : " . $CATTC . "€ <br>";
?>
<?php
// EXERCICE 6

echo "====================================================== <br>" ;

$eleves = [
    "Alice" => [
        "maths" => 15,
        "francais" => 14,
        "anglais" => 13
    ],
    "Bob" => [
        "maths" => 8,
        "francais" => 10,
        "anglais" => 11
    ],
    "Claire" => [
        "maths" => 18,
        "francais" => 17,
        "anglais" => 19
    ]
];

foreach ($eleves as $nom => $valeur) {

$total = array_sum($valeur);
$moyenne = round($total / count($valeur), 2);

if ($moyenne >= 15) {
    $mention = "Excellent ";
}
elseif ($moyenne >= 12) {
    $mention = "Bon travail ";
}
elseif ($moyenne >= 10) {
    $mention = "Peut mieux faire ";
}
else {
    $mention = "Echec ";
}

echo "$nom a obtenu la moyenne de $moyenne : $mention. <br>";
}

$totaux = [
    "maths" => 0,
    "francais" => 0,
    "anglais" => 0
];

$nombreEleves = count($eleves);

foreach ($eleves as $notes) {
    foreach ($notes as $matiere => $note) {
        $totaux[$matiere] += $note;
}
}

foreach ($totaux as $matiere => $somme) {
    $moyenne = $somme / $nombreEleves;
    echo "Moyenne en $matiere : " . round($moyenne, 2) . "<br>";
}
?>