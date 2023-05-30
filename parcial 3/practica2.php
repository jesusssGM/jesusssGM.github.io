<?php 
$nombre = $_GET["nombre"];
echo "nombre: ".$nombre ."<br><br>";

$edad = $_GET["edad"];
echo "edad: ".$edad . "<br><br>";

$escuela = $_GET["escuela"];
echo "escuela: ".$escuela . "<br><br>";

$fechadeingreso = $_GET["fechadeingreso"];
echo "fecha de ingreso: ".$fechadeingreso . "<br><br>";

$direccion = $_GET["direccion"];
echo "direccion: ".$direccion . "<br><br>";

if($edad >= 18){
    echo "es mayor de edad". "<br><br>";
}else{
    echo "es menor de edad". "<br><br>";

}

if($escuela == "cetis 107"){

echo "<div style='background-color:blue;'> cetis 107</div>";

}else if($escuela == "cobaes"){
    echo "<div style='background-color:red;'> cobaes</div>";

}else if($escuela == "cbtis 224"){
    echo "<div style='background-color:green;'> cbetis 224</div>";

}

?>