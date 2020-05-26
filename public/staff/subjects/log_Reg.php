<?php require_once('../../../private/initialize.php'); ?>

<?php

?>

<?php $page_title = 'Registro'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>
<div class="card mx-auto" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">Registro</h5>
        <form action="<?php echo url_for('/staff/subjects/register.php');?>" method="post">
            
            <label>Usuario</label>
            <input type="text" name="nombre_usuario" class="form-control" value="" required>
       
            <label>Contraseña</label>
            <input type="password" name="contraseña" class="form-control" value="" required>
       
        
            <label>Confirma contraseña</label>
            <input type="password" name="confirm_password" class="form-control" value="" required>
        
        
        <?php 
        if($_SESSION['user_type']=='admin'){
            echo '<label>Tipo de usuario</label><input type="text" name="tipo_usuario" class="form-control" value="">';
        }
        ?>
        
            <input type="submit" class="btn btn-primary" value="Submit">
            <input type="reset" class="btn btn-default" value="Reset">
       
        <p>¿Ya tienes cuenta? <a href="login_new.php">Ingresa aquí</a>.</p>
            </form>
    </div>
</div>
</body>


<?php include(SHARED_PATH . '/staff_footer.php'); ?>
