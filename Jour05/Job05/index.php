<?php
function occurrences($str, $char) {
    $count = 0;

    // Parcourir la chaîne de caractères
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] === $char) { // Comparaison stricte
            $count++;
        }
    }

    return $count;
}

// Exemple d'utilisation
$str = "Bonjour";
$char = "o";
$result = occurrences($str, $char);

echo "Le nombre d'occurrences de '$char' dans '$str' est : $result";
?>
