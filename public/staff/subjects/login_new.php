
<?php require_once('../../../private/initialize.php'); ?>


<?php $page_title = 'Login'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>
<div class="wrapper">
    

    <div class="logincontent">
    <h2>Login</h2>
    <a class="back-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to List</a>
    <h2>Ingrese sus datos</h2>
        <form action="<?php echo url_for('/staff/subjects/login.php');?>" method="post">
            <div class="form-group">
                <label>Usuario</label>
                <input type="text" name="nombre_usuario" class="form-control" value="">
            </div>    
            <div class="form-group">
                <label>Contraseña</label>
                <input type="password" name="contraseña" class="form-control" value="">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>¿No tienes cuenta? <a href="log_Reg.php">Registrate</a>.</p>
        </form>
    </div> 
</div>    
<?php include(SHARED_PATH . '/staff_footer.php'); ?>