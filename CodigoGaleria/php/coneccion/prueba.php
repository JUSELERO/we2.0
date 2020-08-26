
<?php
 require 'basededatos.php';
$id_curso=1234546;
$nombre_curso='priemroc';
$descripcion='es el primero';
$id_ususario_titular=147852;

$semanas_curso=2;
if (!empty($database)){
    $sql="INSERT INTO Curso (id_curso,nombre_curso,descripcion,id_usuario_titula,semanas_curso) VALUES
    (:id,:nombre,:descripcion,:id_usuario,:semanas)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id_curso);
    $stmt->bindParam(':nombre', $nombre_curso);
    $stmt->bindParam(':descripcion', $descripcion);
    $stmt->bindParam(':id_usuario', $id_ususario_titular);
    $stmt->bindParam(':semanas', $semanas_curso);
    $stmt->execute();
}
?>