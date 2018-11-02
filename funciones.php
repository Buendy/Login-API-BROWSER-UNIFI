<?php

function mostrarErrorCampo($campo, $errores){
  if(isset($errores[$campo])){
    echo '<span class="listaErrores">' . $errores[$campo] . '</span>';
  }
}
function mostrarCampo($campo){
  if(isset($_POST[$campo])){
    echo 'value="' . $_POST[$campo] . '"';
  }
}

function comprobarPassword($campo1, $campo2, $archivo){
  $array = file($archivo);
  foreach ($array as $value) {
    $datos = explode(' : ', $value);
    if(isset($datos[0])){
      if($datos[0] == $_POST[$campo1]){
        if($datos[1] == $_POST[$campo2]){
            return true;
          }
      }
    }
  }
 return false;
}


 ?>
