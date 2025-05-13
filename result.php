<?php
session_start();
require_once 'questions.php'; 

$totalQuestions = count($questions);
$score = $_SESSION['score'];
$scoreColor = ($score >= ($totalQuestions / 2)) ? "green" : "red";


$userAnswers = isset($_SESSION['userAnswers']) ? $_SESSION['userAnswers'] : [];
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
        .correct-answer {
            color: #28a745; 
            font-weight: bold;
        }
        .wrong-answer {
            color: #dc3545; 
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
        <h1 class="display-4">Quiz terminé !</h1>
        <p class="score"><?php echo $score; ?> / <?php echo $totalQuestions; ?></p>
        
        <h2 class="mt-4">Réponses :</h2>
        <?php foreach ($questions as $index => $question): ?>
            <div class="question-card">
                <p><strong>Question <?php echo $index + 1; ?>:</strong> <?php echo $question['question']; ?></p>
                <p class="correct-answer">✅ Bonne réponse : <?php echo $question['options'][$question['correct']]; ?></p>
                <p class="<?php echo ($userAnswers[$index] == $question['correct']) ? 'correct-answer' : 'wrong-answer'; ?>">
                    <?php echo ($userAnswers[$index] == $question['correct']) ? "✔️ Votre réponse : " : "❌ Votre réponse : "; ?>
                    <?php echo $question['options'][$userAnswers[$index]]; ?>
                </p>
            </div>
        <?php endforeach; ?>

        <a href="index.php" class="btn btn-primary mt-3">Recommencer</a>
    </div>
</body>
</html>

<?php
session_destroy();
?>
