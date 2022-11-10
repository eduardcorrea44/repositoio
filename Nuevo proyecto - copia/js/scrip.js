document.getElementById("boton_iniciodesesion").addEventListener("click", IniciarSesion);
document.getElementById("boton_registrarse").addEventListener("click", register);
window.addEventListener("resize", anchopagina);


//declarando variables
var contenedor_loginregistro = document.querySelector(".contenedor_loginregistro");
var formulario_login = document.querySelector(".formulario_login");
var formulario_registro = document.querySelector(".formulario_registro");
var cajatrasera_login = document.querySelector(".cajatrasera_login");
var cajatrasera_registro = document.querySelector(".cajatrasera_registro");

function anchopagina(){
    if(window.innerWidth > 850){
        cajatrasera_login.style.display = "block";
        cajatrasera_registro.style.display = "block";
    } else{
        cajatrasera_registro.style.display = "block";
        cajatrasera_registro.style.opacity = "1";
        cajatrasera_login.style.display = "none";
        formulario_login.style.display = "block";
        formulario_registro.style.display = "none";
        contenedor_loginregistro.style.left = "0px";
    }
}

anchopagina();

function IniciarSesion(){ //Cuando se le da clic al boton de registro el formulario de registro se mostrara
    if(window.innerWidth > 850){
        formulario_registro.style.display = "none";
        contenedor_loginregistro.style.left = "10px";
        formulario_login.style.display = "block";
        cajatrasera_registro.style.opacity = "1"; //con la opacidad hace que los textos que aparecen en los cuadros al pulsar los botones desaparezcan y aparezcan
        cajatrasera_login.style.opacity = "0";
    
    
    }else{
        formulario_registro.style.display = "none";
        contenedor_loginregistro.style.left = "0px";
        formulario_login.style.display = "block";
        cajatrasera_registro.style.display = "block"; //con la opacidad hace que los textos que aparecen en los cuadros al pulsar los botones desaparezcan y aparezcan
        cajatrasera_login.style.display = "none";
    
    
    }
   
}

function register(){ //Cuando se le da clic al boton de registro el formulario de registro se mostrara
    if(window.innerWidth > 850){
        formulario_registro.style.display = "block";
        contenedor_loginregistro.style.left = "410px";
        formulario_login.style.display = "none";
        cajatrasera_registro.style.opacity = "0"; //con la opacidad hace que los textos que aparecen en los cuadros al pulsar los botones desaparezcan y aparezcan
        cajatrasera_login.style.opacity = "1";
    
    
    }else{
        formulario_registro.style.display = "block";
        contenedor_loginregistro.style.left = "0px";
        formulario_login.style.display = "none";
        cajatrasera_registro.style.display = "none"; //con la opacidad hace que los textos que aparecen en los cuadros al pulsar los botones desaparezcan y aparezcan
        cajatrasera_login.style.display = "block";
        cajatrasera_login.style.opacity = "1";
        
    }
    
}