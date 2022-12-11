<?php
include  "../../conexion.php";  //base para agarrar la conexion general

$rut = $_POST["rut"];

$sql = "SELECT nombre
from personal  
where rut = $rut;";

$insercion = pg_query($coneccion,$sql);
    // pg_num_rows($insercion) == 0 
    if (!$insercion) { //verifica si el valor existe
        echo "por favor ingrese un valor valido <br><br>";
        echo "<a href='../../index.html'>volver a la pagina anterior</a>";
    }else{
        $ro = pg_fetch_array($insercion);
        echo "la persona ";
        echo $ro["nombre"];
        echo " es un usuario de la plataforma INDAP";
    }

?>