<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practica 3 PHP- integrado en html</title>
</head>
<body>
    <h1>usando php dentro de html</h1><hr>

    <?php
    $alumno ="jose";
    $edad = "16";
    $escuela = "cetis 107";
    $especialidad = "programacion";
    
?>

<form action="">
    <label for="">nombre del alumno</label>
    <input type="text" value=<?php echo $alumno; ?>><br><br>

    <label for="">edad</label>
    <input type="number" value=<?php echo $edad; ?>><br><br>

    
    <input type="submit" value=<?php echo "'inscribirse a '". $especialidad."'"; ?>><br><br>
</form>
    
<h2>calificaciones</h2><hr>
calculo diferencial:<?php echo rand(5,10); ?><br>
fisica:<?php echo rand(5,10); ?><br>
ecologia:<?php echo rand(5,10); ?><br>
ingles:<?php echo rand(5,10); ?><br>
programacion:<?php echo rand(5,10); ?><br>

promedio:<?php echo rand(5,10); ?><br>




</body>
</html>