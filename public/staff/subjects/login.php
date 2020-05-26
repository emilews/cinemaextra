<?php

require_once('../../../private/initialize.php');

if(is_post_request()){
  $subject = [];
  $subject['nombre_usuario'] = $_POST['nombre_usuario'] ?? '';
  $subject['contraseña'] = $_POST['contraseña'] ?? '';
  
  
  $result = find_user_by_username($subject['nombre_usuario']);
  if ((!empty($result)) && $result['psw']==$subject['contraseña']){
    session_destroy();
    session_start();
    $_SESSION['user'] = $result['nam'];
    $_SESSION['contra1'] = $result['psw'];
    redirect_to(url_for('/staff/subjects/index.php'));
    
  }else{
    redirect_to(url_for('/staff/subjects/login_new.php'));  
  }
  
}else{
  redirect_to(url_for('/staff/subjects/login_new.php'));
}
?>

