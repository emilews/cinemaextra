<?php

  require_once('../../../private/initialize.php');

  if(!isset($_GET['id'])) {
    redirect_to(url_for('/staff/subjects/index.php'));
  }
  $id = $_GET['id'];
  $subject = find_subject_by_id($id);
  if(is_post_request()) {

    // Handle form values sent by new.php
    $subject = [];
    $subject['id_pelicula']=$id;
    $subject['director'] = $_POST['director'] ?? '';
    $subject['nombre_pelicula'] = $_POST['nombre_pelicula'] ?? '';
    $subject['genero'] = $_POST['genero'] ?? '';
    $subject['duracion'] = $_POST['duracion'] ?? '';
	 $subject['horarios'] = $_POST['horarios'] ?? '';
    $subject['descripcion'] = $_POST['descripcion'] ?? '';
	$subject['imagen'] = $_POST['imagen'] ?? '';

    $result = update_subject($subject);
    redirect_to(url_for('/staff/subjects/show.php?id=' . $id));
    
  }else {
    $subject = find_subject_by_id($id);
    
    $subject_set = find_all_subjects();
    $subject_count = mysqli_num_rows($subject_set);
    mysqli_free_result($subject_set);
  }

?>

<?php $page_title = 'Edit Movie'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to List</a>

  <div class="subject edit">
    <h1>Edit Movie</h1>

    <form action="<?php echo url_for('/staff/subjects/edit.php?id=' . u($id)); ?>" method="post">
      <dl>
        <dt>Nombre de director</dt>
        <dd><input type="text" name="director" value="<?php echo $subject['director']; ?>" required /></dd>
      </dl>
      <dl>
        <dt>Nombre de pelicula</dt>
        <dd><input type="text" name="nombre_pelicula" value="<?php echo $subject['nombre_pelicula']; ?>" required /></dd>
      </dl>
      <dl>
        <dt>Duracion</dt>
        <dd><input type="text" name="duracion" value="<?php echo $subject['duracion']; ?>" required /></dd>
      </dl>
      <dl>

        <dt>Horarios</dt>
        <dd><input type="text" name="horarios" value="<?php echo $subject['horarios']; ?>" required /></dd>
      </dl>
      <dl>
        <dt>Genero</dt>
        <dd><input type="text" name="genero" value="<?php echo $subject['genero']; ?>" required /></dd>
      </dl>
      <dl>
      <dl>
        <dt>Descripcion</dt>
        <dd><input type="text" name="descripcion" value="<?php echo $subject['descripcion']; ?>" required /></dd>
      </dl>
	  <dl>
        <dt>Imagen</dt>
        <dd><input type="file" name="imagen" required /></dd>
      </dl>
      <dl>
      <div id="operations">
        <input type="submit" value="Edit Movie" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
