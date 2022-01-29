 
import * as validaciones from "./lib/validaciones.js"
import * as utils from "./lib/utilerias.js"

let btnIniciaSesion=document.getElementById("btnIniciaSesion");

validaciones.eliminaClaseInvalid(["loginUsuario","loginPassword"]);

btnIniciaSesion.addEventListener("click",function(){
  
    validaciones.validaCamposVacios("loginUsuario");
    validaciones.validaCamposVacios("loginPassword");     

    let usuarioCorreo=document.getElementById("loginUsuario");
    let usuarioPassword=document.getElementById("loginPassword");

    if(usuarioCorreo.value.trim()!=="" && usuarioPassword.value.trim()!==""){
 
        let data=JSON.stringify({
            usuario:usuarioCorreo.value,
            password:usuarioPassword.value
        }); 
        utils.requestPost("api/login",data).then((response)=>{
            console.log(response);
            if(response.success){
                usuarioCorreo.value="";
                usuarioPassword.value="";                
            }
        });

    }
});