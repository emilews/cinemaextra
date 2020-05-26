<?php require_once('../../../private/initialize.php'); ?>

<?php
  //$sql = "SELECT * FROM subjects ";
  //$sql .= "ORDER BY position ASC";
  $subject_set = find_all_subjects();
  
?>

<?php $page_title = 'Subjects'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>
<h1> PROYECTO REALIZADO PARA LA MATERIA DE SISTEMAS DE INFORMACIÓN BASADOS EN WEB <br> 
POR: <br>
BUZANI RAMIREZ MIGUEL ANGEL correo: miguelbuzani@gmail.com  <br> 
RAMOS SOTO BRYANDA correo: bryanda.ramos.101v@gmail.com </h1>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
