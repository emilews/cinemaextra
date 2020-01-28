<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h2><?php echo $_GET['etapa']; ?></h2>
    <h3><?php echo gettype($_GET['etapa']); ?></h1>
    <h3>Convirtiendo...</h3>
    
    <?php $etapa_como_entero = (int) $_GET['etapa']?>

    <h2><?php echo $etapa_como_entero; ?></h2>
    <h3><?php echo gettype($etapa_como_entero); ?></h1>
</body>
</html>