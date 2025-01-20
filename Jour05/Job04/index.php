<?php
function calcule($nombre1, $operation, $nombre2) {
    switch ($operation) {
        case '+':
            return $nombre1 + $nombre2;
        case '-':
            return $nombre1 - $nombre2;
        case '*':
            return $nombre1 * $nombre2;
        case '/':
            if ($nombre2 != 0) {
                return $nombre1 / $nombre2;
            } else {
                return "Erreur : division par zéro";
            }
        case '%':
            if ($nombre2 != 0) {
                return $nombre1 % $nombre2;
            } else {
                return "Erreur : division par zéro";
            }
        default:
            return "Erreur : opération non reconnue";
    }
}

// Exemples d'utilisation
echo calcule(10, '+', 5); // Affiche 15
echo "<br>";
echo calcule(10, '-', 5); // Affiche 5
echo "<br>";
echo calcule(10, '*', 5); // Affiche 50
echo "<br>";
echo calcule(10, '/', 2); // Affiche 5
echo "<br>";
echo calcule(10, '%', 3); // Affiche 1
echo "<br>";
echo calcule(10, '/', 0); // Affiche "Erreur : division par zéro"
?>
