<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/disenoLoginRegistro.css" rel="stylesheet">
    <title>Registrarse</title>
</head>
<body>

<div class="container contenedorRegistro mt-5" id="contenedorRegistro">

<div class="mb-3 mt-3"> 
    <input type="text" class="form-control" id="registroNombre" aria-describedby="" placeholder="Nombre"> 
    <label class="ocultaElemento avisoError" id="aviso_error_registroNombre">Campo invalido.</label>
</div>
 
<div class="mb-3">
    <input type="text" class="form-control" id="registroApellidos" aria-describedby="emailHelp" placeholder="Apellidos"> 
    <label class="ocultaElemento avisoError" id="aviso_error_registroApellidos">Campo invalido.</label>
</div>

<div class="mb-3">
 
    <input type="email" class="form-control" id="registroCorreo" aria-describedby="" placeholder="Correo"> 
    <label class="ocultaElemento avisoError" id="aviso_error_registroCorreo">No es un correo valido.</label>
</div>

<div class="mb-3">
 
    <input type="text" class="form-control" id="registroUsuario" aria-describedby="" placeholder="Usuario"> 
    <label class="ocultaElemento avisoError" id="aviso_error_registroUsuario">Campo Invalido.</label>
</div>


<div class="mb-3"> 
    <input type="password" class="form-control" id="registroPassword" aria-describedby="emailHelp" placeholder="Contraseña">  
    <label class="ocultaElemento avisoError" id="aviso_error_registroPassword">La contraseña debe contener al menos 8 carácteres, 2 números, mayúsculas y minúsculas.</label>
</div>

<div class="mb-3">
 
    <input type="password" class="form-control" id="registroPasswordConfirmacion" aria-describedby="emailHelp" placeholder="Confirmar contraseña"> 
    <label class="ocultaElemento avisoError" id="aviso_error_registroPasswordConfirmacion">La contraseña debe contener al menos 8 carácteres, 2 números, mayúsculas y minúsculas.</label>
</div>

<div class="mb-3"> 
    
    <input type="text" class="form-control" id="registroTelefono" aria-describedby="emailHelp" placeholder="Teléfono"> 
    <label class="ocultaElemento avisoError" id="aviso_error_registroTelefono">Campo Invalido</label>
</div>
<div class="row">
    <div class="col d-flex justify-content-center">
        <button type="button" class="btnAccionPrimaria" id="btnRegistrarse">Registrarse</button>
    </div>
</div>
<div class="row mt-2">
    <div class="col d-flex justify-content-center">
        <button type="button" class="btnAccionSecundaria">Iniciar sesión</button>
    </div>
</div>


</div>

 


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="js/validaFormulario.js" type="module"></script>
</html>