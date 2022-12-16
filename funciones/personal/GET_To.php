<?php
include  "../../conexion.php";  //base para agarrar la conexion general

$rut = $_POST["rut"];

$sql = "SELECT nombre
from Trabajador  
where rut = $rut;";

$insercion = pg_query($coneccion,$sql);
    // pg_num_rows($insercion) == 0 
    if (!$insercion) { //verifica si el valor existe
        echo "Por favor ingrese un rut valido <br><br>";
        echo "<a href='../../index.html'>volver a la pagina anterior</a>";
    }else{
        $ro = pg_fetch_array($insercion);
        echo "la persona ";
        echo $ro["nombre"];
        echo " es un Trabajador de la plataforma INDAP";
    }

?>
