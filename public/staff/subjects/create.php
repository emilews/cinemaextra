<?php require_once('../../../private/initialize.php'); 

if($_POST['menu_name'] != null && $_POST['position'] != null && $_POST['visible'] != null){
    $menu_name= $_POST['menu_name'];
    $position = $_POST['position'];
    $visible = $_POST['visible'];
} else {
    echo 'No se mando nada';
}

?>

<?php include(SHARED_PATH . '/staff_header.php'); ?>

<?php echo '<h3>Menu name: '.$menu_name.'</h3>'; ?>
<?php echo '<h3>Position: '.$position.'</h3>'; ?>
<?php echo '<h3>Visible: '.$visible.'</h3>'; ?>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>