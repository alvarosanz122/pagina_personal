<?php
$res =["res"=>"ko","message"=>"datos no validos"];
if(isset($datos) && !empty($datos)){
$nombre = sanitizeString($datos['nombre']);
$email = sanitizeString($datos['email']);
$mensaje = sanitizeString($datos['mensaje']);

$validateData = ["emptyName"=>emptyFields($nombre),
                "emptyEmail"=>emptyFields($email), 
                "emptyMessage" =>emptyFields($email),
                "validateEmail"=>validateEmail($email),
                "lengthName"=>lenghtFields(strlen($nombre),3,30),
                "lengthEmail"=>lenghtFields(strlen($email),12,50),
                "lengthMensaje"=>lenghtFields(strlen($mensaje),3,500)
                ];


if(validateData($validateData)){
    $arr =['nombreTabla'=>'contactos','datos'=>'nombre,email,mensaje','values'=>'"'.$nombre.'","'.$email.'","'.$mensaje.'"'];
    insertData($conexion,$arr);
  if(afectadas($conexion)){
    $res =["res"=>"ok","message"=>"Petición enviada correctamente"];
}

}

}
?>