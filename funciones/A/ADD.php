<?php
$clave = "mane"; //la clave del usuario

$conexion = pg_connect("host= "localhost" dbname= "INDAP" port= "5432"
user= "postgres" password= $clave");

$rut = $_POST["rut"];
$nombre = $_POST["nombre"];
$id_indap = $_POST["id_indap"];

$sql = "insert into personal 
values ('.$id_indap',' .$nombre', .$rut);";

$insercion = pg_query($conexion,$sql);

if (!$insercion) { //si no ha ocurrido un error
    echo "<br><br>Miembro guardado con <b>éxito</b>"; 
}

?>