<?php
// Gestion des cookies
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['prenom'])) {
        // Stocke le prénom dans un cookie valable 7 jours
        setcookie('prenom', $_POST['prenom'], time() + 7 * 24 * 60 * 60);
        header('Location: ' . $_SERVER['PHP_SELF']); // Redirige pour éviter le renvoi du formulaire
        exit;
    } elseif (isset($_POST['deco'])) {
        // Supprime le cookie lors de la déconnexion
        setcookie('prenom', '', time() - 3600); // Cookie expiré
        header('Location: ' . $_SERVER['PHP_SELF']); // Redirige pour rafraîchir l'affichage
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
</head>
<body>
    <?php if (isset($_COOKIE['prenom'])): ?>
        <!-- Si le cookie \"prenom\" existe, on affiche le message de bienvenue -->
        <p>Bonjour <?= htmlspecialchars($_COOKIE['prenom']) ?> !</p>
        <form method="post">
            <button type="submit" name="deco">Déconnexion</button>
        </form>
    <?php else: ?>
        <!-- Sinon, on affiche le formulaire de connexion -->
        <form method="post">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>
            <button type="submit" name="connexion">Connexion</button>
        </form>
    <?php endif; ?>
</body>
</html>
