<?php
    include 'datos.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>FORMULARIO DE REGISTRO</title>
        <link rel="stylesheet" href="estilos/estiloForm.css">
    </head>
    <body>
        <img src="imagenes/logo.png" alt="Logo de la empresa">
        <h1>¡UNETE!</h1>
        <form action="proceso.php" method="post">
            <label>Nombre: </label>
            <input type="text" class="area" id="nombre" name="nombre">

            <label>Email: </label>
            <input type="email" class="area" id="email" name="email" required>

            <label>Telefono: </label>
            <input type="tel" class="area" id="telefono" name="telefono" required>

            <label>Contraseña: </label>
            <input type="password" class="area" id="contraseña" name="password" required>

            <label>Genero: </label>
            <div class="genero">
                <?php
                    foreach($_genero as $clave => $valor){
                        echo "<input type='radio' name='genero' value='$clave'>$valor<br>";
                    }
                ?>
                <!--<input type="radio" name="genero" value="masculino"> Masculino<br>
                <input type="radio" name="genero" value="femenino"> Femenino<br>
                <input type="radio" name="genero" value="noDeclaro"> No Declaro<br>-->
            </div>
            
            <label>Intereses Medioambientales: </label>
            <div class="intereses">
                <?php
                        foreach($_intereses as $clave => $valor) {
                            echo "<input type='checkbox' name='intereses[]' value='$clave'>$valor<br>";
                        }
                ?>
                <!--<input type="checkbox" name="intereses[]" value="Calentamiento">Calentamiento Global<br>
                <input type="checkbox" name="intereses[]" value="Ozono">Capa de Ozono<br>
                <input type="checkbox" name="intereses[]" value="Microplasticos">Microplasticos<br>
                <input type="checkbox" name="intereses[]" value="Invernader">Efecto Invernadero<br>
                <input type="checkbox" name="intereses[]" value="Deforestacion">Deforestacion Mundial<br>-->
            </div>
            <br>
            <div>
                <input type="checkbox" name="condiciones" value="true">Aceptas terminos y condiciones
            </div>
            
            <div class="botones">
                <input type="submit" value="Enviar">
                <input type="reset" value="Limpiar">
            </div>
        </form>
        <footer>
            PROYECTO INTERFACE - Aitor Gomez Cerrato - 2025
        </footer>
    </body>
</html>