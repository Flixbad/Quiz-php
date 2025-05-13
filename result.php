<?php
session_start();
require_once 'questions.php';

$playerName = isset($_SESSION['playerName']) ? $_SESSION['playerName'] : "Joueur inconnu";
$totalQuestions = count($questions);
$score = $_SESSION['score'];
$scoreColor = ($score >= ($totalQuestions / 2)) ? "green" : "red";

// Charger l'historique des scores
$scoreFile = 'scores.json';
$scores = file_exists($scoreFile) ? json_decode(file_get_contents($scoreFile), true) : [];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Résultat du Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .score {
            font-size: 3rem;
            font-weight: bold;
            color: <?php echo $scoreColor; ?>;
        }
    </style>
</head>
<body class="bg-dark text-white text-center">
    <div class="container mt-5">
        <h1 class="display-4">Bravo <?php echo htmlspecialchars($playerName); ?> ! 🎉</h1>
        <p class="score"><?php echo $score; ?> / <?php echo $totalQuestions; ?></p>

        <h2 class="mt-4">Historique des scores :</h2>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>Pseudo</th>
                    <th>Score</th>
                    <th>Questions totales</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($scores as $entry): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($entry['pseudo']); ?></td>
                        <td><?php echo $entry['score']; ?></td>
                        <td><?php echo $entry['total']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="answers.php" class="btn btn-warning mt-3">Voir les corrections</a> <!-- Bouton pour voir les réponses -->
        <a href="start.php" class="btn btn-primary mt-3">Recommencer</a>
    </div>
</body>
</html>

<?php
session_destroy();
?>
