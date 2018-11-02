<?php



  if(empty($_POST['user'])){
    $errores['user'] = 'No he recibido el usuario';
  }else{
    $_POST['user'] = trim($_POST['user']);
    $_POST['user'] = strip_tags($_POST['user']);
  }


  if(empty($_POST['pass'])){
    $errores['pass'] = 'No he recibido la contraseña';
  }else{
    $_POST['pass'] = trim($_POST['pass']);
    $_POST['pass'] = strip_tags($_POST['pass']);
    $_POST['user'] = md5($_POST['user']);
    $_POST['pass'] = md5($_POST['pass']);
    if(!comprobarPassword('user', 'pass', './logea.txt')){
      $errores['pass'] = 'Usuario o contraseña incorrecta';
    }
  }

 ?>
