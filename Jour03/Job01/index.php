<?php
// Création du tableau avec les nombres donnés
$numbers = [200, 204, 173, 98, 171, 404, 459];

// Début du tableau HTML
echo "<table border='1' style='border-collapse: collapse; text-align: center;'>";
echo "<tr><th>Nombre</th><th>Parité</th></tr>";

// Parcours du tableau
foreach ($numbers as $number) {
    // Vérification avec isset() pour s'assurer que $number est défini
    if (isset($number)) {
        // Déterminer si le nombre est pair ou impair
        $parity = ($number % 2 === 0) ? "Paire" : "Impaire";

        // Affichage de la ligne du tableau
        echo "<tr><td>$number</td><td>$parity</td></tr>";
    }
}

// Fin du tableau HTML
echo "</table>";
?>