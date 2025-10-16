<?php
const TAUX_TVA = 0.2;
$prixHT = 1;
$prixTTC = ((TAUX_TVA * $prixHT) + $prixHT);
echo "PrixTTC = $prixTTC €";
?>