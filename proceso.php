<?php
    print_r($_POST);
    echo "<br><br><br>";

    echo "Nombre: ";
    echo !empty($_POST["nombre"]) ? $_POST["nombre"] . "<br>" : "No se ha introducido ningun nombre" . "<br>";
   
    echo "Email: ";
    echo !empty($_POST["email"]) ? $_POST["email"] . "<br>" : "No se ha introducido ningun email" . "<br>";

    echo "Telefono: ";
    echo !empty($_POST["telefono"]) ? $_POST["telefono"] . "<br>" : "No se ha introducido ningun telefono" . "<br>";

    echo "Contraseña: ";
    echo !empty($_POST["contraseña"]) ? $_POST["contraseña"] . "<br>" : "No se ha introducido ninguna contraseña" . "<br>";

    echo "Genero: ";
    echo isset($_POST["genero"]) ? $_POST["genero"] . "<br>" : "No se ha introducido ningun genero" . "<br>";

    echo "Intereses: ";
    if(isset($_POST["intereses"])) {
        foreach($_POST["intereses"] as $valor){
            echo $valor . "<br>";
        }
    }else{
        echo "No has seleccionado ningun interes";
    }

    echo "Condiciones: ";
    echo isset($_POST["condiciones"]) ? $_POST["condiciones"] . "<br>" : "No se clicado la opcion" . "<br>";
?>