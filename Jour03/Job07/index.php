<?php
// Création de la chaîne de caractères
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

// Création d'une variable pour stocker la nouvelle chaîne
$newStr = "";

// Parcours de la chaîne
for ($i = 0; $i < strlen($str); $i++) {
    // Vérifie si le caractère suivant existe avec isset()
    if (isset($str[$i + 1])) {
        // Remplace le caractère actuel par le suivant
        $newStr .= $str[$i + 1];
    } else {
        // Si on est au dernier caractère, remplace par le premier
        $newStr .= $str[0];
    }
}

// Affiche la nouvelle chaîne
echo $newStr;
?>
