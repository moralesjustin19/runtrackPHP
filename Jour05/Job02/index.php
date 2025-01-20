<?php
function bonjour($jour) {
    if ($jour) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}

// Exemples d'appels de la fonction
bonjour(true);  // Affiche "Bonjour"
echo "<br>";    // Saut de ligne
bonjour(false); // Affiche "Bonsoir"
?>
