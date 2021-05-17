<html>
<body>
<?php

function subirFoto($archivo, $carpetaDestino, $error, $tmp_name, $nombreArchivoPost, $nombreImagen, $tipoArchivo)
{

    $extension = pathinfo($nombreImagen, PATHINFO_EXTENSION);
    $nuevoNombre = $nombreArchivoPost . "." . $extension;


    if (isset($archivo)) {
        if (is_dir($carpetaDestino)) {

            if ($tipoArchivo === "image/jpeg" || $tipoArchivo === "image/jpg" || $tipoArchivo === "image/png") {

                if ($error === 0) {
                    header("location: ejercicio2.php");
                    return move_uploaded_file($tmp_name, $carpetaDestino . $nuevoNombre);


                } else {
                    echo "Ha ocurrido un error en el servidor al subir el archivo";
                    header("location: ejercicio2.php");
                }

            } else {

                echo "No es imágen";
                header("location: ejercicio2.php");
            }
        } else {
            echo "No es un directorio existente";
            header("location: ejercicio2.php");
        }

    }
}

?>
</body>
</html>
