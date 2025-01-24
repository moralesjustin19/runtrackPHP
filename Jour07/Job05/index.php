<?php
session_start();

if (!isset($_SESSION['board']) || isset($_POST['reset'])) {
    $_SESSION['board'] = array_fill(0, 3, array_fill(0, 3, '-'));
    $_SESSION['currentPlayer'] = 'X';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cell'])) {
    [$row, $col] = explode(',', $_POST['cell']);
    if ($_SESSION['board'][$row][$col] === '-') {
        $_SESSION['board'][$row][$col] = $_SESSION['currentPlayer'];
        $_SESSION['currentPlayer'] = $_SESSION['currentPlayer'] === 'X' ? 'O' : 'X';
    }
}

function checkWinner($board) {
    for ($i = 0; $i < 3; $i++) {
        if ($board[$i][0] !== '-' && $board[$i][0] === $board[$i][1] && $board[$i][1] === $board[$i][2]) return $board[$i][0];
        if ($board[0][$i] !== '-' && $board[0][$i] === $board[1][$i] && $board[1][$i] === $board[2][$i]) return $board[0][$i];
    }
    if ($board[0][0] !== '-' && $board[0][0] === $board[1][1] && $board[1][1] === $board[2][2]) return $board[0][0];
    if ($board[0][2] !== '-' && $board[0][2] === $board[1][1] && $board[1][1] === $board[2][0]) return $board[0][2];
    return null;
}

$winner = checkWinner($_SESSION['board']);
$draw = !$winner && !array_filter(array_merge(...$_SESSION['board']), fn($cell) => $cell === '-');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morpion Simplifié</title>
    <style>
        table { margin: 20px auto; border-collapse: collapse; }
        td { width: 60px; height: 60px; text-align: center; border: 1px solid black; }
        button { width: 100%; height: 100%; font-size: 20px; }
        .message { text-align: center; margin: 20px; font-size: 18px; }
    </style>
</head>
<body>
    <div class="message">
        <?php
        if ($winner) {
            echo "$winner a gagné !";
        } elseif ($draw) {
            echo "Match nul !";
        } else {
            echo "C'est au tour de {$_SESSION['currentPlayer']} de jouer.";
        }
        ?>
    </div>
    <form method="post">
        <table>
            <?php for ($i = 0; $i < 3; $i++): ?>
                <tr>
                    <?php for ($j = 0; $j < 3; $j++): ?>
                        <td>
                            <?php if ($_SESSION['board'][$i][$j] === '-'): ?>
                                <button type="submit" name="cell" value="<?= $i . ',' . $j ?>">-</button>
                            <?php else: ?>
                                <?= $_SESSION['board'][$i][$j] ?>
                            <?php endif; ?>
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
        <div style="text-align: center;">
            <button type="submit" name="reset">Réinitialiser</button>
        </div>
    </form>
</body>
</html>
