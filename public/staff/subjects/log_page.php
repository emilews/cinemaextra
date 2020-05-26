<?php require_once('../../../private/initialize.php'); ?>



<?php $page_title = 'Subjects'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>
<?php
  if($_SESSION['user']=='guest'){
      session_unset();
      $_SESSION['user'] = 'wea';
      $_SESSION['pass'] = '';
  }
?>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
