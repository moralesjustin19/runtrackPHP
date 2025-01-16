
<?php
var_dump($_GET);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <h1>Formulaire</h1>
    <form method="GET" action="">
        <label for="arg1">Argument 1 :</label>
        <input type="text" id="nom" name="nom" placeholder="Entrez votre nom"><br><br>

        <label for="arg2">Argument 2 :</label>
        <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prenom"><br><br>

        <label for="arg3">Argument 3 :</label>
        <input type="number" id="age" name="age" placeholder="Entrez votre age"><br><br>

        <button type="submit">Envoyer</button>
    </form>

    <h2>Résultat :</h2>
    <?php
    $countArguments = count($_GET);
    echo("Nombre d'arguments GET : $countArguments");
    ?>
</body>
</html>