<?php
//php con la conexion general

$equipo= "localhost";
$namebd= "INDAP";
$puerto="5432";
$usuario="postgres"; 
$clave="mane"; //cambien esto segun su pc 

$coneccion=pg_connect("host= $equipo 
dbname= $namebd 
port= $puerto
user= $usuario 
password= $clave
");

?>