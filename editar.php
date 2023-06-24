<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        
    ?>

    <form action="index.php" method="POST">
        <input type="text" name="Codigo" placeholder="Ingrese el Codigo">
        <br/>
        <input type="text" name="Nombre" placeholder="Ingrese el Nombre">
        <br/>
        <input type="text" name="Precio" placeholder="Ingrese el Precio">
        <br/>
        <input type="text" name="Existencia" placeholder="Ingrese el Existencia">
        <br/>
        <input type="hidden" name="accion" value="crear">
        <button type="submit" >Guardar</button>
    </form>
</body>
</html>