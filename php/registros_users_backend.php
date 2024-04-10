<?php

include 'conection_db_backend.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    //encriptar la cotraseña
    $password = hash('sha512', $password);

    $consult = "INSERT INTO usuarios(nombre_completo, correo, usuario, password) VALUES('$nombre_completo', '$correo', '$usuario', '$password')";

        //no repetir correo
        $verify_mail = mysqli_query($conection, "SELECT * FROM usuarios WHERE correo='$correo'");
        
        if(mysqli_num_rows($verify_mail) > 0){
            echo '
                <script>
                alert("Correo ya registrado, intentelo de nuevo");
                window.location ="../index.php";
                </script>
            ';
            //window.location = "../index.php";
            exit();
        }
            $verify_user = mysqli_query($conection, "SELECT * FROM usuarios WHERE usuario='$usuario'");
        
        if(mysqli_num_rows($verify_user) > 0){
            echo '
                <script>
                alert("Usuario ya registrado, intentelo de nuevo");
                window.location ="../index.php";
                </script>
            ';
            //window.location = "../index.php";
            exit();
        }
    $ejetutar = mysqli_query($conection, $consult);

        if($ejetutar){
            echo '<script>
            alert("Bienvenido al Sistema")
            window.location ="../index.php";
            </script>
            ';
            
        }

        mysqli_close($conection);
?>