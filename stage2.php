<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eagles' Quiz App</title>
    <link rel="stylesheet" href="stage2.css">
</head>
<body>
    <div id="container">
        <div id="start1"><?php echo "Hello " . $_SESSION['username'] . '! ' . "Begin Quiz!" ;  ?></div>
        <div id="quiz1" style="display: none">
            <div id="question1"></div>
            <div id="qImg1"></div>
            <div id="choices1">
                <div class="choice1" id="A1" onclick="checkAnswer('A')"></div>
                <div class="choice1" id="B1" onclick="checkAnswer('B')"></div>
                <div class="choice1" id="C1" onclick="checkAnswer('C')"></div>
            </div>
            <div id="timer1">
                <div id="counter1"></div>
                <div id="btimeGauge1"></div>
                <div id="timeGauge1"></div>
            </div>
            <div id="progress1"><div class="prog"></div></div>
        </div>
        <div id="scoreContainer1" style="display: none"></div>
    </div>
    <script src="quiz2.js"></script>
</body>
</html>