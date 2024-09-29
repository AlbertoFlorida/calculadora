<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];
    $mensaje = '';

    // Verificamos si los números son válidos
    if (is_numeric($num1) && is_numeric($num2)) {

        // Operación de suma
        if ($operacion == 'sumar') {
            $resultado = $num1 + $num2;
            $mensaje = "La suma de $num1 y $num2 es: $resultado";
        
        // Operación de resta
        } elseif ($operacion == 'restar') {
            $resultado = $num1 - $num2;
            $mensaje = "La resta de $num1 y $num2 es: $resultado";

        // Operación de multiplicación
        } elseif ($operacion == 'multiplicar') {
            $resultado = $num1 * $num2;
            $mensaje = "La multiplicación de $num1 y $num2 es: $resultado";
        
        // Operación de división
        } elseif ($operacion == 'dividir') {
            if ($num2 != 0) {
                $resultado = $num1 / $num2;
                $mensaje = "La división de $num1 entre $num2 es: $resultado";
            } else {
                $mensaje = "No se puede dividir entre 0.";
            }
        }
    
    // Si no son números válidos
    } else {
        $mensaje = "Por favor, ingrese números válidos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="calculator">
        <h2>Resultado</h2>
        <p><?php echo $mensaje; ?></p>
        <a href="index.html">Volver</a>
    </div>
</body>
</html>
