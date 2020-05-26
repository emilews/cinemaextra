<?php require_once('../../../private/initialize.php'); ?>

<?php
  //$sql = "SELECT * FROM subjects ";
  //$sql .= "ORDER BY position ASC";
  $subject_set = find_all_users();
  
?>

<?php $page_title = 'usuarios'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <div class="subjects listing">
    <h1>Usuarios</h1>

    <div class="actions">
      <a class="action" href="<?php echo url_for('/staff/subjects/log_Reg.php'); ?>">Crear nuevo usuario</a>
    </div>

  	<table class="list">
  	  <tr>
        <th>ID</th>
        <th>Nombre del usuario</th>
        <th>Contraseña</th>
  	    <th>Tipo de usuario</th>
  	    <th>&nbsp;</th>
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>

      <?php while($subject = mysqli_fetch_assoc($subject_set)) { ?>
        <tr>
          <td><?php echo h($subject['id_usuario']); ?></td>
          <td><?php echo h($subject['nombre_usuario']); ?></td>
          <td><?php echo h($subject['contraseña']); ?> </td>
    	  <td><?php echo h($subject['tipo_usuario']); ?></td>
          <td><a class="action" href="<?php echo url_for('/staff/subjects/profile.php?id=' . h(u($subject['id_usuario']))); ?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('/staff/subjects/edituser.php?id=' . h(u($subject['id_usuario']))); ?>">Edit</a></td>
          <td><a class="action" href="<?php echo url_for('/staff/subjects/deleteuser.php?id=' . h(u($subject['id_usuario']))); ?>">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>
	<?php
	mysqli_free_result($subject_set);
	?>
  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
