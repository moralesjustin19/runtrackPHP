<?php
// Creation de chaîne de caractères
$str = "Dans l'espace, personne ne vous entend crier";

// Initialisation du compteur à 0
$compteur = 0;

// Parcours de chaque caractère de la chaîne
for ($i = 0; $i < strlen($str); $i++) {
    $compteur++;
}

// Affichage du nombre de caractères
echo "Le nombre de caractères dans la chaîne est: " . $compteur;
?>

