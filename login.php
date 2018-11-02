
<div class="centrado">
<form class="formlogin" action="index.php" method="post">

  <p>
    <label for="usuario" class="centrado form">usuario</label>
  </p>
  <p>
    <input type="text" class="form-control" name="user" required>
  </p><br>



  <p>
    <label for="contrasenya">Contraseña</label>
  </p>
  <p>
    <input type="password" class="form-control" name="pass" required>
  </p><br>


  <p>
    <input type="submit" name="enviar" value="Enviar" class="btn btn-secondary" >
  </p><br>

  <?= mostrarErrorCampo('user', $errores);?><br>
  <?= mostrarErrorCampo('pass', $errores);?>
</form>

</div>
