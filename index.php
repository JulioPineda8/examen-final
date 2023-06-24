<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <h1>Producto</h1>
    <?php 

        $pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
        $conexion = new PDO("mysql:host=localhost;dbname=Recuperacion_0907_23_25431", "root", "", $pdo_options);

        if (isset($_POST["accion"]) &&
        $_POST["accion"] == "crear"){
            $insert = $conexion->prepare("INSERT INTO producto (Codigo, Nombre, Precio, Existencia) VALUES (:Codigo,:Nombre,:Precio,:Existencia)");

            $insert->bindValue("Codigo", $_POST["Codigo"]);
            $insert->bindValue("Nombre", $_POST["Nombre"]);
            $insert->bindValue("Precio", $_POST["Precio"]);
            $insert->bindValue("Existencia", $_POST["Existencia"]);

            $insert->execute();
        }

        $select = $conexion->query("SELECT Codigo, Nombre, Precio, Existencia from producto");
        ?>
        <a href="crear.php">Crear Nuevo</a>
        <table border="1">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Existencia</th>
                    <th>Formulario</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($select->fetchAll() as $registro) { ?>
                    <tr>
                        <td> <?php echo $registro["Codigo"] ?> </td>
                        <td> <?php echo $registro["Nombre"] ?> </td>
                        <td> <?php echo $registro["Precio"] ?> </td>
                        <td> <?php echo $registro["Existencia"] ?> </td>
                        <td>
                            <form action="editar.php" method="POST">
                                <button type="submit">Editar</button>
                                <input type="hidden" name="Codigo" value="<?php echo $registro["Codigo"] ?>">
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
</body>
</html>