<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <h1>test numero</h1>
    <form method="POST" action="index.php">
        <label for="largeur">Largeur :</label>
        <input type="number" id="largeur" name="largeur"><br><br>

        <label for="hauteur">Hauteur :</label>
        <input type="number" id="hauteur" name="hauteur"><br><br>

        <button type="submit">Construire</button>
    </form> 

    <?php
    $largeur = $_POST["largeur"];
    $hauteur = $_POST["hauteur"];
    if ($largeur == 10 && $hauteur == 5) {
        for ($i = 0; $i < $largeur; $i++) {
            echo str_repeat(' ', $largeur - $i - 1);
            echo str_repeat('*', 2 * $i + 1);
            echo "<br>";
        }

        // Génération du corps
        for ($i = 0; $i < $hauteur; $i++) {
            echo '|' . str_repeat(' ', 2 * $largeur - 3) . '|<br>';
        }

        echo "</div>";
    }
    ?>
</body>
</html>