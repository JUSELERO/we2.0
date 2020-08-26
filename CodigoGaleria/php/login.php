<?php require('inicio.php'); ?> <!--generate begin tags of html5-->
<?php require('nav.php'); ?><!--generate code of de navegation bar -->
<?php require('coneccion/session.php'); ?><!--verify if  exist an a current session-->

<script></script>

<!--cuerpo de el formulario de ingreso de datos -->
<div class="container "><!--contenedor proporcionado por Boostrap -->
    <div class="row centrarContenido-Form " ><!--Clase propia que centra el formulario-->

        <div class="col"></div>

            <div class="padding-10 col-6  align-items-center  border rounded bg-orange-style ">
              <div><h1>Inicio de Sesión</h1></div>
            <form action="coneccion/verify.php" method="POST"><!--Form that redirection to verify sistem-->
                <div class="form-group">
                  <label for="exampleInputEmail1">Correo</label>
                  <input type="email" class="form-control" name="correo" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <small id="emailHelp" class="form-text text-muted d-none d-sm-block">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Contraseña</label>
                  <input type="password" class="form-control" name="psw" id="exampleInputPassword1">
                </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Recuerdame</label>
                </div>
                <div>
                 <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
                </div>
                <div class="button-log-up">
                <a href="./../../CodigoGaleria/php/signup.php" class="btn bg-violet-style btn-secondary btn-lg">Registrarse</a> <a href="./../../"  class="btn bg-orange-style btn-danger btn-lg">Cancelar</a>
                </div>

            </form>
            </div>
            <span></span>

        <div class="col"></div>
</div>

</div>



<?php require('final.php'); ?>