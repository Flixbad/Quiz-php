<?php
session_start();
require_once 'questions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $index = $_SESSION['questionIndex'];
    
    
    if (!isset($_SESSION['userAnswers'])) {
        $_SESSION['userAnswers'] = [];
    }
    $_SESSION['userAnswers'][$index] = $_POST['answer'];

    
    if ($_POST['answer'] == $questions[$index]['correct']) {
        $_SESSION['score']++;
    }

    $_SESSION['questionIndex']++;

    
    if ($_SESSION['questionIndex'] >= count($questions)) {
        $playerName = $_SESSION['playerName'];
        $score = $_SESSION['score'];

       
        $scoreFile = 'scores.json';
        $scores = file_exists($scoreFile) ? json_decode(file_get_contents($scoreFile), true) : [];

        
        $scores[] = ["pseudo" => $playerName, "score" => $score, "total" => count($questions)];

        
        file_put_contents($scoreFile, json_encode($scores, JSON_PRETTY_PRINT));

        header("Location: result.php");
        exit();
    }

    header("Location: index.php");
    exit();
}
?>
