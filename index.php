<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>

<form method="POST">
    Nombre: <input type="text" name="nombre"><br>
    Edad: <input type="text" name="edad"><br>
    <input type="submit" value="Enviar">
</form>

<?php
if ($_POST) {
    foreach ($_POST as $clave => $valor) {
        echo "El valor de $clave es: $valor <br>";
    }
}
?>

</body>
</html>