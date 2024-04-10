<?php
    session_start();
    include 'conection_db_backend.php';

    $correo = $_POST ['correo'];
    $contrasena = $_POST ['contrasena'];
    $contrasena = hash('sha512', $contrasena);

    //verificar en la db
    $verify_login = mysqli_query($conection, "SELECT * FROM usuarios WHERE correo ='$correo'
    AND password ='$contrasena'");

        if(mysqli_num_rows($verify_login) > 0){
            $_SESSION['usuario'] = $correo;
            header("location: ../salones.php");
            exit;
        }else{
            echo'
            <script> alert("El usuario no existe, verifique sus datos")
             window.location = "../salones.php";
             </script>
             ';
            
        }


?>