<?php
session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Correct Answers.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="index.css"/>
</head>
<body>
<div class="container">
<div class=""><?php echo "Hello " . $_SESSION['username'] . " these are the answers to all the questions" ?></div>
<div id="answers">


</div>
</div>
</body>

</html>
