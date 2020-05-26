<?php require_once('../../../private/initialize.php'); ?>



<?php $page_title = 'Subjects'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>
<?php
  if($_SESSION['user']!='guest'){
      session_destroy();
      redirect_to(url_for('/staff/subjects/inicio.php'));
  }
?>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>