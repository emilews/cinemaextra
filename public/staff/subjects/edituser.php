<?php

  require_once('../../../private/initialize.php');

  if(!isset($_GET['id'])) {
    redirect_to(url_for('/staff/subjects/index.php'));
  }
  $id = $_GET['id'];
  $subject = find_user_by_id($id);

  

  if(is_post_request()) {

    $target_dir = url_for("/images/");
    $target_file = $target_dir . basename($_FILES["imagen"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Handle form values sent by new.php
    $subject = [];
    $subject['id_usuario']=$id;
    $subject['nombre_usuario'] = $_POST['nombre_usuario'] ?? '';
    $subject['contraseña'] = $_POST['contraseña'] ?? '';
    $subject['tipo_usuario'] = $_POST['tipo_usuario'] ?? '';
    $subject['imagen'] = $_POST['imagen'] ?? '';

    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }

    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["imagen"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    $result = update_user($subject);
    redirect_to(url_for('/staff/subjects/profile.php?id=' . $id));
    
  }else {
    $subject = find_user_by_id($id);
    
    $subject_set = find_all_subjects();
    $subject_count = mysqli_num_rows($subject_set);
    mysqli_free_result($subject_set);
  }

// Check if file already exists


?>

<?php $page_title = 'Editar usuario'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to List</a>

  <div class="subject edit">
    <h1>Editar usuario</h1>

    <form action="<?php echo url_for('/staff/subjects/edituser.php?id=' . u($id)); ?>" method="post">
      <dl>
        <dt>Nombre usuario</dt>
        <dd><input type="text" name="nombre_usuario" value="<?php echo $subject['nombre_usuario']; ?>" required /></dd>
      </dl>
      <dl>
        <dt>Contraseña</dt>
        <dd><input type="password" name="contraseña" value="" required /></dd>
      </dl>
      <dl>
        <dt>Tipo de usuario</dt>
        <dd>
        <select name="tipo_usuario" id="tipo">
        <option value="user" <?php if($subject['tipo_usuario']=='user') echo 'selected';?>>Usuario</option>
        <option value="admin"<?php if($subject['tipo_usuario']=='admin') echo 'selected';?>>Administrador</option>
       </select> 
        </dd>
      </dl>
      <dl>
        <dt>Imagen</dt>
        <dd><input type="file" name="imagen" accept="image/*" id="imagen" required /></dd>
      </dl>
      
      <div id="operations">
        <input type="submit" value="Editar usuario" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
