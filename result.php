<?php
session_start();
require_once 'questions.php'; 

$totalQuestions = count($questions);
$score = $_SESSION['score'];
$scoreColor = ($score >= ($totalQuestions / 2)) ? "green" : "red";
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
        <h1 class="display-4">Quiz terminé !</h1>
        <p class="score"><?php echo $score; ?> / <?php echo $totalQuestions; ?></p>
        <a href="index.php" class="btn btn-primary mt-3">Recommencer</a>
    </div>
</body>
</html>

<?php
session_destroy();
?>
