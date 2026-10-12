<?php
$local = '127.0.0.1:3307';
$userDB = 'root';
$password ='';
$nameDb = 'pagina_personal';
$conexion = mysqli_connect($local,$userDB,$password,$nameDb) or die ("Error en la conexión");




function afectadas($conexion){
 return ($conexion->affected_rows > 0) ? true : false;

}


function insertData($conexion,$datos){
    $insert = mysqli_query($conexion,'INSERT INTO '.$datos['nombreTabla'].'('.$datos['datos'].') VALUES ('.$datos['values'].')');
}


function close($conexion){
    mysqli_close($conexion);
}
?>