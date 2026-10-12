function getHost() {
    var hostProtocol = window.location.protocol;
    var hostName = window.location.hostname;
    return hostProtocol + '//' + hostName;
}

// Procesado de formularios
function getFormsController() {
    return getHost() + '/pagina_persona_alvaro/app/forms/forms-controller.php';
}

