<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <h1>test numero</h1>
    <form method="GET" action="index.php">
        <label for="number">Number :</label>
        <input type="number" id="number" name="number"><br><br>

        <button type="submit">Envoyer</button>
    </form> 

    <?php
    $number = $_GET["number"];
        if ($number % 2 == 0) {
            echo "<p>Nombre pair</p>";
        } else {
            echo "<p>Nombre impair</p>";
        }
    ?>
</body>
</html>