<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['playerName'] = $_POST['playerName'];
    header("Location: index.php"); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quiz Jeux Vidéo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white text-center">
    <div class="container mt-5">
        <h1 class="display-4">Bienvenue dans le Quiz Jeux Vidéo !</h1>
        <p class="lead">Entrez votre pseudo pour commencer :</p>

        <form action="" method="POST" class="mt-4">
            <input type="text" name="playerName" class="form-control w-50 mx-auto" required placeholder="Pseudo">
            <button type="submit" class="btn btn-primary mt-3">Commencer</button>
        </form>
    </div>
</body>
</html>
