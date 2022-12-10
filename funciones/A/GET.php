<?php
include  "../../conexion.php";  //base que crea 

$rut = $_POST["rut"];

$sql = "select nombre, id_indap 
from personal  
where rut = $rut;";

$insercion = pg_query($coneccion,$sql);

if (pg_num_rows($insercion) == 0) { //verifica si el valor existe
    echo "por favor ingrese un valor valido <br><br>";
    echo "<a href='../../index.html'>volver a la pagina anterior</a>";
    exit;

}else{
    $ro = pg_fetch_array($insercion);
     echo $ro["nombre"];

}

?>