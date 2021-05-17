<html>
<body>


<?php

function mostrarDados($cantidadDeDados)
{

    echo "<h3 class='text-center mb-5'>Dados que le tocó:</h3>";
    echo '<div class="container justify-content-center mb-3 flex-wrap" style="display: flex">';
    $arrayDados = [];

    for ($i = 0; $i < $cantidadDeDados; $i++) {
        $numeroDado = rand(1, 6);
        array_push($arrayDados, $numeroDado);
    }
    $suma = 0;
    foreach ($arrayDados as $i => $element) {

        $imagen = '<img class="col-2 col-md-1 col-lg-1 mb-3 mb-md-3 mb-lg-0 mb-xl-0 mb-xxl-0 me-3" src="' . "./ImagenesDados/" . "/" . $element . ".png" . '">';


        echo $imagen;


        $suma += $element;


    }
    echo '</div>';
    echo "<h3 class='mb-5 text-center'>Resultado obtenido: $suma</h3>";

}

?>

</body>
</html>