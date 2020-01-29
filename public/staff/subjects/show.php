<?php 
    require_once('../../../private/initialize.php');//Cargamos el archivo initialize.php para que se carguen las funciones
    $id = isset($_GET['id']) ? $_GET['id'] : '1';
    //$id = $_GET['id'] ?? '1'; //PHP > 7.0

    echo htmlspecialchars($id);//htmlspecialchars -> Convierte caracteres especiales en entidades HTML
?>

<br><a href="show.php?name=<?php echo u('John Doe'); ?>">Link</a>
<br><a href="show.php?name=<?php echo u('Widgets&More'); ?>">Link</a>
<br><a href="show.php?name=<?php echo u('!#*?'); ?>">Link</a>