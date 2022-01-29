<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/disenoLoginRegistro.css" rel="stylesheet">
    <link rel="shortcut icon" href="imagenes/imgLoginRegistro/logo.png" type="image/x-icon">
    <title>LuniYoga | Registro</title>
</head>
<body>
   
  <div class="container menu">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 ">
      <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto ">
        <img src="imagenes/imgLoginRegistro/logo.png" alt="">
       
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link">Inicio</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Nosotros</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Clases</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Contacto</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
      </ul>
    </header>
  </div>

  <div class="container contenedorRegistro mt-5" id="contenedorRegistro">

  <div class="row align-items-md-stretch">

    
    <h1 class="tituloRegistro">Crea tu cuenta <span>Luniyoga</span> </h1>
    <p>¡Que bueno verte!  <span> Bienvenido.</span> </p>

    <div class="col-md-6 left">
     
            <div class="row">

                <img src="imagenes/imgLoginRegistro/logo.png" alt="logoLuniYoga" class="logoRegistro">

               <p>¿Ya tienes cuenta? Inicia Sesión</p>
                 <div class="col d-flex justify-content-center">
                    <button type="button" class="btnAccionSecundaria">Iniciar sesión</button>
                </div>
            </div>
       
        </div>
  
    <div class="col-md-6 right" >

        
        <input type="text" class="form-control" id="registroNombre" aria-describedby="" placeholder="Nombre"> 
        <label class="ocultaElemento avisoError" id="aviso_error_registroNombre">Campo invalido.</label>

        <input type="text" class="form-control" id="registroApellidos" aria-describedby="emailHelp" placeholder="Apellidos"> 
        <label class="ocultaElemento avisoError" id="aviso_error_registroApellidos">Campo invalido.</label>

        <input type="text" class="form-control" id="registroTelefono" aria-describedby="emailHelp" placeholder="Teléfono"> 
        <label class="ocultaElemento avisoError" id="aviso_error_registroTelefono">Campo invalido.</label>



        <input type="text" class="form-control" id="registroUsuario" aria-describedby="" placeholder="Usuario"> 
        <label class="ocultaElemento avisoError" id="aviso_error_registroUsuario">Campo Invalido.</label>
   


        <input type="email" class="form-control" id="registroCorreo" aria-describedby="" placeholder="Correo"> 
        <label class="ocultaElemento avisoError" id="aviso_error_registroCorreo">No es un correo valido.</label>


        <input type="password" class="form-control" id="registroPassword" aria-describedby="emailHelp" placeholder="Contraseña">  
        <label class="ocultaElemento avisoError" id="aviso_error_registroPassword">La contraseña debe contener al menos 8 carácteres, 2 números, mayúsculas y minúsculas.</label>


        <input type="password" class="form-control" id="registroPasswordConfirmacion" aria-describedby="emailHelp" placeholder="Confirmar contraseña"> 
    <label class="ocultaElemento avisoError" id="aviso_error_registroPasswordConfirmacion">La contraseña debe contener al menos 8 carácteres, 2 números, mayúsculas y minúsculas.</label>

  
    <a href="" target="_blank" >Aviso de privacidad</a>


    <div class="col d-flex justify-content-center">
        <button type="button" class="btnAccionPrimaria" id="btnRegistrarse">Registrarse</button>
    </div>

    </div>
 

  </div>
</div>

 

</div>

 


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="js/validaRegistro.js" type="module"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</html>