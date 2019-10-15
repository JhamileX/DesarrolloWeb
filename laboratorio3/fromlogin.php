<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
<form  method="post" action="autenticar.php">
    <label for="txtUser">Usuario</label>
    <input type="text" name="txtUser" value="<?= $_COOKIE['user']?> " /> <br>
    <label for="txtpassword">Contraseña</label> 
    <input type="password" name="txtPassword" value="<?=$_COOKIE['pass']?>" /><br>
    <input type="checkbox" name="recUser" value="recordar" <?= $_COOKIE['chkuser']?> >
    <label for="rUser">Recordar Usuario</label><br>   
    <input type="checkbox" name="recPass" value="recordar" <?= $_COOKIE['chkpass']?> >
    <label for="rPass">Recordar Contraseña</label><br>
    <input type="submit" name="button" id="button" value="Aceptar" />    
    <br/>
</form>
</body>
</html>
