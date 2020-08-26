<?php
session_start();
require 'coneccion/queryuser.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome to you WebApp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="./../CSS/logi.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  </head>
  <?php if(!empty($user)): ?>
  <div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px">Hola <?= $user['1']; ?> </h1>
    <p>Gracias por estar con nosotros</p>
    <a class="cancelbtn" href="coneccion/logout.php"><button>log OUT</button> </a>
  </div>
</div>



    <?php else: ?>
      <h1>Please Login or SignUp</h1>

      <a href="./../html/login.php">Login</a> or
      <a href="signup.php">SignUp</a>
    <?php endif; ?>
  </body>
</html>