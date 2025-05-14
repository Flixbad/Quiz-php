<?php
session_start();
require_once 'questions.php';

if (!isset($_SESSION['playerName'])) {
    header("Location: start.php"); 
    exit();
}

$playerName = $_SESSION['playerName']; 

if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
}
if (!isset($_SESSION['questionIndex'])) {
    $_SESSION['questionIndex'] = 0;
}

$index = $_SESSION['questionIndex'];

if ($index >= count($questions)) {
    header('Location: result.php');
    exit();
}

$question = $questions[$index];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Le Quiz de Flix</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

    <header class="quiz-header">
        <img src="assets/img/logo.png" alt="Logo du Quiz" class="quiz-logo">
    </header>

    <div class="container">
        <h1 class="quiz-title">Bienvenue, <?php echo htmlspecialchars($playerName); ?> ! Bonne chance 🎮</h1>
        <button id="toggleMusic" class="quiz-music-btn">🎵 Couper la musique</button>

        
        <div class="timer-container">
    <div class="arcade-timer">
        <span id="timer-value">15</span>
    </div>
</div>


        <div class="quiz-card">
            <div class="card-body">
                <h2 class="quiz-question">Question <?php echo $index + 1; ?>:</h2>
                <p class="quiz-text"><?php echo $question['question']; ?></p>
                
                <form id="quizForm" action="process.php" method="POST">
                    <?php foreach ($question['options'] as $key => $option): ?>
                        <div class="quiz-option">
                            <input class="quiz-radio" type="radio" name="answer" value="<?php echo $key; ?>" id="option<?php echo $key; ?>">
                            <label class="quiz-label" for="option<?php echo $key; ?>">
                                <?php echo $option; ?>
                            </label>
                        </div>
                    <?php endforeach; ?>
                    <button type="submit" class="quiz-submit-btn">Valider</button>
                </form>
            </div>
        </div>
    </div>

    <audio id="backgroundMusic" loop>
        <source src="assets/audio/arcade_music.mp3" type="audio/mp3">
        Votre navigateur ne supporte pas l’audio.
    </audio>

    <script src="assets/js/scripts.js"></script>

</body>
</html>
