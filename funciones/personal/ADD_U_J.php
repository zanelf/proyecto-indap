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

$telefono = $_POST["telefono"];
$direcion = $_POST["direccion"];
$giro = $_POST["giro"];
$razon = $_POST["razon"];
$pais = $_POST["pais"];

$sql = "INSERT INTO public.personal (nombre,rut)
VALUES ('$nombre',$rut);

INSERT INTO public.usuario (id, region, nacionalidad, comuna, sexo,fecha_de_nacimiento, rut)
VALUES ($id, '$region', '$nacionalidad', '$comuna', '$genero', '$date',$rut);

INSERT INTO public.juridico (id, telefono, region, pais, direccion, giro, razon_social)
VALUES ($id,$telefono,'$region','$pais','$direcion',$giro,'$razon')
";

$insercion = pg_query($coneccion,$sql);

if($insercion){
    echo "Usuario Juridico agregado exitosamente";
}else{
    echo "El usuario no pudo agregarse, revise que los parametros sean correctos";
}
echo "<br><a href='../../index.html'>volver a la pagina de inicio</a>";

?>