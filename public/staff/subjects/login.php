<?php

require_once('../../../private/initialize.php');

if(is_post_request()){
  $subject = [];
  $subject['nombre_usuario'] = $_POST['nombre_usuario'] ?? '';
  $subject['contraseña'] = $_POST['contraseña'] ?? 'wrooong';
  
  
  $result = find_user_by_username($subject['nombre_usuario']);
  //$new_id = mysqli_insert_id($db);
  if ((!empty($result)) && $result['contraseña']==$subject['contraseña']){
    session_destroy();
    session_start();
    $_SESSION['user'] = $result['nombre_usuario'];
    $_SESSION['contra1'] = $result['contraseña'];
    $_SESSION['contra2'] = $subject['contraseña'];
    $_SESSION['user_type'] = $result['tipo_usuario'];
    redirect_to(url_for('/staff/subjects/index.php'));
    
  }else{
    redirect_to(url_for('/staff/subjects/login_new.php'));  
  }
  
}else{
  redirect_to(url_for('/staff/subjects/login_new.php'));
}
?>

