<?php 

include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$contraseña = hash('sha512', $contraseña);

// encriptamiento de contraseña
// $contraseña = hash('sha512', $contraseña);

$query ="INSERT INTO usuarios (nombre_completo, email, usuario, contraseña) 
VALUES('$nombre_completo', '$email','$usuario', '$contraseña')";

// Aqui se vererica que el correo no se repita en la base de datos

$verificar_email = mysqli_query($conexion, "SELECT * FROM usuarios where email ='$email'");

// el codigo de abajo permite verificar si existe otro mismo correo que ya se ha puesto en el mismo campo 
// El window location hace que nos vayamos a otra pagina si deseamos

if(mysqli_num_rows($verificar_email) > 0){ 
    echo '
     <script>
        alert("Este email ya se ha registrado, intenta con otro diferente");
        window.location ="index.php";
     </script>
    ';
    exit();
}

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios where usuario ='$usuario'");

// el codigo de abajo permite verificar si existe otro mismo nombre de usuario que ya se ha puesto en el mismo campo 


if(mysqli_num_rows($verificar_usuario) > 0){ 
    echo '
     <script>
        alert("Este usario ya se ha registrado, intenta con otro diferente");
        window.location ="index.php";
     </script>
    ';
    exit();
}

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo ' 
    <script>
        alert("usuario almacenado exitosamente")
        window.location ="index.php"
    </script>
';    
    
}else{
    echo ' 
    <script>
        alert("usuario no pudo ser almacenado")
        window.location ="index.php"
    </script>
    ';
}

mysqli_close($conexion);

?>