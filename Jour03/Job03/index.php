<?php
// Création de la chaîne de caractères
$str = "I'm sorry Dave I'm afraid I can't do that";

// Définition des voyelles
$vowels = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];

// Parcours de la chaîne
for ($i = 0; $i < strlen($str); $i++) {
    // Vérifie si le caractère courant est une voyelle
    if (in_array($str[$i], $vowels)) {
        echo $str[$i];
    }
}
?>