<?php
session_start();

if (isset($_POST['add-name'])) {
    $name = trim($_POST['name']);
    if (!empty($name)){
        if (!isset($_SESSION['prenoms'])){
            $_SESSION['prenoms'] = [];
        }
        $_SESSION['prenoms'][] = $name;    
    }
}

if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];
}

$prenoms = $_SESSION['prenoms'] ?? [];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des prénoms</title>
</head>
<body>
    <h1>Ajouter des prénoms</h1>
    <form method="post">
        <label for="name">Prénom :</label>
        <input type="text" id="name" name="name" required>
        <button type="submit" name="add_name">Ajouter</button>
        <button type="submit" name="reset">Réinitialiser</button>
    </form>

    <h2>Liste des prénoms :</h2>
    <?php if (!empty($prenoms)): ?>
        <ul>
            <?php foreach ($prenoms as $prenom): ?>
                <li><?php echo htmlspecialchars($prenom); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Aucun prénom ajouté pour le moment.</p>
    <?php endif; ?>
</body>
</html>