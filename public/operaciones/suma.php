<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php $numeros = [1 ,2, 3, 4, 5, 6, 7, 8, 9, 10]; ?>
</head>
<body>
    <h1>Suma</h1>
    <table>
        <?php for ($i=1; $i <= count($numeros) ; $i++) {?> 
            <?php echo '<tr><td>'.$i.'</td><td> + </td><td>'.$_GET['numero'].'</td><td> = </td><td>'.($i + $_GET['numero']).'</td></tr>'; ?>
        <?php }?>
    </table>
</body>
</html>