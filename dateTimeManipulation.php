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

    <h3>Date and Time Manipulation </h3>
    <br>

    <?php 
     $datenow = getdate();

    echo "Today's Date: ";
    echo $datenow['mday'] . '<br/>';
    echo "Current Month: ";
    echo $datenow['mon'] . '<br/>';
    echo "Current Year: ";
    echo $datenow['year'] . '<br/>';


    echo "Today's Date is: " . $datenow['mday'] . '/' . $datenow['mon'] . '/' . $datenow['year'] . "<br/>";


    echo "Today is ". date ("m/d/y G:i:s<br>", time()) . '<br/>';
    

    



    ?>
    <?php require 'miscellaneous/footer.php' ?>
