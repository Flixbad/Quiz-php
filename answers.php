<?php
session_start();
require_once 'questions.php';

$playerName = isset($_SESSION['playerName']) ? $_SESSION['playerName'] : "Joueur inconnu";
$totalQuestions = count($questions);
$userAnswers = isset($_SESSION['userAnswers']) ? $_SESSION['userAnswers'] : [];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Corrections du Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .correct-answer {
            color: #28a745; /* Vert ✅ */
            font-weight: bold;
        }
        .wrong-answer {
            color: #dc3545; /* Rouge ❌ */
            font-weight: bold;
        }
        .question-card {
            background: #343a40;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body class="bg-dark text-white text-center">
    <div class="container mt-5">
        <h1 class="display-4">Corrections du Quiz</h1>
        <p class="lead">Voici les bonnes réponses et celles que tu as choisies :</p>

        <?php foreach ($questions as $index => $question): ?>
            <div class="question-card">
                <p><strong>Question <?php echo $index + 1; ?>:</strong> <?php echo $question['question']; ?></p>
                <p class="correct-answer">✅ Bonne réponse : <?php echo $question['options'][$question['correct']]; ?></p>
                <p class="<?php echo ($userAnswers[$index] == $question['correct']) ? 'correct-answer' : 'wrong-answer'; ?>">
                    <?php echo ($userAnswers[$index] == $question['correct']) ? "✔️ Ta réponse : " : "❌ Ta réponse : "; ?>
                    <?php echo $question['options'][$userAnswers[$index]]; ?>
                </p>
            </div>
        <?php endforeach; ?>

        <a href="start.php" class="btn btn-primary mt-3">Recommencer</a>
    </div>
</body>
</html>
