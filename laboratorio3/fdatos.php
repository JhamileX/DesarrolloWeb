<?php
    $num= $_GET["num"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Datos</title>
</head>
<body>
    <table>
        <tr>
            <th></th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>CU</th>
            <th colspan="2">Sexo</th>
            <th>Carrera</th>
            
        </tr>
            <form method="POST" action="insertar.php">
            <input type="hidden" name="nu" value="<?=$num?>"/>
                <?php for($i=1;$i<=$num;$i++){ ?>
                    <tr>
                        <td><?= $i ?> </td>
                        <td><input type="text" name="nombre<?=$i?>" ></td>
                        <td><input type="text" name="apellido<?=$i?>" ></td>
                        <td><input type="text" name="cu<?=$i?>" ></td>
                        <td><input type="radio" name="sexo<?=$i?>" value="M">Masculino</td>
                        <td><input type="radio" name="sexo<?=$i?>" value="F">Femenino</td>
                        <td><input type="text" name="carrera<?=$i?>" ></td>
                    </tr>
                <?php } ?>
                <tr>
                    <td colspan="2"><input type="submit"></td>
                </tr>
            </form>
    </table>
    
</body>
</html>