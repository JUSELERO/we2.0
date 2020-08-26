<?php

  require 'basededatos.php';
  $estud='ESTUD';
  $carpeta=' ';
  $message = '';
  if (!empty($_POST['correo']) && !empty($_POST['password'])) {

    $sql = "INSERT INTO Usuario (nombre_usuario,apellidos_usuario,Sexo,correo,edad,pais,ciudad,direccion, telefono,tipo_usuario,cedula,carpeta,contraseña) VALUES
    (:nombre,:apellido,:sexo,:correo,:edad,:pais,:ciudad,:direccion,:telefono,:usuario,:cedula,:carpeta,:password);";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $_POST['nombre']);
    $stmt->bindParam(':apellido', $_POST['apellido']);
    $stmt->bindParam(':sexo', $_POST['sexo']);
    $stmt->bindParam(':correo', $_POST['correo']);
    $stmt->bindParam(':edad', $_POST['edad']);
    $stmt->bindParam(':pais', $_POST['pais']);
    $stmt->bindParam(':ciudad', $_POST['ciudad']);
    $stmt->bindParam(':direccion', $_POST['direccion']);
    $stmt->bindParam(':cedula', $_POST['cedula']);
    $stmt->bindParam(':telefono', $_POST['telefono']);
    $stmt->bindParam(':usuario', $estud);
    $stmt->bindParam(':carpeta', $carpeta);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);


    if ($stmt->execute()) {
      $message = 'Usuario se creo satisfactoriamente';
    } else {
        $message = 'no se ha creado El usuario';
  }

}
?>
