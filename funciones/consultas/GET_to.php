<?php
include  "../../conexion.php";  //base para agarrar la conexion general

$rut = $_POST["rut"];

$sql = "SELECT p.rut, p.nombre, t.correo_electronico, tdo.rol_e, e.direccion 
from personal p, trabajador t, trabajador_de_oficina tdo, establecimiento e 
where p.rut = $rut
and t.rut = p.rut
and t.rut = tdo.rut 
and tdo.rol_e = e.rol;";

$insercion = pg_query($coneccion,$sql);

echo "<br>";

    // pg_num_rows($insercion) == 0 
    if (!$insercion) { //verifica si el valor existe
        echo "Por favor ingrese un rut valido <br><br>";
    }else{
        $ro = pg_fetch_array($insercion);
        echo "datos del trabajador ";
        echo $ro["nombre"];
        echo ": <br><br> Correo electronico: ";
        echo $ro["correo_electronico"];
        echo "<br> direccion de trabajo: ";
        echo $ro["direccion"];
    }

echo "<br><br><a href='../../index.html'>volver a la pagina de inicio</a>";

?>