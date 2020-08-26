<?php
session_start();
require 'basededatos.php';

if (!empty($_POST['correo']) && !empty($_POST['psw'])) {
    $valor=$_POST['correo'];
    $records = $conn->prepare("SELECT * FROM Usuario where correo='$valor'");
    $records->bindParam(':correo', $_POST['correo']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';
    /* verify and desencrypt data from de database */
    if (count($results) > 0 && password_verify($_POST['psw'], $results['contraseña'])) {
      $_SESSION['user_id'] = $results['correo'];
      header("Location: ./../user.php");
    } else {
      $message = 'disculpe ese usuario no existe';
        echo $message;
    }
  }


?>