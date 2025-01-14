<?php
// Vérification avec isset()
if (!isset($start)) {
    $start = 0; // Début de l'intervalle si la variable n'est pas définie
}

// Parcours des nombres de 0 à 1337
for ($i = $start; $i <= 1337; $i++) {
    if ($i === 42) {
        // Affiche 42 en gras et souligné
        echo "<strong><u>$i</u></strong><br>";
    } else {
        // Affiche les autres nombres normalement
        echo "$i<br>";
    }
}
?>