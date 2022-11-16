<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'miscellaneous/header.php' ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Statement</title>
</head>
<body>

<h2> If Statements </h2>

    
</body>



<?php
$age = 24;



if (21 >= $age)
{

    echo "<h4>Congrats! you met the minimum age requirement</h4>";
  
 
}
else 
{
   
 echo "<h4 class = 'text-danger' > you do not meet the age requirement </h4>";

}
$age = '';



?>
<?php require 'miscellaneous/footer.php' ?>
