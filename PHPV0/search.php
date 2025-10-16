<?php
$nom = $_GET["nom"];

if ($nom === '') {
    echo "Le nom est obligatoire.";
}
else {
    echo "Bonjour $nom !";
}
?>