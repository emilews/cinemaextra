<?php
  if(!isset($page_title)) { $page_title = ''; }
  session_start();
  if(!isset($_SESSION['user'])){
    echo 'wea';
    $_SESSION['user'] = 'guest';
    $_SESSION['user_type'] = 'guest';
  }
?>


<!doctype html>

<html lang="en">
  <head>
    <title><?php echo h($page_title); ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/staff.css'); ?>" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="<?php echo url_for('/scripts/filter.js'); ?>"></script>
  </head>

  <body>
    
    <div id="header" align="center">
			<nav> <!-- Aqui estamos iniciando la nueva etiqueta nav -->
				
			</nav><!-- Aqui estamos cerrando la nueva etiqueta nav -->
    </div>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="<?php echo url_for('/staff/subjects/inicio.php'); ?>">Inicio</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">Cartelera</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo url_for('/staff/subjects/contacto.php'); ?>">Contacto</a></li>
        </ul>
    </div>
    <div class="mx-auto order-0">
        <a class="navbar-brand mx-auto" href="#">CinemaExtra!</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <?php
            if($_SESSION['user'] != 'admin'){
                echo '<li class="nav-item"><a class="nav-link" href="'. strval(url_for('/staff/subjects/login_new.php')).'">Log In</a></li>';
            }else if($_SESSION['user']=='admin'){
              echo '<li class="nav-item"><a class="nav-link" href="'. strval(url_for('/staff/subjects/new.php')).'">Agregar película</a></li>';
              echo '<li class="nav-item"><a class="nav-link" href="'. strval(url_for('/staff/subjects/logout_page.php')).'">Log Out</a></li>';
            }
        ?>
        </ul>
    </div>
</nav>

      <br><br><br>
    
