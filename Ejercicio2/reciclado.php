<html>
<body>
<?php
include "procesarImagen.php";

function mostrarCarpeta($carpetaDestino)
{
    $dir = opendir($carpetaDestino);

    while ($elemento = readdir($dir)) {
        if ($elemento != "." && $elemento != "..") {
            echo '<div class="container d-flex flex-column justify-content-center col-8 col-md-6 col-lg-4 h-25 border mt-3 mb-5 bg-light rounded">';
            echo "<p  class='container text-center mt-3'> <a href='pantallaImagen.php?imagen=$elemento'>$elemento </a></p>";
            echo '</div>';

        }

    }

}

mostrarCarpeta("../Imagenes/");

if (isset($_FILES["archivo"]) && isset($_FILES["archivo"]["error"]) && isset($_FILES["archivo"]["tmp_name"]) && isset($_POST["nombreArchivo"]) && isset($_FILES["archivo"]["name"]) && isset($_FILES["archivo"]["type"]))

    subirFoto($_FILES["archivo"], "../Imagenes/", $_FILES["archivo"]["error"], $_FILES["archivo"]["tmp_name"], $_POST["nombreArchivo"], $_FILES["archivo"]["name"], $_FILES["archivo"]["type"]);

?>
</body>
</html>