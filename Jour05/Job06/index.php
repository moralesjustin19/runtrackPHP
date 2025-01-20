<?php
function leetSpeak($str) {
    // Tableau associatif des conversions leet speak
    $leet = [
        'a' => '4', 'A' => '4',
        'e' => '3', 'E' => '3',
        'i' => '1', 'I' => '1',
        'o' => '0', 'O' => '0',
        's' => '5', 'S' => '5',
        't' => '7', 'T' => '7',
    ];

    // Parcourir chaque caractère de la chaîne
    $result = "";
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        // Si le caractère existe dans le tableau, on le remplace
        if (array_key_exists($char, $leet)) {
            $result .= $leet[$char];
        } else {
            $result .= $char; // Sinon, on garde le caractère original
        }
    }

    return $result;
}

// Exemple d'utilisation
$phrase = "Hello La Plateforme";
echo leetSpeak($phrase);
?>
