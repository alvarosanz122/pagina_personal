function verDiv(id) {

    const elemento = document.getElementById(id);

    elemento.scrollIntoView({
        behavior: "smooth"
    });
}

function validar(){
ok = true; 
var nombre = sanitizeString(document.contacto.nombre.value);
var email = sanitizeString(document.contacto.email.value);
var mensaje = sanitizeString(document.contacto.mensaje.value);

const arra = {
    emptyName:emptyFields(nombre),
    emptyEmail: emptyFields(email),
    emptyMensaje: emptyFields(mensaje),
    validateEmail: validateEmail(email),
    lenghtName: lengthFields(nombre.length,3,30),
    lenghtEmail: lengthFields(email.length,12,50),
    lenghtMensaje: lengthFields(email.length,3,500),
};

for (const [clave, valor] of Object.entries(arra)) {
    if (valor === false) {
        error = clave;
        ok = false;
        break;
    }

  }
  if(ok){
    const datos = {nombre: nombre,email:email,mensaje:mensaje,controller: "form-user-contact"};
     
     const text = JSON.stringify(datos);

   fetch(getFormsController(), {
             method: "POST",
             headers: {"Content-Type": "application/json"},
             body: text
        })
            .then(response => response.text())
            .then(respuesta => {
                var res = JSON.parse(respuesta);

                if(res['res'] === 'ok') {
                    alert(res['message']);
                    location.reload();
                }else{
                  alert(res['message']);   
                }
            })
            .catch(error => {
              alert("Error AJAX:", error);
             });
  }else{
    alert(arraMessage[error]);
  }


}