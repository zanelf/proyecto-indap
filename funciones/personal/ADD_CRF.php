<?php
include  "../../conexion.php";  //base para agarrar la conexion general

$rut = $_POST["rut"];
$nombre = $_POST["nombre"]; 
$correo = $_POST["correo"];


$sql = "INSERT INTO public.personal (nombre,rut)
VALUES ('$nombre',$rut);

insert into  public.trabajador (rut,correo_electronico)
values ($rut,'$correo');

insert into public.consultores_de_riesgo_y_fomento (rut)
values ($rut);
";

$insercion = pg_query($coneccion,$sql);

if($insercion){
   echo "bienvenido a indap, esperamos poder seguir trabajando con usted";
}else{
    echo "los valores que ah ingresado ya existen en la base de datos";
}
echo "<br><a href='../../index.html'>volver a la pagina anterior</a>";

?>