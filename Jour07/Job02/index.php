<?php
// Nom du cookie
$cookieName = "nbvisites";

// Vérifie si le cookie existe
if (isset($_POST['reset'])) {
    // reinitialisation de nombre de visites 
    setcookie($cookieName, 0, time() + 365 * 24 * 60 * 60); // 1 an de validité
    $visits = 0;
} else {
    // augmente le nombre de visites quand le site est visité
    $visits = isset($_COOKIE[$cookieName]) ? (int)$_COOKIE[$cookieName] : 0;
    $visits++;
    setcookie($cookieName, $visits, time() + 365 * 24 * 60 * 60); // 1 an de validité
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de visites</title>
</head>
<body>
    <h1>Compteur de visites</h1>
    <p>Vous avez visité cette page <strong><?php echo $visits; ?></strong> fois.</p>

    <form method="post">
        <button type="submit" name="reset">Réinitialiser le compteur</button>
    </form>
</body>
</html>
