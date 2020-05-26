<?php

require_once('../../../private/initialize.php');

if(is_post_request()){
  $subject = [];
    $subject['director'] = $_POST['director'] ?? '';
    $subject['nombre_pelicula'] = $_POST['nombre_pelicula'] ?? '';
    $subject['genero'] = $_POST['genero'] ?? '';
    $subject['duracion'] = $_POST['duracion'] ?? '';
    $subject['horarios'] = $_POST['horarios'] ?? '';
    $subject['descripcion'] = $_POST['descripcion'] ?? '';
	  $subject['imagen'] = $_POST['imagen'] ?? '';
  
  $result = insert_subject($subject);
  //$new_id = mysqli_insert_id($db);
  redirect_to(url_for('/staff/subjects/show.php?id='. $result));
}else{
  redirect_to(url_for('/staff/subjects/new.php'));
}
?>
