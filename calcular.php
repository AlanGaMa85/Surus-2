<?php
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    
    $total = $precio * $cantidad
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Boleta</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Total a pagar:</h1>
    <p>Producto : <?php echo $producto;?></p>
    <p>Producto : <?php echo $precio;?></p>
    <p>Producto : <?php echo $cantidad;?></p>
    <p>Total : <?php echo $total;?></p>
</body>
</html>