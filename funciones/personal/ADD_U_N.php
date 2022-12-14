<?php
include  "../../conexion.php";  //base para agarrar la conexion general

$rut = $_POST["rut"];
$nombre = $_POST["nombre"]; 
$id = $_POST["id"];
$region = $_POST["region"];
$nacionalidad = $_POST["nacionalidad"];
$comuna = $_POST["comuna"];
$genero = $_POST["genero"];
$date = $_POST["date"];

$profesion = $_POST["profesion"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$emprendedor = $_POST["emprendedor"];

$sql = "INSERT INTO public.personal (nombre,rut)
VALUES ('$nombre',$rut);

INSERT INTO public.usuario (id, region, nacionalidad, comuna, sexo,fecha_de_nacimiento, rut)
VALUES ($id, '$region', '$nacionalidad', '$comuna', '$genero', '$date',$rut);

INSERT INTO public.natural (id,profesion,direccion,telefonotipo_,empren)
	VALUES ($id,'$profesion','$direccion',$telefono,'$emprendedor');

";

$insercion = pg_query($coneccion,$sql);

if($insercion){
    echo "Usuario Natural agregado exitosamente";
}else{
    echo "El usuario no pudo agregarse, revise que los parametros sean correctos";
}
echo "<br><a href='../../index.html'>volver a la pagina de inicio</a>";

?>