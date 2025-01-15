<?php
// Création de la chaîne de caractères
$str = "On n est pas le meilleur quand on le croit mais quand on le sait";

// Initialisation du dictionnaire pour compter les voyelles et les consonnes
$dic = ["voyelles" => 0, "consonnes" => 0];

// Définition des voyelles
$vowels = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];

// Parcours de la chaîne
for ($i = 0; $i < strlen($str); $i++) {
    // Vérifie si le caractère existe avec isset() et est une lettre
    if (isset($str[$i]) && ctype_alpha($str[$i])) {
        // Vérifie si le caractère est une voyelle
        if (in_array($str[$i], $vowels)) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
}

// Affichage des résultats dans un tableau HTML
echo "<table border='1' style='border-collapse: collapse; text-align: center;'>";
echo "<thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead>";
echo "<tbody>";
echo "<tr><td>{$dic['voyelles']}</td><td>{$dic['consonnes']}</td></tr>";
echo "</tbody>";
echo "</table>";
?>
