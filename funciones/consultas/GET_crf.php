<?php
include  "../../conexion.php";  //base para agarrar la conexion general

$rut = $_POST["rut"];

$sql = "SELECT p.nombre , t.correo_electronico
from personal p, trabajador t, consultores_de_riesgo_y_fomento crf
where p.rut = $rut
and p.rut = t.rut  
and t.rut = crf.rut";

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
        echo "<br><hr><br>especialidades:<br>";

        $second = pg_query($coneccion, "SELECT distinct e.nombre 
                                         from especialidades e, tiene ti  
                                         where ti.rut = $rut
                                         and ti.id_especialidad = e.id_especialidades;
        ");
        echo "<br>";
        while($row = pg_fetch_row($second)){
            echo "> $row[0]";
            echo "<br><br>"; 
        }


    }

echo "<br><br><a href='../../index.html'>volver a la pagina de inicio</a>";

?>