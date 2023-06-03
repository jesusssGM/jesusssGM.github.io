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

echo"<h2> nombre del alumno: ".$nombre."</h2>";

echo"<h3> pregunta 1, respuesta seleccionada:(".$pregunta1.")</h3>";
if($pregunta1 == "c"){
$calificacion ++;
echo"<img src='buena.jpg' width='4%'><hr>";

}else{
    echo "<p> la respuesta es (c)</p>";
    echo"<img src='mala.png' width='4%'><hr>";
}
echo"<h3> pregunta 2, respuesta seleccionada:(".$pregunta2.")</h3>";
if($pregunta2 == "c"){
    $calificacion ++;
    echo"<img src='buena.jpg' width='4%'><hr>";

}else{
    echo "<p> la respuesta es (c)</p>";
    echo"<img src='mala.png' width='4%'><hr>";
}
echo"<h3> pregunta 3, respuesta seleccionada:(".$pregunta3.")</h3>";
if($pregunta3 == "b"){
 $calificacion ++;
        
 echo"<img src='buena.jpg' width='4%'><hr>";

}else{
    echo "<p> la respuesta es (b)</p>";
    echo"<img src='mala.png' width='4%'><hr>";
}
echo"<h3> pregunta 4, respuesta seleccionada:(".$pregunta4.")</h3>";
 if($pregunta4 == "c"){ 
    $calificacion ++;
            
    echo"<img src='buena.jpg' width='4%'><hr>";

}else{
    echo "<p> la respuesta es (c)</p>";
    echo"<img src='mala.png' width='4%'><hr>";
}
echo"<h3> pregunta 5, respuesta seleccionada:(".$pregunta5.")</h3>";
 if($pregunta5 == "a"){
  $calificacion ++;
             
  echo"<img src='buena.jpg' width='4%'><hr>";

}else{
    echo "<p> la respuesta es (a)</p>";
    echo"<img src='mala.png' width='4%'><hr>";
}
echo"<h3> pregunta 6, respuesta seleccionada:(".$pregunta6.")</h3>";
 if($pregunta6 == "b"){
  $calificacion ++;
                    
  echo"<img src='buena.jpg' width='4%'><hr>";

}else{
    echo "<p> la respuesta es (b)</p>";
    echo"<img src='mala.png' width='4%'><hr>";
}
echo"<h3> pregunta 7, respuesta seleccionada:(".$pregunta7.")</h3>";
if($pregunta7 == "c"){
$calificacion ++;
                        
echo"<img src='buena.jpg' width='4%'><hr>";

}else{
    echo "<p> la respuesta es (c)</p>";
    echo"<img src='mala.png' width='4%'><hr>";
}
echo"<h3> pregunta 8, respuesta seleccionada:(".$pregunta8.")</h3>";
 if($pregunta8 == "c"){
 $calificacion ++;
                            
  echo"<img src='buena.jpg' width='4%'><hr>";

}else{
    echo "<p> la respuesta es (c)</p>";
    echo"<img src='mala.png' width='4%'><hr>";
}
echo"<h3> pregunta 9, respuesta seleccionada:(".$pregunta9.")</h3>";
  if($pregunta9 == "c"){
 $calificacion ++;
                                
echo"<img src='buena.jpg' width='4%'><hr>";

}else{
    echo "<p> la respuesta es (c)</p>";
    echo"<img src='mala.png' width='4%'><hr>";
}
echo"<h3> pregunta 10, respuesta seleccionada:(".$pregunta10.")</h3>";
 if($pregunta10 == "c"){
$calificacion ++;
                                    
echo"<img src='buena.jpg' width='4%'><hr>";

}else{
    echo "<p> la respuesta es (c)</p>";
    echo"<img src='mala.png' width='4%'><hr>";
}

if($calificacion >= 0 && $calificacion <= 5){
echo"<h3> calificacion:".$calificacion.", no aprobado.</h3>";
echo "<img src='reprobado.jpg' width='10%'><hr>";
}else if($calificacion>= 6 && $calificacion<= 10){
echo"<h3> calificacion:".$calificacion.", aprobado.</h3>";
echo "<img src='aprobado.jpg' width='10%'><hr>";

}




?>