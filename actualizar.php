<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ACTUALIZAR </title>
  </head>
  <body>
  <form class="" action="actualizarDB.php" method="post">
    
      Equipo: <input type="text" name="nombre" value="<?=$_GET['nombre']?>"><br><br>
      Ciudad: <input type="text" name="ciudad" value="<?=$_GET['ciudad']?>"><br><br>
      Conferencia: <input type="text" name="conferencia" value="<?=$_GET['conferencia']?>"><br><br>
      Division: <input type="text" name="division" value="<?=$_GET['division']?>"><br><br>

    <input type="submit" name="" value="Enviar">
  </form>
  </body>
</html>
