<?php
// Création de la chaîne de caractères
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

// Parcours de la chaîne
for ($i = 0; $i < strlen($str); $i += 2) {
    // Affiche le caractère à l'indice courant
    echo $str[$i];
}
?>