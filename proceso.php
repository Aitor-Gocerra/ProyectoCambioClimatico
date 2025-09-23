<?php

    // PROCESO 1 DANDO WARNINGS

    echo '<h1> PROCESO 1 </h1>';

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
    echo '<br>';

    foreach ($_datos as $clave => $valor){
        if(isset($valor)){
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

    }

    // PROCESO 2 ALMACENANDO SOLO AQUELLOS DATOS QUE RECOJO DEL FORMULARIO

    echo '<br>';
    echo '<h1> PROCESO 2 </h1>';

    if ($_POST) {
        $datos = [];
        
        $claves = ["nombre", "email", "telefono", "password", "genero", "intereses", "condiciones"];
        
        foreach ($claves as $clave) {
            
            if (isset($_POST[$clave]) && $_POST[$clave] !== '') {
                $datos[$clave] = $_POST[$clave];
            }
        }
        
        echo "Datos guardados: ";
        echo '<br>';
        print_r($datos);
    }

?>