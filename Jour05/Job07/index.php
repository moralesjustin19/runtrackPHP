<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Transformation</title>
    <style>
        .bold { font-weight: bold; }
    </style>
</head>
<body>
    <h1>Transformation de chaîne de caractères</h1>

    <form method="post">
        <label for="text">Chaîne de caractères :</label><br>
        <input type="text" id="text" name="text" required><br><br>

        <label for="transformation">Choisir une transformation :</label><br>
        <select id="transformation" name="transformation" required>
            <option value="gras">Gras (mots commençant par une majuscule)</option>
            <option value="cesar">César (décalage des caractères)</option>
            <option value="plateforme">Plateforme (remplacer les mots finissant par 'me')</option>
        </select><br><br>

        <button type="submit">Valider</button>
    </form>

    <?php
    // Fonction pour mettre les mots commençant par une majuscule en gras
    function applyBold($text) {
        return preg_replace_callback('/\\b[A-Z][a-zA-Z]*\\b/', function ($matches) {
            return '<span class="bold">' . $matches[0] . '</span>';
        }, htmlspecialchars($text));
    }

    // Fonction pour appliquer le chiffrement de César
    function cesarCipher($text, $shift = 2) {
        $result = '';
        $shift = $shift % 26; // Assure un décalage valide
        foreach (str_split($text) as $char) {
            if (ctype_alpha($char)) {
                $offset = ctype_upper($char) ? 65 : 97;
                $result .= chr(($offset + (ord($char) - $offset + $shift) % 26));
            } else {
                $result .= $char;
            }
        }
        return htmlspecialchars($result);
    }

    // Fonction pour remplacer les mots finissant par 'me' par 'me_'
    function plateformeTransform($text) {
        return preg_replace('/\\b(\\w*me)\\b/', '$1_', htmlspecialchars($text));
    }

    // Traitement du formulaire
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $text = $_POST['text'];
        $transformation = $_POST['transformation'];

        echo "<h2>Résultat :</h2>";

        if ($transformation === 'gras') {
            echo "<p>" . applyBold($text) . "</p>";
        } elseif ($transformation === 'cesar') {
            echo "<p>" . cesarCipher($text) . "</p>";
        } elseif ($transformation === 'plateforme') {
            echo "<p>" . plateformeTransform($text) . "</p>";
        }
    }
    ?>
</body>
</html>
