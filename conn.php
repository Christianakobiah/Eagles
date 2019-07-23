<?php

$DB_HOST = "localhost";
$DB_USER ="root";
$DB_PASSWORD = "";
$DB_NAME = "quizapp";


$connection = mysqli_connect($DB_HOST,$DB_USER,$DB_PASSWORD,$DB_NAME);

if(!$connection){

    die('Query failed ' . mysqli_error($connection));
    
}





?>