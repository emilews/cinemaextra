<?php require_once('../../../private/initialize.php'); ?>

<?php
// $id = isset($_GET['id']) ? $_GET['id'] : '1';
$id = $_GET['id'] ?? '1'; // PHP > 7.0



?>

<?php $page_title = 'Show Subject'; ?>
<?php include(SHARED_PATH . '/staff_header.php');
if($id == 1){
  $subject = find_user_by_name($_SESSION['user']); 
}else{
  $subject = find_user_by_id($id);
}

?>



<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to List</a>

  <div class="subject show">
    
	<h1>User: <?php echo h($subject['nombre_usuario']); ?></h1>
	<table class="list">
            <tr>
              <th>Image</th>
              <th>Content</th>
            </tr>
      
             <tr>
              <td><img src="<?php echo url_for("/images/".$subject['imagen']);?>"></td>
              <td>
                <?php echo $subject['nombre_usuario']; ?></br>
                <?php echo $subject['tipo_usuario']; ?></br>
                <?php
                  if($_SESSION['user_type']=='admin'){
                    echo '<a class="action" href="'. strval(url_for('/staff/subjects/edituser.php?id=' . u($subject['id_usuario']))).'">Edit</a></br>';
                    echo '<a class="action" href="'. strval(url_for('/staff/subjects/deleteuser.php?id=' . u($subject['id_usuario']))).'">Delete</a></br>';
                  }else{
                    
                  }
                ?>
              </td>
            </tr>
        </table>

</div>
