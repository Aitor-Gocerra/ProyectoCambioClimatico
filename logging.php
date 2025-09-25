<?php
    //include 'datos.php';

    $_usuarios = [
    1 => ["Aitor", "1234"],
    2 => ["Miguel", "5678"],
    3 => ["Isa", "1122"],
    ];

    $_nombre = $_POST["nombre"];
    $_contraseña = $_POST["contraseña"];

    foreach ($_usuarios as $clave => $valor) {
        if($valor[0] === $_nombre && $valor[1] === $_contraseña){
            $loginCorrecto = true;
            break;
        }
    }

    if ($loginCorrecto) {
        header("Location: index.html");
        exit();
    } else {
        header("Location: login.php?error=1");
        exit();
    }

?>