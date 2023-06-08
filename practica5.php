<?php

  $cuadro = $_POST["cuadro"];

  for($i=0; $i<count($cuadro); $i++){
    echo $cuadro[$i]."    ";
    if($cuadro[$i] !="X" && $cuadro[$i] !="O" && $cuadro[$i] !=""){
   echo "<h2> solo se permiten x y/o  o </h2>";
   return;
    }

  }
/*
[0][1][2]
[3][4][5]
[6][7][8]
*/
if($cuadro[0] == "X" && $cuadro[1] == "X" && $cuadro[2] == "X"){
  echo"<h1>ganador X</h1>";
  echo"<h1>gano en la primera linea horizontal</h1>";
  echo"<br>";
  echo"<h1>[x][x][x]<br>
           [ ][ ][ ]<br>
           [ ][ ][ ]<br></h1>";
  return;
}else if($cuadro[0] == "O" && $cuadro[1] == "O" && $cuadro[2] == "O"){
  echo"<h1>ganador O</h1>";
  echo"<h1>gano en la primera linea horizontal</h1>";
  echo"<br>";
  echo"<h1>[o][o][o]<br>
           [ ][ ][ ]<br>
           [ ][ ][ ]<br></h1>";
  return;
}
else if($cuadro[3] == "X" && $cuadro[4] == "X" && $cuadro[5] == "X"){
  echo"<h1>ganador X</h1>";
  echo"<h1>gano en la segunda linea horizontal</h1>";
  echo"<br>";
  echo"<h1>[ ][ ][ ]<br>
           [x][x][x]<br>
           [ ][ ][ ]<br></h1>";
  return;
}else if($cuadro[3] == "O" && $cuadro[4] == "O" && $cuadro[5] == "O"){
  echo"<h1>ganador O</h1>";
  echo"<h1>gano en la segunda linea horizontal</h1>";
  echo"<h1>[ ][ ][ ]<br>
           [o][o][o]<br>
           [ ][ ][ ]<br></h1>";
  return;
}
else if($cuadro[6] == "X" && $cuadro[7] == "X" && $cuadro[8] == "X"){
  echo"<h1>ganador X</h1>";
  echo"<h1>gano en la tercera linea horizontal</h1>";
  echo"<h1>[ ][ ][ ]<br>
           [ ][ ][ ]<br>
           [x][x][x]<br></h1>";
  return;
}else if($cuadro[6] == "O" && $cuadro[7] == "O" && $cuadro[8] == "O"){
  echo"<h1>ganador O</h1>";
  echo"<h1>gano en la tercera linea horizontal</h1>";
  echo"<h1>[ ][ ][ ]<br>
           [ ][ ][ ]<br>
           [o][o][o]<br></h1>";
  return;
}else if($cuadro[0] == "X" && $cuadro[4] == "X" && $cuadro[8] == "X"){
  echo"<h1>ganador X</h1>";
  echo"<h1>gano en la primer linea cruzada</h1>";
  echo"<h1>[x][ ][ ]<br>
           [ ][x][ ]<br>
           [ ][ ][x]<br></h1>";
  return;
}else if($cuadro[0] == "O" && $cuadro[4] == "O" && $cuadro[8] == "O"){
  echo"<h1>ganador O</h1>";
  echo"<h1>gano en la primer linea cruzada</h1>";
  echo"<h1>[o][ ][ ]<br>
           [ ][o][ ]<br>
           [ ][ ][o]<br></h1>";
  return;
}else if($cuadro[6] == "X" && $cuadro[4] == "X" && $cuadro[2] == "X"){
  echo"<h1>ganador X</h1>";
  echo"<h1>gano en la SEGUNDA linea cruzada</h1>";
  echo"<h1>[ ][ ][x]<br>
           [ ][x][ ]<br>
           [x][ ][ ]<br></h1>";
  return;
}else if($cuadro[6] == "O" && $cuadro[4] == "O" && $cuadro[2] == "O"){
  echo"<h1>ganador O</h1>";
  echo"<h1>gano en la SEGUNDA linea cruzada</h1>";
  echo"<h1>[ ][ ][o]<br>
           [ ][o][ ]<br>
           [o][ ][ ]<br></h1>";
  return;
}
else if($cuadro[0] == "X" && $cuadro[3] == "X" && $cuadro[6] == "X"){
  echo"<h1>ganador O</h1>";
  echo"<h1>gano en la primera linea vertical</h1>";
  echo"<h1>[x][ ][ ]<br>
            [x][ ][ ]<br>
             [x][ ][ ]<br></h1>";
  return;
}else if($cuadro[0] == "O" && $cuadro[3] == "O" && $cuadro[6] == "O"){
  echo"<h1>ganador O</h1>";
  echo"<h1>gano en la primera linea vertical</h1>";
  echo"<h1>[o][ ][ ]<br>
            [o][ ][ ]<br>
             [o][ ][ ]<br></h1>";
  return;
}else if($cuadro[1] == "X" && $cuadro[4] == "X" && $cuadro[7] == "X"){
  echo"<h1>ganador x</h1>";
  echo"<h1>gano en la segunda linea vertical</h1>";
  echo"<h1>[ ][x[ ]<br>
            [ ][x][ ]<br>
             [ ][x][ ]<br></h1>";
  return;
}else if($cuadro[1] == "O" && $cuadro[4] == "O" && $cuadro[7] == "O"){
  echo"<h1>ganador O</h1>";
  echo"<h1>gano en la segunda linea vertical</h1>";
  echo"<h1>[ ][o][ ]<br>
            [ ][o][ ]<br>
             [ ][o][ ]<br></h1>";
  return;
}else if($cuadro[2] == "X" && $cuadro[5] == "X" && $cuadro[8] == "X"){
  echo"<h1>ganador x</h1>";
  echo"<h1>gano en la tercera linea vertical</h1>";
  echo"<h1>[ ][ ][x]<br>
            [ ][ ][x ]<br>
             [ ][ ][x ]<br></h1>";
  return;
}else if($cuadro[2] == "O" && $cuadro[5] == "O" && $cuadro[8] == "O"){
  echo"<h1>ganador O</h1>";
  echo"<h1>gano en la tercera linea vertical</h1>";
  echo"<h1>[ ][ ][o]<br>
            [ ][ ][o]<br>
             [ ][ ][o]<br></h1>";
  return;
}




?>