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
         background-repeat: no-repeat;
        background-position: center;
      }
      .serpiente{
        background-image: url('serpiente.png');
        background-size: cover;
         background-repeat: no-repeat;
        background-position: center;
      }
      .ficha{
         background-image: url(' ficha.png');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
      }
    </style>
</head>
<body>
 
  <div class="container">
    <h1>practica 7 tablero de la serpiente</h1>
        <form action="practica7.php" method="POST">
          <input type="submit" value="jugar" class="btn btn-success"><hr>
        <div class="row">
            <?php
            $colores =["#666547", "#fb2e01", "#6fcb9f", "#ffe28a", 	"#fffeb3"];
            if(isset($_POST["casilla"])){
              $dado = 48;
              echo "<h2>resultado del dado =".$dado."</h2>";
              $casilla =$dado + intval($_POST["casilla"]);
              echo"<h3>el jugador estaba en la casilla:".intval($_POST["casilla"]). "y paso a la casilla :".$casilla."</h3>";
           
              if($casilla >= 100){
                $casilla = 100;
              }
              if($casilla == 4){
                $casilla = 15;
                echo "<h4>el jugador subio en una escalera a la casilla 16 </h4>";
                
              }
              /*
              if($casilla ==19 ){
                $casilla = ;
                echo "<h4>el jugador subio en una escalera a la casilla</h4>";
                
              }
              if($casilla ==35 ){
                $casilla = ;
                echo "<h4>el jugador subio en una escalera a la casilla</h4>";
                
              }
              if($casilla ==52 ){
                $casilla = ;
                echo "<h4>el jugador subio en una escalera a la casilla</h4>";
                
              }
              if($casilla ==85 ){
                $casilla = ;
                echo "<h4>el jugador subio en una escalera a la casilla</h4>";
                
              }
              if($casilla ==56 ){
                $casilla = ;
                echo "<h4>el jugador subio en una escalera a la casilla</h4>";
                
              }
              //serpientes
              if($casilla ==8 ){ 
                $casilla = ;
                echo "<h4>el jugador subio en una escalera a la casilla</h4>";
                
              }
              if($casilla ==18 ){
                $casilla = ;
                echo "<h4>el jugador subio en una escalera a la casilla</h4>"; 
              }
              if($casilla ==42 ){
                $casilla = ;
                echo "<h4>el jugador subio en una escalera a la casilla</h4>";
              }
              if($casilla ==61 ){
                $casilla = ;
                echo "<h4>el jugador subio en una escalera a la casilla</h4>";
              }
              if($casilla ==87 ){
                $casilla = ;
                echo "<h4>el jugador subio en una escalera a la casilla</h4>"; 
              }
                  */
              if($casilla == 48 ){
                $casilla = 39;
                echo "<h4>el jugador bajo en una serpiente a la casilla 39</h4>";
              }
        
           
            } else{
              $casilla = 0;
            }
            for($i=100; $i>0; $i--){
              if($casilla == $i ){
                echo "<div class='col-1 card m-1 casilla ficha' style='background-color:".$colores[rand(0,4)].";'>".($i+1)."</div>";
               
            }
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
    <input type="hidden" name="casilla" value="<?php echo $casilla; ?>">
    </form>
  </div>
</body>
</html>