<?php require_once('../../../private/initialize.php'); ?>

<?php
// $id = isset($_GET['id']) ? $_GET['id'] : '1';
$id = $_GET['id'] ?? '1'; // PHP > 7.0


$subject = find_subject_by_id($id);
?>

<?php $page_title = 'Show Subject'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to List</a>

  <div class="subject show">
    
	<h1>Movie: <?php echo $subject['nombre_pelicula']; ?></h1>
	<table class="list">
            <tr>
              <th>Image</th>
              <th>Content</th>
            </tr>
      
             <tr>
              <td><img src="<?php echo url_for("/images/".$subject['imagen']); ?>"></td>
              <td>
                <?php echo $subject['director']; ?></br>
                <?php echo $subject['nombre_pelicula']; ?></br>
                <?php echo $subject['duracion']; ?></br>
				        <?php echo $subject['horarios']; ?></br>
                <?php echo $subject['genero']; ?></br>
                <?php echo $subject['descripcion']; ?></br>
                <?php
                    if($_SESSION['user_type']=='admin'){
                      echo '<a class="action" href="'. strval(url_for('/staff/subjects/edit.php?id=' . u($subject['id_pelicula']))).'">Edit</a></br>';
                      echo '<a class="action" href="'. strval(url_for('/staff/subjects/delete.php?id=' . u($subject['id_pelicula']))).'">Delete</a></br>';
                    }
                  ?>
                
                
              </td>
            </tr>
        </table>

</div>
