<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="css/disenoLoginRegistro.css" rel="stylesheet">
    <link rel="shortcut icon" href="imagenes/imgLoginRegistro/logo.png" type="image/x-icon">
    <title>LuniYoga | Iniciar Sesión</title>
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
    
    <div class="container contenedorLogin mt-5" id="contenedorLogin">

        <div class="row align-items-md-stretch">

    
                   <div class="col-md-6 left">
                      
<h1 class="tituloLogin">Inicia sesión</h1> 
 <div id="camposLogin">                     
    <input type="text" class="form-control" id="loginUsuario" aria-describedby="" placeholder="Usuario o Correo"> 
    <!--<label class="ocultaElemento avisoError" id="aviso_error_loginUsuario">Campo invalido.</label>-->

    <input type="password" class="form-control" id="loginPassword" aria-describedby="" placeholder="Contraseña"> 
    <!--<label class="ocultaElemento avisoError" id="aviso_error_loginPassword">Campo invalido.</label> -->
 </div>   
<a href="" target="_blank" >Olvide mi contraseña</a>


<div class="col d-flex justify-content-center">
    <button type="button" class="btnAccionPrimaria" id="btnIniciaSesion">Inicia sesión</button>
</div>   
            
                </div>
          
            <div class="col-md-6 right" >

             
                <div class="infoLogin">
<h2 class="tituloLogin">¿Eres nuevo?</h2>
<p>¡Bienvenido!</p>

<div class="col d-flex justify-content-center">
    <button type="button" class="btnAccionSecundaria">Registarse</button>
</div>
              
<img src="imagenes/imgLoginRegistro/fondo.svg" alt="">
</div>

            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="js/validaLogin.js" type="module"></script>

</html>