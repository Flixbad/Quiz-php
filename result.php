<?php
session_start();
require_once 'questions.php'; 

$scoreFile = 'scores.json';
$scores = file_exists($scoreFile) ? json_decode(file_get_contents($scoreFile), true) : [];
$selectedPlayer = isset($_GET['player']) ? $_GET['player'] : null;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Résultat du Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

<header class="quiz-header">
    <img src="assets/img/logo.png" alt="Logo du Quiz" class="quiz-logo">
</header>

<div class="container">
    <h1 class="quiz-title">🏆 Classement des Joueurs</h1>

   
    <table class="quiz-table">
        <thead>
            <tr>
                <th>Pseudo</th>
                <th>Score</th>
                <th>Questions totales</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($scores as $entry): ?>
                <tr>
                    <td><?php echo htmlspecialchars($entry['pseudo']); ?></td>
                    <td><?php echo $entry['score']; ?> / <?php echo $entry['total']; ?></td>
                    <td><a href="?player=<?php echo urlencode($entry['pseudo']); ?>" class="quiz-btn">Voir les réponses</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="start.php" class="quiz-btn">Recommencer</a>
</div>

<?php if ($selectedPlayer): ?>
    <div class="container">
        <h2 class="quiz-subtitle">📜 Résultats de <?php echo htmlspecialchars($selectedPlayer); ?></h2>

        <?php
        foreach ($scores as $entry) {
            if ($entry['pseudo'] === $selectedPlayer) {
                foreach ($questions as $index => $question) {
                    $playerAnswer = $entry['answers'][$index] ?? null;
                    ?>
                    <div class="quiz-card">
                        <p><strong>Question <?php echo $index + 1; ?>:</strong> <?php echo $question['question']; ?></p>
                        <p class="quiz-correct">✅ Bonne réponse : <?php echo $question['options'][$question['correct']]; ?></p>
                        <p class="<?php echo ($playerAnswer == $question['correct']) ? 'quiz-correct' : 'quiz-wrong'; ?>">
                            <?php echo ($playerAnswer == $question['correct']) ? "✔️ Réponse : " : "❌ Réponse : "; ?>
                            <?php echo isset($question['options'][$playerAnswer]) ? $question['options'][$playerAnswer] : "Non répondu"; ?>
                        </p>
                    </div>
                    <?php
                }
            }
        }
        ?>
        <a href="result.php" class="quiz-btn">⬅️ Retour</a>
    </div>
<?php endif; ?>

</body>
</html>
