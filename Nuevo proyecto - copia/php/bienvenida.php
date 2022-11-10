<?php 

session_start();
if(!isset($_SESSION['usuario'])){
    echo '
    <script>
        alert("Por favor debes iniciar sesion");
    </script>
    ';
    header("location: ../paginas/pagina.html");
    session_destroy();
    die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIenvenida - eduard</title>
</head>
<body>
    <h1>Bienvenido xd</h1>
</body>
</html>