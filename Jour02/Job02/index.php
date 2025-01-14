<?php
// Définir les nombres à exclure dans un tableau
$exclusions = [
    26 => true,
    37 => true,
    88 => true,
    1111 => true,
];

// Parcours des nombres de 0 à 1337
for ($i = 0; $i <= 1337; $i++) {
    // Vérifie si le nombre est dans les exclusions avec isset()
    if (isset($exclusions[$i])) {
        continue; // Passe au nombre suivant
    }
    // Affiche le nombre avec un retour à la ligne
    echo "$i<br>";
}
?>