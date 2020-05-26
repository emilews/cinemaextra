<?php

  require_once('../../../private/initialize.php');

  if(!isset($_GET['id'])) {
    redirect_to(url_for('/staff/pages/index.php'));
  }
  $id = $_GET['id'];

  $subject = find_user_by_id($id);

  if(is_post_request()){
    $result = delete_user($id);
    redirect_to(url_for('/staff/subjects/usuarios.php'));
  }else{
    $subject = find_user_by_id($id);
  }

?>

<?php $page_title = 'Eliminar usuario'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to List</a>

  <div class="subject edit">
    <h1>Delete Subject</h1>

    <form action="<?php echo url_for('/staff/subjects/deleteuser.php?id=' . u($id)); ?>" method="post">
      <h2>Are you sure you want to delete "<?php echo $subject['nombre_usuario']?>"  </h2>
      <div id="operations">
        <input type="submit" value="Eliminar usuario" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
