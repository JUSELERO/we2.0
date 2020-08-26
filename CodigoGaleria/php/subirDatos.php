<?php require('inicio.php'); ?>
<?php require('nav.php'); ?>

<form action="upload.php" method="POST" enctype="multipart/form-data">
        <h2>Subir archivo</h2>
        <input type="file" name="file">
        <p class="center"><input type="submit" value="Subir archivo"></p>
    </form>

<?php require('final.php'); ?>