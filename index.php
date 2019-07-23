<?php
session_start();

if(isset($_POST['submit'])){

$_SESSION['username'] = $_POST['username'];

    header("Location: index2.php");

}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>The Quiz App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="index.css"/>
</head>
<body class='wholeshow'>
    <div class="wholething">
        <div class="login">
            <div>
                <h3>The Eagles' Quiz App</h3>
                <!-- <h3>STUDENT/TEACHER PORTAL SYSTEM</h3> -->
                <!-- <div class="imagediv">
                    <img class="schoollogo" src="img/uj.jpg" height="90px">
                </div> -->
            </div>

            <form class="formstuff" action="index.php" method="POST">

                <!-- <label>Username:</label>
<input type="text" placeholder="Enter Username Here" required autofocus maxlength="25">
-->

                <label for="studentnumber">Enter your Name:</label>
                <input type="text" placeholder="Enter Your Name" name="username" required autofocus>

                <!-- <label for="password">Password:</label>
                <input type="password" name="password" required autofocus>
                <br />
                <span class="password-reset"><a href="">Forgot password?</a></span>
                 <br/> -->
                <input  class="btn"type="submit" value="Start Quiz" name="submit">

            </form>

            <div class="requirements">
            <h2>Hello Student, welcome to the Eagles Quiz App. Below are the requirements:</h2>
                <ol>
                    <li>Answer all questions within a 10 second period</li>
                    <li>You have only one attempt at a question</li>
                    <li>If a question is unanswered, it is wrong</li>
                </ol>
                <h3>May the good Lord be with you!</h3>
            </div>
        </div>
    </div>
</body>

</html>
