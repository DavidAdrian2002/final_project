<?php
    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: bienvenida.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro y Login</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <main>
        <!--Inicio de caja contenedora total-->
        <div class="container__todo">
            <div class="caja_atras">
                <div class="caja_atras_login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Bienvenido, Inicia Sesion para entrar en nuestra página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesion</button>
                </div>
                <div class="caja_atras_registro">
                    <h3>¿No tienes una cuenta?</h3>
                    <p>Bienvenido, Registrate para Iniciar Sesion</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>

            </div>
            <!--Forms de Registro y Login-->
            <div class="contenedor_login-registro">
                <!--Login-->
                <form action="php/login_register.php" method= "POST" class="formulario__login">
                    <h2>Inciar Sesion</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Entrar</button>
                </form>
                <!--Registro-->
                <form action="php/registros_users_backend.php" method="POST" class="formulario__registro">
                    <h2>Crear una cuenta</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                    <input type="text" placeholder="Correo" name="correo">
                    <input type="text" placeholder="Nombre de Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="password">
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="js/script_function.js"></script>
    
</body>
</html>