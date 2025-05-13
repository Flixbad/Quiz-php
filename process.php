<?php
session_start();
require_once 'questions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['answer'])) {
        $index = $_SESSION['questionIndex'];
        if ($_POST['answer'] == $questions[$index]['correct']) {
            $_SESSION['score']++;
        }
        $_SESSION['questionIndex']++;
        if (!isset($_SESSION['userAnswers'])) {
            $_SESSION['userAnswers'] = [];
        }
        $_SESSION['userAnswers'][$index] = $_POST['answer']; // Stocke la réponse donnée
        
    }
}

header("Location: index.php");
exit();
?>
