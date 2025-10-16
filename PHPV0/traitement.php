<?php
$prenom = $_POST["prenom"];

if ($prenom === '') {
    echo "Le prénom est obligatoire.";
}
else {
    echo "Bonjour $prenom !";
}
?>