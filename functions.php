<!DOCTYPE html>
<html lang="en">
<?php include 'miscellaneous/header.php' ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>
        Functions
    </h2>
    

    <?php



    function findSum($num1, $num2, $num3){
        $sum = $num1 + $num2 + $num3;
      return $sum;
    }
    $getSum = findsum(10, 10, 10);

    echo "The Sum of the numbers are: " . $getSum; 

    ?>
    <?php require 'miscellaneous/footer.php' ?>

