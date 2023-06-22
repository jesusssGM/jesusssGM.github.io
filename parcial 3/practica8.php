<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practica 8 loteria</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        .ficha{
            background-image: url('ficha.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }
        .color{
            opacity: 0.7;

        }
        </style>
</head>
<body>
   
    <div class="container">
    <h1>loteria</h1><hr>
    <form action="practica8.php" method="POST">

       <?php 
       if(isset($_POST["carta1"])){
        $carta1 = $_POST["carta1"];
        $carta2 = $_POST["carta2"];

        $carta = rand(1,54);
        $cartas_dadas =[];
        array_push($cartas_dadas, $cartas);
       }else{
        $carta1 = [];
        $total=0;
        while($total < 16){

            $numero = rand(1,54);
            if(array_search($numero, $carta1) === false){
                $carta1[$total]= $numero;
                $total ++;
            }
        }
        $carta2 = [];
    $total=0;
    while($total < 16){

        $numero = rand(1,54);
        if(array_search($numero, $carta2) === false){
            $carta2[$total]= $numero;
            $total  ++;
        }
    }
    }
    
?>

    <input type="submit" value="dar carta" name="carta" class="btn btn-success">
           <div class="row">
            <div class="col-6">
                <div class="row m-1">
              
                <?php 
                //pintar carta 1
                for($i=0; $i<16; $i++){
                    $numero = rand(1,54);
                    echo "<div class='col-3 p-0 ficha color'><img src='fotos_loteria/".$carta1[$i].".jpeg' class='img-thumbnail'></div>";
                   echo "<input type='hidden' name='carta1[]' value='".$carta1[$i]."'>";
                    
                }

                ?>
</div>
            </div>
            <div class="col-6">
                <div class="row m-1">
              
                <?php 
                //pintar carta 1
                for($i=0; $i<16; $i++){
                    $numero = rand(1,54);
                    echo "<div class='col-3 p-0 ficha color'><img src='fotos_loteria/".$carta2[$i].".jpeg' class='img-thumbnail'></div>";
                    echo "<input type='hidden' name='carta2[]' value='".$carta2[$i]."'>";
                    
                }

                ?>
</div>
            </div>
            </div>
        </div>
       
        
        </form>
    </div>
    
</body>
</html>