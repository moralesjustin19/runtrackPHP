<?php
// Création des variables de types primitifs
$boolVar = true; // Boolean
$intVar = 42; // Entier
$stringVar = "Bonjour, LaPlateforme!"; // Chaîne de caractères
$floatVar = 3.14; // Nombre à virgule flottante

// Tableau contenant les informations des variables
$variables = [
    ['type' => 'Boolean', 'nom' => '$boolVar', 'valeur' => $boolVar ? 'true' : 'false'],
    ['type' => 'Entier', 'nom' => '$intVar', 'valeur' => $intVar],
    ['type' => 'Chaîne de caractères', 'nom' => '$stringVar', 'valeur' => $stringVar],
    ['type' => 'Nombre à virgule flottante', 'nom' => '$floatVar', 'valeur' => $floatVar],
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des variables</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1>Tableau des variables</h1>
    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($variables as $var): ?>
                <tr>
                    <td><?= htmlspecialchars($var['type']) ?></td>
                    <td><?= htmlspecialchars($var['nom']) ?></td>
                    <td><?= htmlspecialchars($var['valeur']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
