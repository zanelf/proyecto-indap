<?php
include  "../../conexion.php";  //base para agarrar la conexion general

$rut = $_POST["rut"];

$sql = " select *
from juridico n, usuario u, personal p 
where p.rut = 1566
and p.rut = u.rut 
and u.id = n.id; ";

$insercion = pg_query($coneccion,$sql);

echo "<br>";
    // pg_num_rows($insercion) == 0 
    if (!$insercion) { //verifica si el valor existe
        echo "Por favor ingrese un rut valido <br><br>";
    }else{
        $ro = pg_fetch_array($insercion);
        echo "datos del trabajador ";
        echo $ro["nombre"];

        echo ": <br><br> telefono: ";
        echo $ro["telefono"];

        echo ": <br><br> giro: ";
        echo $ro["giro"];
        
        echo ": <br><br> razon social: ";
        echo $ro["razon_social"];

        echo $ro["direccion"];
        echo ": <br><br> direccion: ";

        echo ": <br><br> region: ";
        echo $ro["region"];

        echo ": <br><br> nacionalidad: ";
        echo $ro["nacionalidad"];

        echo ": <br><br> comuna: ";
        echo $ro["comuna"];
        


    }

echo "<br><br><a href='../../index.html'>volver a la pagina de inicio</a>";

?>