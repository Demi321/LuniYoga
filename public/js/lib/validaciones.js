///-----VALIDACION FORMULARIO REGISTRO ------



export function eliminaClaseInvalid(listaIds) {
    for (let i = 0; i < listaIds.length; i++) {
        let elemento = document.getElementById(listaIds[i]);
        let avisoError = document.getElementById("aviso_error_" + elemento.id);
        elemento.addEventListener("change", function() {

            if (this.value.trim() !== "") {
                elemento.classList.remove("isInvalid");
                if (avisoError !== null)
                    avisoError.classList.add("ocultaElemento");
            }
        });
    }
}

export function validaCamposVacios(idCampo) {
    let campo = document.getElementById(idCampo);
    muestraAvisoError(campo);

}

export function comparaPasswords(idPassword, idPasswordConfirm) {
    let password = document.getElementById(idPassword);
    let passwordConfirm = document.getElementById(idPasswordConfirm);
    let labelConfirmaPassword = document.getElementById("aviso_error_" + passwordConfirm.id);


    if (contrasenaValida(password.value) && contrasenaValida(passwordConfirm.value)) {
        if (password.value === passwordConfirm.value) {
            if (labelConfirmaPassword !== null) {
                labelConfirmaPassword.innerText = "La contraseña debe contener al menos 8 carácteres, 2 números, mayúsculas y minúsculas.";
                labelConfirmaPassword.classList.add("ocultaElemento");
            }
            passwordConfirm.classList.remove("isInvalid");
            return true;
        } else {
            if (labelConfirmaPassword !== null) {
                labelConfirmaPassword.innerText = "Las contraseñas no coinciden.";
                labelConfirmaPassword.classList.remove("ocultaElemento");
                console.log("remueve clas");
            }
            passwordConfirm.classList.add("isInvalid");
            return false;
        }
    } else {
        passwordConfirm.classList.add("isInvalid");
        password.classList.add("isInvalid");
        if (labelConfirmaPassword !== null) {
            labelConfirmaPassword.innerText = "Las contraseñas no coinciden.";
            labelConfirmaPassword.classList.remove("ocultaElemento");
        }
        return false;
    }
}
export function validaCorreo(idCorreo) {
    let correo = document.getElementById(idCorreo);
    let labelAviso = document.getElementById("aviso_error_" + correo.id);
    let emailRegex = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    if (emailRegex.test(correo.value)) {
        if (labelAviso !== null) {
            labelAviso.innerText = "Campo invalido.";
            labelAviso.classList.add("ocultaElemento");
        }
        correo.classList.remove("isInvalid");
        return true;
    } else {

        if (labelAviso !== null) {
            labelAviso.innerText = "No es un correo electrónico valido.";
            labelAviso.classList.remove("ocultaElemento");
        }
        correo.classList.add("isInvalid");
        return false;
    }

}
export function validaTelefono(idTelefono) {
    let telefono = document.getElementById(idTelefono);
    let labelAviso = document.getElementById("aviso_error_" + idTelefono);
    let esNumero = false;
    for (let i = 0; i < telefono.value.length; i++)
        if (isNaN(telefono[i]))
            esNumero = true;

    if (esNumero && telefono.value.length === 10) {
        if (labelAviso !== null) {
            labelAviso.innerText = "Campo invalido.";
            labelAviso.classList.add("ocultaElemento");
            telefono.classList.remove("isInvalid");
        }
        return true;
    } else {
        console.log("as");
        console.log(labelAviso)
        if (labelAviso !== null) {
            labelAviso.innerText = "No es un número valido.";
            labelAviso.classList.remove("ocultaElemento");
            telefono.classList.add("isInvalid");
        }
        return false;
    }

}

function muestraAvisoError(campo) {
    let labelAviso = document.getElementById("aviso_error_" + campo.id);
    if (campo.value.trim() === "") {
        campo.classList.add("isInvalid");
        if (labelAviso !== null)
            labelAviso.classList.remove("ocultaElemento");
        return null;
    } else {
        campo.classList.remove("isInvalid");
        if (labelAviso !== null)
            labelAviso.classList.add("ocultaElemento");
        return campo.value;
    }
}

function contrasenaValida(str) {
    let longitudCorrecta = false;
    let cantidadNumeros = false;
    let letrasMinusculas = false;
    let letrasMayusculas = false;

    let contadorNumeros = 0;

    if (str.length >= 8)
        longitudCorrecta = true;

    for (let i = 0; i < str.length; i++) {
        if (!isNaN(str[i]))
            contadorNumeros++;
        if (str[i] === str[i].toLowerCase())
            letrasMinusculas = true;
        if (str[i] === str[i].toUpperCase())
            letrasMayusculas = true;
    }
    if (contadorNumeros >= 2)
        cantidadNumeros = true;

    /*  console.log("longitud " + longitudCorrecta);
      console.log("numeros ok " + cantidadNumeros);
      console.log("minusculas ok " + letrasMinusculas);
      console.log("mayusculas ok " + letrasMayusculas);*/

    if (longitudCorrecta && cantidadNumeros && letrasMinusculas && letrasMayusculas)
        return true;
    else
        return false;
}