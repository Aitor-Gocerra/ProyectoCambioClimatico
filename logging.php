<?php
    require 'datos.php';

    $_nombre = $_POST["nombre"];
    $_contraseña = $_POST["password"];

    $loginCorrecto = false;

    foreach ($_usuarios as $clave => $valor) {
        if($valor[0] === $_nombre && $valor[1] === $_contraseña){
            $loginCorrecto = true;
            break;
        }
    }

    if ($loginCorrecto) {
        echo "<script>window.location.href = 'index.html';</script>";
    } else {
        echo "<script>
                alert('Contraseña o usuario incorrecto');
                window.location.href = 'formUsuario.html';
            </script>";
    }

?>