<?php
include  "../../conexion.php";  //base para agarrar la conexion general

$rut = $_POST["rut"];
$region = $_POST["region"];
$nacionalidad = $_POST["nacionalidad"];
$comuna = $_POST["comuna"];
$sexo = $_POST["sexo"]; 
$date = $_POST["date"];


$sql = "UPDATE public.usuario
SET region='$region',nacionalidad='$nacionalidad',comuna='$comuna' , fecha_de_nacimiento='$date',sexo='$sexo'
    WHERE id = (select id
                from personal p, usuario u 
                where p.rut = u.rut
                and u.rut = $rut
);";

$insercion = pg_query($coneccion,$sql);

echo "<br>";

if($insercion){
    echo "El usuario ha sido modificado exitosamente";
}else{
    echo "No se pudo modificar el usuario, revise que los parametros sean correctos";
}

echo "<br><br><a href='../../index.html'>volver a la pagina de inicio</a>";

?>