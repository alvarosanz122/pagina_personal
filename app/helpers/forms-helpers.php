<?php
function sanitizeString($texto){
    $texto = trim($texto);
    $texto = strip_tags($texto);
    return htmlspecialchars($texto, ENT_QUOTES, 'UTF-8');
}

function emptyFields($texto){
   return ($texto !== "")? true : false;
}

function validateData($validateData){
foreach($validateData as $indice =>$value){
  if($value === false){
        return false;
   }

}
return true;
}


function lenghtFields($lengthValue,$minLength,$maxLength){
return ($lengthValue>=$minLength && $lengthValue<=$maxLength)? true : false;

}

function validateEmail($email){
    $emailUser = filter_var($email, FILTER_SANITIZE_EMAIL);
    return (filter_var($emailUser, FILTER_VALIDATE_EMAIL))? true : false;

}

?>