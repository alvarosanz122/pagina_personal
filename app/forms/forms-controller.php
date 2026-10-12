<?php
require $_SERVER['DOCUMENT_ROOT'] . '/pagina_persona_alvaro/app/sys/db.php'; 
$datos = json_decode(file_get_contents("php://input"), true);


$res =["res"=>"ko","message"=>"datos no validos"];
if(json_last_error() === JSON_ERROR_NONE){
if($datos !== null ){
if(file_exists( $_SERVER['DOCUMENT_ROOT'] . '/pagina_persona_alvaro/app/forms/'.$datos['controller'].'.php') ){
    require $_SERVER['DOCUMENT_ROOT'] . '/pagina_persona_alvaro/app/helpers/forms-helpers.php';  
    require $_SERVER['DOCUMENT_ROOT'] . '/pagina_persona_alvaro/app/forms/'.$datos['controller'].'.php';
 }
}
}



echo json_encode($res);
close($conexion);
?>