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
                foreach ($valor as $dato){
                    echo $dato . " ";
                }
            }else{
                echo $valor;
            }
            echo '<br>';
        }    

    }

    // PROCESO 2 ALMACENANDO SOLO AQUELLOS DATOS QUE RECOJO DEL FORMULARIO SI NO SUPIERA LAS CLAVES

    echo '<br>';
    echo '<h1> PROCESO 2 A</h1>';

    $nombres_campos = array_keys($_POST);
    
    echo "Campos enviados en el formulario: ";
    print_r($nombres_campos);
    echo '<br>';

    $_datos = [];
    foreach ($nombres_campos as $nombre){
        $_datos[$nombre] = $_POST[$nombre];
    }
    print_r($_datos);
    foreach ($_datos as $clave => $valor){
        
        echo $clave . ": ";
        if(is_array($valor)){
            foreach ($valor as $dato){
                echo $dato . " ";
            }
        }else{
            echo $valor;
        }
        echo '<br>';

    }

    // PROCESO 2 B ALMACENANDO SOLO AQUELLOS DATOS QUE RECOJO DEL FORMULARIO SABIENDO LAS CLAVES
    echo '<br>';
    echo '<h1> PROCESO 2 B</h1>';

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

?>