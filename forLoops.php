<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'miscellaneous/header.php' ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2> Simple For Loop </h2>
    <?php

    $i = 0;
   

    for($i = 0; $i <= 9; $i++){

        print"</p> The number will increase 10 times it is at number" . " " . $i . "</>";

    }

    ?>
    <?php require 'miscellaneous/footer.php' ?>
