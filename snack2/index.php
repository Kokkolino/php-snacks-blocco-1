<?php
$name = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"]; 
?>

<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
   </head>
   <body>
      <form method="get">
         <input type="text" placeholder='nome' name='name'>
         <input type="text" placeholder='email' name='email'>
         <input type="number" placeholder='età' name='age'>
         <button type="submit">invia</button>
      </form>
      <?php 
      
        if(strlen($name) > 3 && strpos($email, '.') != false && strpos($email, '@') != false && is_numeric($age) != false){
            echo('sei stato loggato');
        } else{
            echo('Email, password o età sono errati.');
        }
      ?>
   </body>
   </html>