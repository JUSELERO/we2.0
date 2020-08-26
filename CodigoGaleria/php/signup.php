
<?php require('inicio.php'); ?>
<?php require('nav.php'); ?>


    <div id="" class="container margenes-basic " >
    <div class="row centrarContenido-Form margenes-basic ">
    <div class="padding-10 col-6  align-items-center   bordeado rounded bg-orange-style ">
    <form class="" onsubmit="verify_pass();" action="coneccion/insertasql.php" method="POST">
    <div><h1>Registrarse</h1></div>

    <div class="container">
      <label for="psw"><b>*Nombres</b></label>
      <input class="form-control" name="nombre" type="text" placeholder="Nombre" required>
      <label for="psw"><b>*Apellidos</b></label>
      <input class="form-control" name="apellido" type="text" placeholder="Nombre" required>
      <label for="psw"><b>*Sexo</b></label><br>
      <select name="sexo">
      <option value="M">Mujer</option>
      <option value="H">Hombre</option>
      <option value="O">Otro</option>
      </select><br>
      <label for="psw"><b>*Correo</b></label>
      <input class="form-control" name="correo" type="text" placeholder="Correo" required>
      <label for="psw"><b>*Edad</b></label>
      <input class="form-control" name="edad" type="text" placeholder="Edad" required>
      <label for="psw"><b>*País</b></label>
      <input class="form-control" name="pais" type="text" placeholder="Pais" required>
      <label for="psw"><b>*Ciudad</b></label>
      <input class="form-control" name="ciudad" type="text" placeholder="Telefono" required>
      <label for="psw"><b>*Direccion</b></label>
      <input class="form-control" name="direccion" type="text" placeholder="Ciudad" required>
      <label for="psw"><b>*Documento</b></label>
      <input class="form-control" name="cedula" type="text" placeholder="documento" required>
      <label for="psw"><b>*Telefono</b></label>
      <input class="form-control" name="telefono" type="text" placeholder="Telefono" required>
      <label for="psw"><b>*Contraseña</b></label>
      <input class="form-control" id="password1" name="password" type="password" placeholder="Contraseña" required>
      <label for="psw"><b>*Confirmar Contraseña</b></label>
      <input class="form-control" id="password2" name="confirm_password" type="password" placeholder="Confirmar Contraseña" required>
      <input class="form-control" id="recaptchaResponse" name="recaptcha_response" type="hidden" />
      <button class="btn btn-primary btn-lg btn-block" type="submit">Enviar</button>
    </div>
      <div id="msg"></div>

      <!-- Mesage of verification -->
      <div id="error" class="alert alert-danger ocultar" role="alert">
          Las Contraseñas no coinciden, vuelve a intentar !
      </div>
      <div id="ok" class="alert alert-success ocultar" role="alert">
          Las Contraseñas coinciden ! (Procesando formulario ... )
      </div>


    <!--<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  <strong><?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?></strong>
  </div>-->
 
            <a href="./../../index.html"  class="btn bg-orange-style btn-danger btn-lg" >Inicio</a>
            <a  href="login.php" class="btn bg-violet-style btn-secondary btn-lg">Cancelar</a>
            <span class="psw">Forgot <a href="#">password?</a> </span>
            <span class="psw"></span>

    </form>
  </div>
    </div>
  </div>


<?php require('final.php'); ?>