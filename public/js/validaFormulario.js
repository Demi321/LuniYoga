import * as validaciones from "./lib/validaciones.js"
import * as utils from "./lib/utilerias.js"


let btnRegistrarse = document.getElementById("btnRegistrarse");

btnRegistrarse.addEventListener("click", function() {

    let listaInputs = document.querySelectorAll("#contenedorRegistro input");
    let datosOk = true;

    validaciones.validaCamposVacios("registroNombre");
    validaciones.validaCamposVacios("registroApellidos");
    validaciones.validaCamposVacios("registroCorreo");
    validaciones.validaCamposVacios("registroUsuario");
    validaciones.validaCamposVacios("registroPassword");
    validaciones.validaCamposVacios("registroPasswordConfirmacion");
    validaciones.validaCamposVacios("registroTelefono");

    listaInputs.forEach(element => {
        if (element.classList.contains("isInvalid"))
            datosOk = false;
    });

    if (!validaciones.comparaPasswords("registroPassword", "registroPasswordConfirmacion"))
        datosOk = false;

    if (!validaciones.validaCorreo("registroCorreo"))
        datosOk = false;

    if (!validaciones.validaTelefono("registroTelefono"))
        datosOk = false;

    console.log(datosOk);
    if (datosOk) {
        let data = JSON.stringify({
            nombre: document.getElementById("registroNombre").value,
            apellidos: document.getElementById("registroApellidos").value,
            correo: document.getElementById("registroCorreo").value,
            usuario: document.getElementById("registroUsuario").value,
            password: document.getElementById("registroPassword").value,
            telefono: document.getElementById("registroTelefono").value
        });
        utils.requestPost("api/registroUsuarios", data).then((data) => {
            console.log(data)
            listaInputs.forEach(element => {
                element.value = "";
            });
        });
    }

});





let listaIdCampos = ["registroNombre", "registroApellidos", "registroCorreo",
    "registroUsuario", "registroPassword", "registroPasswordConfirmacion",
    "registroTelefono"
]
validaciones.eliminaClaseInvalid(listaIdCampos);