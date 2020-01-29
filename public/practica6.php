<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practica 6</title>
    <?php $array_numeros = [1,2,3,4,5,6,7,8,9,10]; ?>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Numero</th>
                <th>Link de suma</th>
                <th>Link de multiplicacion</th>
            </tr>
        </thead>
        <tbody>
            <!-- Dibujamos dinamicamente el cuerpo de la tabla-->
           <?php for($i = 0 ; $i <= count($array_numeros) - 1; $i++){ ?>
                <?php echo '<tr style="text-align:center;">'; ?>
                    <?php echo '<td name='.$i.'>'.$array_numeros[$i].'</td>'; ?>
                    <?php echo '<td><a href="../public/operaciones/suma.php?numero='.($i + 1).'">Suma</a></td>' ;?>
                    <?php echo '<td><a href="../public/operaciones/multiplicacion.php?numero='.($i+1).'">Multiplicaci&oacute;n</a></td>' ;?>
                <?php echo '</tr>'; ?>
           <?php } ?> 
           
        </tbody>
    </table>
</body>
</html>