<?php
$clave = "mane"; //la clave del usuario

$conexion = pg_connect("host= "localhost" dbname= "INDAP" port= "5432"
user= "postgres" password= $clave");

$rut = $_POST["rut"];

$sql = "select nombre, id_indap from personal  where rut = .$rut.;";

$insercion = pg_query($conexion,$sql);

var_dump($insercion);
if (!$insercion) { //si no ha ocurrido un error
    echo "<br><br>Miembro guardado con <b>éxito</b>"; 
}else{
    echo "no entro";

}

?>