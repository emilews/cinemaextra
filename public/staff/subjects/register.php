<?php

require_once('../../../private/initialize.php');

if(is_post_request()){
  $subject = [];
  $subject['nombre_usuario'] = $_POST['nombre_usuario'] ?? '';
  $subject['contraseña'] = $_POST['contraseña'] ?? '';
  $subject['confirmar'] = $_POST['confirm_password'] ?? '';
  $subject['tipo_usuario'] = $_POST['tipo_usuario'] ?? 'user';
  $subject['imagen'] = 'usuario.jpg';
  
  $result = insert_user($subject);
  //$new_id = mysqli_insert_id($db);
  if ($result['tipo_usuario']!='duplicate' && $subject['contraseña']==$subject['confirm_password']){
    redirect_to(url_for('/staff/subjects/profile.php?id='. $result['id_usuario']));
  }else{
    redirect_to(url_for('/staff/subjects/log_Reg.php'));  
  }
  
}else{
  redirect_to(url_for('/staff/subjects/log_Reg.php'));
}
?>

