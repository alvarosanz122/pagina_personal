
const arraMessage = {
    emptyName:"Debes introducir Nombre",
    emptyEmail: "Debes introducir Email",
    emptyMensaje: "Debes introducir mensaje",
    validateEmail: "El formato del correo incorrecto",
    lenghtName:"El nombre debe tener entre 3 y 30 caracteres",
    lenghtEmail:"El nombre debe tener entre 12 y 50 caracteres",
    lenghtMensaje:"El nombre debe tener entre 3 y 500 caracteres"
};


// valida el email
function validateEmail(email){
     const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return (regex.test(email))? true : false;
}

// limpia de espacios
function sanitizeString(texto) {
    return String(texto).trim();
}

// valida longitud
function lengthFields(lenghtValue,minFields,maxFields){
  return (lenghtValue>=minFields && lenghtValue<=maxFields)? true : false;

}

// valida campos vacios
function emptyFields(data){
  return (sanitizeString(data) !== "") ? true:false;
}

