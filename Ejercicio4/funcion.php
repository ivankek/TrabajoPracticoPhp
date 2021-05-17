<html>
<body>

<?php

function menu($variable)
{

    $arrayIni = parse_ini_file("menu.ini");

    if (isset($variable)) {

        $arrayNuevo = array_intersect_key($arrayIni, array_flip($variable));

        echo "<div class='container mb-5 d-flex col-8 col-md-7 col-lg-5 col-xl-5 col-xxl-5 justify-content-center text-center flex-column'><h3 class='text-light bg-dark rounded py-3' >La elección del menú fue:</h3>";
        foreach ($arrayNuevo as $i => $element) {

            echo "<h4 class='bg-light p-3'>$element</h4>";

        }
        echo "</div>";
    } else {

        echo "No se eligió ninguna opción";
    }
}

?>

</body>
</html>