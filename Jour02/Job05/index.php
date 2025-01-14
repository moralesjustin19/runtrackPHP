<?php
// Fonction pour vérifier si un nombre est premier
function isPrime($number) {
    // Un nombre inférieur à 2 n'est pas premier
    if ($number < 2) {
        return false;
    }
    // Vérification des diviseurs de 2 à la racine carrée du nombre
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false; // Le nombre n'est pas premier
        }
    }
    return true; // Le nombre est premier
}

// Parcours des nombres de 2 à 1000
for ($i = 2; $i <= 1000; $i++) {
    // Vérification avec isset() pour vérifier si la fonction est définie
    if (isset($i) && isPrime($i)) {
        echo "$i<br>"; // Affiche le nombre premier avec un retour à la ligne
    }
}
?>