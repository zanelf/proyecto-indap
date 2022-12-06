<?php
$equipo= "localhost";
$namebd= "INDAP";
$puerto="5432";
$usuario="postgres";
$clave="mane";

$coneccion=pg_connect("host= $equipo 
dbname= $namebd 
port= $puerto
user= $usuario 
password= $clave
");

?>