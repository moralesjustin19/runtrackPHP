<?php
// Création de la chaîne de caractères
$str = "Les choses que l'on Possede finissent par nous posseder.";

// Parcours de la chaîne à l'envers
for ($i = strlen($str) - 1; $i >= 0; $i--) {
    // Vérifie si le caractère existe avec isset()
    if (isset($str[$i])) {
        echo $str[$i];
    }
}
?>
