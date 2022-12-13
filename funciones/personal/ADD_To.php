<?php
include  "../../conexion.php";  //base para agarrar la conexion general

$rut = $_POST["rut"];
$nombre = $_POST["nombre"]; 
$correo = $_POST["correo"];
$role = $_POST["role"];


$sql = "INSERT INTO public.personal (nombre,rut)
VALUES ('$nombre',$rut);

insert into  public.trabajador (rut,correo_electronico)
values ($rut,'$correo');

insert into public.trabajador_de_oficina (rut, rol_e)
values ($rut,$role);
";

$insercion = pg_query($coneccion,$sql);

if($insercion){
    echo "Trabajador de oficina agregado exitosamente";
}else{
    echo "El trabajador no pudo agregarse, revise que los parametros sean correctos";
}
echo "<br><a href='../../index.html'>volver a la pagina de inicio</a>";

?>