<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['playerName'] = $_POST['playerName'];
    header("Location: index.php"); 
    exit();
}
session_destroy();
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
<header class="quiz-header">
    <img src="assets/img/logo.png" alt="Logo du Quiz" class="quiz-logo">
</header>

<body class="bg-dark text-white text-center">
    <div class="container mt-5">
        <h1 class="display-4">Bienvenue dans le Quiz De Flix !</h1>
        <p class="lead">Entrez votre pseudo pour commencer :</p>

        <form action="" method="POST" class="mt-4">
            <input type="text" name="playerName" class="form-control w-50 mx-auto" required placeholder="Pseudo">
            <button type="submit" class="btn btn-primary mt-3">Commencer</button>
        </form>
    </div>
</body>
</html>
