<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tarea 5</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="frm">
            <h1 >Tarea 5</h1>
            <ol>
                <li>Ejercicio 1</li><br>
                    <form action="./triplicar.php">
                        Ingrese una cadena: 
                        <input type="text" name="cad"><br><br>
                        <input type="submit" name="submit1">
                    </form>
                    <br><br>
                <li>Ejercicio 2</li><br>
                    <form action="">
                        <table>
                            <tr>
                                <td>N° filas:</td>
                                <td><input type="text" name="row" size="4"></td>
                                <td>Altura:</td>
                                <td><input type="text" name="heigth"  size="4">px <br></td>
                                
                            </tr>
                            <tr>
                                <td>N° columnas:</td>
                                <td><input type="text" name="col" size="4"></td>
                                <td>Anchura:</td>
                                <td><input type="text" name="width" size="4">px <br></td>
                            </tr>
                            
                        </table><br>
                        <input type="submit" name="submit2" >
                    </form><br><br>
                <li>Ejercicio 3</li>
                    <form action="./area.php"><br><br>
                        Ingrese una 'b': 
                        <input type="text" name="b"><br><br>
                        Ingrese una 'h': 
                        <input type="text" name="h"><br><br>
                        <input type="submit" name="submit3">
                    </form>
                    <br><br>
                <li>Ejercicio 4</li><br><br>
                    <form action="./mes.php">
                        Ingrese un numero: 
                        <input type="text" name="num"><br><br>
                        <input type="submit" name="submit4">
                    </form>
                    <br><br>
            </ol>
            
            
    </div>
    <div class="ans" >
        
        <?php 
        
        if(!empty($_GET["submit2"])){?>
        <table width=<?= $_GET["width"]."px"?> heigth=<?=$_GET["heigth"]."px"?> border="1px">
        <?php         
            for($i=0;$i<$_GET["row"];$i++){
                echo "<tr>";
                for($j=0;$j<=$_GET["col"];$j++){
                    $aux=($i==0 or $j==0)?"th":"td";
                    echo "<".$aux.">". ($j==0? ($i==0?"X":$j+$i) : ($i==0? $i+$j : $j*$i) ) . "</".$aux.">";
                    
                }
                echo "</tr>";

            }
        }
        ?>

        </table>
    </div>
    
    
</body>
</html>