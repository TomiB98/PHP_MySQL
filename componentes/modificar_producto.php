<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../estilos.css">
</head>

<body>
    <div class="container">
        <section>
            <h3>Modificar Producto!</h3>

            <?php
            include('../clases/base_datos.php');
            include('../clases/producto.php');
            include('conexion_clases.php');

            $base = new Basedatos(SERVIDOR, USUARIO, PASS, BASE);
            $prod = new Producto($base);

            $prod_a_modificar = $prod->seleccionar_producto($_GET['codigo']);
            ?>

            <form class="newProd" action="guardar_prodMod.php" method="POST">
                <input type="hidden" name="codigo" value="<?php echo $prod_a_modificar[0]['codigo'] ?>">
                <input class="inputNewProd" name="producto" type="text" placeholder="Nombre" value="<?php echo $prod_a_modificar[0]['producto'] ?>" required maxlength="30">
                <textarea class="inputNewProd" name="descrip" id="" cols="0" rows="5" placeholder="Descripcion del producto" required maxlength="255"><?php echo $prod_a_modificar[0]['descripcion'] ?></textarea>
                <input class="inputNewProd" name="precio" type="number" step="0.01" placeholder="Precio" value="<?php echo $prod_a_modificar[0]['precio'] ?>" pattern="^\d{1,8}(\.\d{1,2})?$">
                <div class="submitComentario">
                    <button type="submit" class="submitUnidad1">Guardar<br>📥</button>
                </div>
            </form>

        </section>
    </div>
</body>

</html>