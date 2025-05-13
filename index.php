<?php
session_start();
require_once 'questions.php';

// Vérifier si le joueur a entré son pseudo
if (!isset($_SESSION['playerName'])) {
    header("Location: start.php"); // Redirige vers le formulaire de pseudo
    exit();
}

$playerName = $_SESSION['playerName']; // Récupération du pseudo

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
    <title>Quiz Jeux Vidéo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">

    <div class="container mt-5">
        <h1 class="text-center">Bienvenue, <?php echo htmlspecialchars($playerName); ?> ! Bonne chance 🎮</h1>
        
        <div class="card bg-secondary text-white mt-3">
            <div class="card-body">
                <h2 class="text-center">Question <?php echo $index + 1; ?>:</h2>
                <p class="lead"><?php echo $question['question']; ?></p>
                
                <form action="process.php" method="POST">
                    <?php foreach ($question['options'] as $key => $option): ?>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="answer" value="<?php echo $key; ?>" id="option<?php echo $key; ?>">
                            <label class="form-check-label" for="option<?php echo $key; ?>">
                                <?php echo $option; ?>
                            </label>
                        </div>
                    <?php endforeach; ?>
                    <button type="submit" class="btn btn-primary mt-3 w-100">Valider</button>
                </form>
            </div>
        </div>
    </div>

    <script src="assets/js/scripts.js"></script>

</body>
</html>
