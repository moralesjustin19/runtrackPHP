<?php
// Définir les plages spécifiques dans un tableau associatif
$styles = [
    'italic' => range(0, 20), // Nombres entre 0 et 20 (italique)
    'underline' => range(25, 50), // Nombres entre 25 et 50 (souligné)
];

// Parcours des nombres de 0 à 100
for ($i = 0; $i <= 100; $i++) {
    // Remplacement du nombre 42 par "La Plateforme_"
    if ($i === 42) {
        echo "La Plateforme_<br>";
        continue;
    }

    // Vérification si le nombre doit être affiché en italique
    if (isset($styles['italic']) && in_array($i, $styles['italic'])) {
        echo "<i>$i</i><br>";
        continue;
    }

    // Vérification si le nombre doit être affiché souligné
    if (isset($styles['underline']) && in_array($i, $styles['underline'])) {
        echo "<u>$i</u><br>";
        continue;
    }

    // Affichage normal pour les autres nombres
    echo "$i<br>";
}
?>