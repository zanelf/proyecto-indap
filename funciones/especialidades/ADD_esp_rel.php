<?php
include  "../../conexion.php";  //base para agarrar la conexion general

$id = $_POST["id"];
$rut = $_POST["rut"];

$sql = "INSERT INTO public.tiene (id_especialidad,rut)
VALUES ($id,$rut);";

$insercion = pg_query($coneccion,$sql);

echo "<br>";

if($insercion){
    echo "Especialidad agregada exitosamente";
}else{
    echo "No se pudo agregar la especialidad, revise que los parametros sean correctos";
}

echo "<br><br><a href='../../index.html'>volver a la pagina de inicio</a>";

?>