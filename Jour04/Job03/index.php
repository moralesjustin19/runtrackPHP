<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <h1>Formulaire</h1>
    <form method="POST" action="index.php">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom"><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom"><br><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age"><br><br>

        <button type="submit">Envoyer</button>
    </form> 
    <?php
    $countArguments = count($_POST);
    echo("Nombre d'arguments POST : $countArguments");
    ?>
</body>
</html>