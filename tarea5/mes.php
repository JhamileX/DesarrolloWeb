<?php
    $array = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiempbre","Octubre","Noviembre","Diciembre");
?>
<form action="#">
    <?php for($i=0;$i<12;$i++){ ?>
    <br>
        <input type="checkbox" name="transporte" value="1" <?= $i+1==$_GET["num"]? "checked":""?> > <?= $array[$i];
    } ?>
    
</form>
