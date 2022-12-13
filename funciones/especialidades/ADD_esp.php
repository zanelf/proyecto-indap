<?php
include  "../../conexion.php";  //base para agarrar la conexion general

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];

$sql = "INSERT INTO public.especialidades (id_especialidades,nombre,descripcion)
VALUES ($id,'$nombre','$descripcion');";

$insercion = pg_query($coneccion,$sql);

echo "<br>";

if($insercion){
    echo "Especialidad agregada exitosamente";
}else{
    echo "No se pudo agregar la especialidad, revise que los parametros sean correctos";
}

echo "<br><br><a href='../../index.html'>volver a la pagina de inicio</a>";

?>