<?php

    session_start();

    include 'conexion_be.php';

    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];
    $contraseña = hash('sha512', $contraseña);

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios where email='$email' and contraseña='$contraseña'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $email;
        header("location: ../paginas/pagina.php");
        exit;
    }else{
        echo'
        <script>
            alert("Usuario no existe, por favor verifique los datos introducidos");
            window.location = "index.php";
        </script>
        ';
        exit;
    }



?>