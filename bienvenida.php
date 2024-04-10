<?php
    session_start(); //usar variable

    if(!isset($_SESSION['usuario'])){ //si no existe (lo de abajo)

        echo '
        <script>

        alert("Inicie sesion nuevamente");
        window.location = "index.php";
        </script>
        ';
        
        session_destroy(); //destruir la sesion
        die();
    }
    //session_destroy();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de control del bar</title>
</head>
<body>

<h2>Sea Bienvenido</h2>
<a href="php/cerrar_sesion.php">Cerrar Sesion</a>
    
</body>
</html>