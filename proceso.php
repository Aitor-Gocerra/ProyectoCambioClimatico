<?php
    $_datos = [
        "nombre" => $_POST["nombre"],
        "email" => $_POST["email"],
        "telefono" => $_POST["telefono"],
        "password" => $_POST["password"],
        "genero" => $_POST["genero"],
        "intereses" => $_POST["intereses"],
        "condiciones" => $_POST["condiciones"]
    ];

    print_r($_datos);

    foreach ($_datos as $clave => $valor){
        echo $clave . ": ";
        if(is_array($valor)){
            foreach ($valor as $data){
            echo $data . " ";
            }
        }else{
            echo $valor;
        }
        echo '<br>';

    }


?>