<?php 

session_start();

if(isset($_SESSION['usuario'])){
    header("location: ../paginas/pagina.php");
   
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN Y REGISTRO</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/estilof.css">
</head>
<body>
    
    <main>

        <div class="contenedortd"> <!-- Inicio de caja -->

            <div class="cajatrasera"> <!-- Inicio de cajatrasera -->
                <div class="cajatrasera_login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para comunicarte con otros </p>
                    <button id="boton_iniciodesesion">Iniciar Sesion</button>
                </div>
                <div class="cajatrasera_registro">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Registrate para expresarte hacia los demas</p>
                    <button id="boton_registrarse">Registrarse</button>
                </div>
            </div> <!-- Final de cajatrasera -->

            <div class="contenedor_loginregistro"> <!-- Inicio de contenedorderegistro -->

                <form action="login_usuario_be.php" method="POST" class="formulario_login">
                    <h2>Iniciar Sesion</h2>
                    <input type="email" placeholder="email" name="email" required>
                    <input type="password" placeholder="contraseña" name="contraseña" required>
                    <button>Entrar</button>

                </form>
                <form action="registro_usuario_be.php" method="POST" class="formulario_registro">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="nombre completo" name="nombre_completo" required>
                    <input type="email" placeholder="email" name="email" required>
                    <input type="text" placeholder="usuario" name="usuario" required>
                    <input type="password" placeholder="contraseña" name="contraseña" required>
                    <input type="text" placeholder="Documento de identidad" name="id">
                    <button>registrarse</button>
                </form>

            </div> <!-- Final de contenedorderegistro -->

        </div> <!-- Final de caja -->

    </main>

   <script src="../js/scrip.js"></script>

</body>
</html>
<!-- Inicio de cajatrasera -->