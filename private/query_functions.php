<?php
function find_all_subjects(){
	global $db;
	$sql = "SELECT * FROM pelicula ";
	$sql .= "ORDER BY id_pelicula ASC";
	//echo $sql;
	$result = mysqli_query($db, $sql);
	confirm_result_set($result);
	return $result;
}
function find_subject_by_id($id){
	global $db;
	
	$sql = "SELECT * FROM pelicula ";
	$sql .= "WHERE id_pelicula ='" . $id . "'";
	$result = mysqli_query($db, $sql);
	confirm_result_set($result);
	$subject = mysqli_fetch_assoc($result);
	mysqli_free_result($result);
	return $subject;
}

function insert_subject($subject){
	global $db;

	$sql2 = "SELECT * FROM pelicula ORDER BY id_pelicula DESC LIMIT 1";
	$result2 = mysqli_query($db, $sql2);
	confirm_result_set($result2);
	$latest = mysqli_fetch_assoc($result2);
	mysqli_free_result($result2);
	$new_id = intval($latest['id_pelicula'])+1;

	$sql = "INSERT INTO pelicula ";
	$sql .= "(id_pelicula, director, nombre_pelicula, duracion, horarios, genero, descripcion, imagen) ";
	$sql .= "VALUES (";
	$sql .= "'" . strval($new_id) . "',";
	$sql .= "'" . $subject['director'] . "',";
	$sql .= "'" . $subject['nombre_pelicula'] . "',";
	$sql .= "'" . $subject['duracion'] . "',";
	$sql .= "'" . $subject['horarios'] . "',";
	$sql .= "'" . $subject['genero'] . "',";
	$sql .= "'" . $subject['descripcion'] . "',";
	$sql .= "'" . $subject['imagen'] . "'";
	$sql .= ")";
	$result = mysqli_query($db, $sql);
	
	if($result) {
		return $new_id;
	} else{
		echo mysqli_error($db);
		db_disconnect($db);
		exit;
	}
}
function update_subject($subject){
	global $db;
	
	$sql = "UPDATE pelicula SET ";
	$sql .= "director='" . $subject['director'] . "', ";
	$sql .= "nombre_pelicula='" . $subject['nombre_pelicula'] . "', ";
	$sql .= "duracion='" . $subject['duracion'] . "', ";
	$sql .= "horarios='" . $subject['horarios'] . "', ";
	$sql .= "genero='" . $subject['genero'] . "', ";
	$sql .= "descripcion='" . $subject['descripcion'] . "', ";
	$sql .= "imagen='" . $subject['imagen'] . "'";
	$sql .= "WHERE id_pelicula='" . $subject['id_pelicula'] . "' ";
	$sql .= "LIMIT 1";
	
	$result = mysqli_query($db, $sql);
	if($result){
		return true;
	} else{
		echo mysqli_error($db);
		db_disconnect($db);
		exit;
	}
}

function delete_subject($id){
	global $db;

	$sql = "DELETE FROM pelicula ";
    $sql .= "WHERE id_pelicula ='" . $id . "' ";
    $sql .= "LIMIT 1";

	$result = mysqli_query($db,$sql);
	confirm_result_set($result);

    if($result){
      return true;
    }else{
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
}

function validate_page($subject){
	if(empty($subject['menu_name'])){
		return true;
	}elseif(empty($subject['position'])){
		return true;
	}elseif(empty($subject['visible'])&&($subject['visible']!= 0)){
		return true;
	}else{
		return false;
	}
}
function find_user_by_name($name){
	global $db;
	
	$sql = "SELECT * FROM usuarios ";
	$sql .= "WHERE nam ='" . $name . "'";
	$result = mysqli_query($db, $sql);
	confirm_result_set($result);
	$user = mysqli_fetch_assoc($result);
	mysqli_free_result($result);
	return $user;
}

function insert_user($subject){
	global $db;

	$sql2 = "SELECT * FROM usuarios ORDER BY nam DESC LIMIT 1";
	$result2 = mysqli_query($db, $sql2);
	confirm_result_set($result2);
	$latest = mysqli_fetch_assoc($result2);
	mysqli_free_result($result2);

	$sql = "INSERT INTO usuarios ";
	$sql .= "(nam, psw)";
	$sql .= "VALUES (";
	$sql .= "'" . $subject['nombre_usuario'] . "',";
	$sql .= "'" . $subject['contraseña'] . "',";
	$sql .= ")";
	$result = mysqli_query($db, $sql);
	
	if($result) {
		$user = find_user_by_name($subject['nam']);
		return $user;
	} else{
		
		echo $subject['nombre_usuario'];
		echo $subject['contraseña'];
		echo mysqli_error($db);
		
		db_disconnect($db);
		$user = array('tipo_usuario' => 'duplicate');
		return $user;
	}
}

function find_user_by_id($id){
	global $db;
	
	$sql = "SELECT * FROM usuarios ";
	$sql .= "WHERE id_usuario ='" . $id . "'";
	$result = mysqli_query($db, $sql);
	confirm_result_set($result);
	$subject = mysqli_fetch_assoc($result);
	mysqli_free_result($result);
	return $subject;
}

function find_user_by_username($name){
	global $db;
	
	$sql = "SELECT * FROM usuarios ";
	$sql .= "WHERE nam ='" . $name . "'";
	$result = mysqli_query($db, $sql);
	confirm_result_set($result);
	$subject = mysqli_fetch_assoc($result);
	mysqli_free_result($result);
	return $subject;
}

function delete_user($id){
	global $db;

	$sql = "DELETE FROM usuarios ";
    $sql .= "WHERE id_usuario ='" . $id . "' ";
    $sql .= "LIMIT 1";

	$result = mysqli_query($db,$sql);
	confirm_result_set($result);

    if($result){
      return true;
    }else{
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
}

function update_user($subject){
	global $db;
	
	$sql = "UPDATE usuarios SET ";
	$sql .= "nombre_usuario='" . $subject['nombre_usuario'] . "', ";
	$sql .= "contraseña='" . $subject['contraseña'] . "', ";
	$sql .= "tipo_usuario='" . $subject['tipo_usuario'] . "', ";
	$sql .= "imagen='" . $subject['imagen'] . "'";
	$sql .= "WHERE id_usuario='" . $subject['id_usuario'] . "' ";
	$sql .= "LIMIT 1";

	
	$result = mysqli_query($db, $sql);
	if($result){
		return true;
	} else{
		echo mysqli_error($db);
		db_disconnect($db);
		exit;
	}
}

function find_all_users(){
	global $db;
	$sql = "SELECT * FROM usuarios ";
	$sql .= "ORDER BY id_usuario ASC";
	//echo $sql;
	$result = mysqli_query($db, $sql);
	confirm_result_set($result);
	return $result;
}
?>