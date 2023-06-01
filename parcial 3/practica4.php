<?php
$nombre = $_POST["nombre"];
$calificacion = 0;

$pregunta1 = $_POST["pregunta1"];
$pregunta2 = $_POST["pregunta2"];
$pregunta3 = $_POST["pregunta3"];
$pregunta4 = $_POST["pregunta4"];
$pregunta5 = $_POST["pregunta5"];
$pregunta6 = $_POST["pregunta6"];
$pregunta7 = $_POST["pregunta7"];
$pregunta8 = $_POST["pregunta8"];
$pregunta9 = $_POST["pregunta9"];
$pregunta10 = $_POST["pregunta10"];

echo"<h3> pregunta 1, respuesta seleccionada:(".$pregunta1.")</h3>";
if($pregunta1 == "c"){
$calificacion ++;
echo"<img src='buena.jpg' width='4%'><hr>";

}else{
    echo "<p> la respuesta es (c)</p>";
    echo"<img src='mala.png' width='4%'><hr>";
}
if($pregunta2 == "c"){
    $calificacion ++;
    echo"<img src='buena.jpg' width='4%'><hr>";

}else{
    echo "<p> la respuesta es (c)</p>";
    echo"<img src='mala.png' width='4%'><hr>";
}

if($pregunta3 == "b"){
 $calificacion ++;
        
 echo"<img src='buena.jpg' width='4%'><hr>";

}else{
    echo "<p> la respuesta es (b)</p>";
    echo"<img src='mala.png' width='4%'><hr>";
}

 if($pregunta4 == "c"){ 
    $calificacion ++;
            
    echo"<img src='buena.jpg' width='4%'><hr>";

}else{
    echo "<p> la respuesta es (c)</p>";
    echo"<img src='mala.png' width='4%'><hr>";
}
 if($pregunta5 == "a"){
  $calificacion ++;
             
  echo"<img src='buena.jpg' width='4%'><hr>";

}else{
    echo "<p> la respuesta es (a)</p>";
    echo"<img src='mala.png' width='4%'><hr>";
}
 if($pregunta6 == "b"){
  $calificacion ++;
                    
  echo"<img src='buena.jpg' width='4%'><hr>";

}else{
    echo "<p> la respuesta es (b)</p>";
    echo"<img src='mala.png' width='4%'><hr>";
}
if($pregunta7 == "c"){
$calificacion ++;
                        
echo"<img src='buena.jpg' width='4%'><hr>";

}else{
    echo "<p> la respuesta es (c)</p>";
    echo"<img src='mala.png' width='4%'><hr>";
}
 if($pregunta8 == "c"){
 $calificacion ++;
                            
  echo"<img src='buena.jpg' width='4%'><hr>";

}else{
    echo "<p> la respuesta es (c)</p>";
    echo"<img src='mala.png' width='4%'><hr>";
}
  if($pregunta9 == "c"){
 $calificacion ++;
                                
echo"<img src='buena.jpg' width='4%'><hr>";

}else{
    echo "<p> la respuesta es (c)</p>";
    echo"<img src='mala.png' width='4%'><hr>";
}
 if($pregunta10 == "c"){
$calificacion ++;
                                    
echo"<img src='buena.jpg' width='4%'><hr>";

}else{
    echo "<p> la respuesta es (c)</p>";
    echo"<img src='mala.png' width='4%'><hr>";
}




echo($calificacion);
?>