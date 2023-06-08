<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>juego del ahorcado</title>
    <link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>
    <?php
    $nombre = $_POST["jugador"];
    $palabra = $_POST["palabra"];
    $vidas = $_POST["vidas"];
    ?>


    <div class="container">
        <div class="row">
            <h1>juego del ahorcado</h1><hr>
            <h3>nombre del jugador: <?php echo $nombre; ?></h3>
            <?php
            $letras = str_split($palabra); 
            for($i=0; $i<(count($letras)); $i++){
                echo "<input type='text' name='frase[]'>";
            }
            ?>
            <div class= "row mt-4">
            <input type="submit" value="letra" style="width: 10%;">
            <input type="submit" value="enviar letra" class="bnt bnt-primary" style="width: 10%;">
            </div>
        </div>

    </div>
    



    <script src="js/jquery-3.6.3.js"></script>
  <script src="js/bootstrap.bundle.js"></script>
</body>
</html>