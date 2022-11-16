<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'miscellaneous/header.php' ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h2> Do While Example  </h2>
<body>
    
<?php


$age = 20;

do {
    echo "</br>";
    echo "</br>";
    echo "</br>";
    echo "<p class = 'text-danger' > You have met the age requirement !</p>";

} while ($age > 20);



?>
<?php require 'miscellaneous/footer.php' ?>
</body>
</html>