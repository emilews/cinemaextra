<?php

  require_once('../../../private/initialize.php');

  if(!isset($_GET['id'])) {
    redirect_to(url_for('/staff/pages/index.php'));
  }
  $id = $_GET['id'];

  $subject = find_subject_by_id($id);

  if(is_post_request()){
    $result = delete_subject($id);
    redirect_to(url_for('/staff/subjects/index.php'));
  }else{
    $subject = find_subject_by_id($id);
  }

?>

<?php $page_title = 'Delete Movie'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to List</a>

  <div class="subject edit">
    <h1>Delete Subject</h1>

    <form action="<?php echo url_for('/staff/subjects/delete.php?id=' . u($id)); ?>" method="post">
      <h2>Are you sure you want to delete "<?php echo $subject['nombre_pelicula']?>"  </h2>
      <div id="operations">
        <input type="submit" value="Delete Movie" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
