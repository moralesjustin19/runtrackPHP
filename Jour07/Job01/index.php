<?php
// demarrage session
session_start();

if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0; // Réinitialise la variable
} else {
    // Initialise ou incrémente la variable de session
    if (!isset($_SESSION['nbvisites'])) {
        $_SESSION['nbvisites'] = 0; // Première visite
    }
    $_SESSION['nbvisites']++; // Incrémente à chaque visite
}

// Récupère le nombre de visites
$visits = $_SESSION['nbvisites'];
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
