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
        <label for="username">Username :</label>
        <input type="text" id="username" name="username"><br><br>

        <label for="password">Password :</label>
        <input type="text" id="password" name="password"><br><br>

        <button type="submit">Envoyer</button>
    </form> 

    <?php
    $username = $_POST["username"];
    $password = $_POST["password"];
    if ($username == "John" && $password == "Rambo") {
        echo "<p>C’est pas ma guerre<p>";
    } 
    else {
        echo "<p>Votre pire cauchemar<p>";
    }
    ?>
</body>
</html>