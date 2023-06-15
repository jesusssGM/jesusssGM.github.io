<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>practica 7</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
      .casilla{
        height: 45px;
      }
      .escalera{
        background-image: url('escalera.png');
        background-size: cover;
      }
      .serpiente{
        background-image: url('serpiente.png');
        background-size: cover;
      }
    </style>
</head>
<body>
  <?php
  $colores =["#666547", "#fb2e01", "#6fcb9f", "#ffe28a", 	"#fffeb3"];
  ?>
  <h1>practica 7</h1>
  <div class="container">
    <h1>practica 7 tablero de la serpiente</h1>
        <form action="">
        <div class="row">
            <?php
            for($i=99; $i>-1; $i--){
              if($i == 4 ||$i == 19 || $i == 35 || $i == 52 || $i == 85 || $i == 46  ){
                echo "<div class='col-1 card m-1 casilla escalera' style='background-color:".$colores[rand(0,4)].";'>".($i+1)."</div>";
               
            }if($i == 8 ||$i == 18 || $i == 42 || $i == 61 || $i == 87 || $i == 48  ){
              echo "<div class='col-1 card m-1 serpiente' style='background-color:".$colores[rand(0,4)].";'>".($i+1)."</div>"; 

            }
            else{
              echo "<div class='col-1 card m-1 casilla' style='background-color:".$colores[rand(0,4)].";'>".($i+1)."</div>";
            }}
            ?>
       
    </div>
    </form>
  </div>
</body>
</html>