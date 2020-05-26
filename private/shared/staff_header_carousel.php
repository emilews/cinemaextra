<?php
  if(!isset($page_title)) { $page_title = 'Staff Area'; }
?>

<!doctype html>

<html lang="en">
  <head>
    <title>GBI - <?php echo h($page_title); ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/carousel.css'); ?>" />
    <script src="<?php echo url_for('/scripts/filter.js'); ?>"></script>
  </head>

  <body>
    <div align="center"><h1>Movie Nights Cinema</h1></div>
  <div id="header">
			<nav> <!-- Aqui estamos iniciando la nueva etiqueta nav -->
				<ul class="nav">
					<li><a href="<?php echo url_for('/staff/subjects/inicio.php'); ?>">Inicio</a></li>
					<li><a href="<?php echo url_for('/staff/subjects/index.php'); ?>">Cartelera</a>
					
					</li>
					<li><a href="<?php echo url_for('/staff/subjects/acerca.php'); ?>">Acerca de</a>
						
					</li>
					<li><a href="<?php echo url_for('/staff/subjects/contacto.php'); ?>">Contacto</a></li>
				</ul>
			</nav><!-- Aqui estamos cerrando la nueva etiqueta nav -->
		</div>
 
 </ul>
      
	  </body>
      <br><br><br><br><br><br><br>
    
