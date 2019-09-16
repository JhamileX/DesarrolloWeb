<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        switch($_GET["sele"]){
            case "1":
    ?>

        <form action="fibo.php">
            <label for="n">Introduzca N:</label>
            <input type="text" name="num">
            <input type="submit">
        </form>

        <?php  
            break;
            case "2":
        ?>

        <form action="menor.php">
            <label for="n1">Introduzca 1er numero:</label>
            <input type="text" name="num1"><br><br>
            <label for="n2">Introduzca 2do numero:</label>
            <input type="text" name="num2"><br><br>
            <label for="n3">Introduzca 3er numero:</label>
            <input type="text" name="num3"><br><br>
            <input type="submit">
        </form>

        <?php  
            break;
            case "3":
        ?>

        <form action="piramide.php">
            <label for="ca">Introduzca una Cadena:</label>
            <input type="text" name="cad">
            <input type="submit">
        </form>

    <?php  
        }
    ?>
    
</body>
</html>


