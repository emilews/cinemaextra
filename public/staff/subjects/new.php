<?php
//($errores!=true)? url_for('/staff/subjects/create.php'): url_for('/staff/subjects/new.php');
//ERRORES ESTA VACIO
  require_once('../../../private/initialize.php');

  $subject_set = find_all_subjects();
  $subject_count = mysqli_num_rows($subject_set);
  mysqli_free_result($subject_set);

  $subject = [];
  $subject['position'] = $subject_count;
  
?>

<?php $page_title = 'Agregar pelicula'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to List</a>

  <div class="subject new">
    <h1>Agregar Pelicula</h1>

    <form action="<?php echo url_for('/staff/subjects/create.php');?>" method="post">
    <dl>
        <dt>Nombre de director</dt>
        <dd><input type="text" name="director" value="" required /></dd>
      </dl>
      <dl>
        <dt>Nombre de pelicula</dt>
        <dd><input type="text" name="nombre_pelicula" value="" required /></dd>
      </dl>
      <dl>
        <dt>Duracion</dt>
        <dd><input type="text" name="duracion" value="" required /></dd>
      </dl>
      
	  <dl>
        <dt>Horarios</dt>
        <dd><input type="text" name="horarios" value="" required /></dd>
      </dl>
      <dl>
        <dt>Genero</dt>
        <dd><input type="text" name="genero" value="" required /></dd>
      </dl>
      <dl>
      <dl>
        <dt>Descripcion</dt>
        <dd><input type="text" name="descripcion" value="" required /></dd>
      </dl>
	  <dl>
        <dt>Imagen</dt>
        <dd><input type="file" name="imagen" required /></dd>
      </dl>
      <dl>
      <div id="operations">
        <input type="submit" value="Create Movie" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
