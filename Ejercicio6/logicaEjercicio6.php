<html>
<body>

<?php

function almacenarVisitas($variable1, $variable2)
{
    if (isset($variable1)) {
        if (isset($variable2)) {

            $Nombre = $_POST["nombre"];
            $Planeta = $_POST["planeta"];
            $file = "visitas.json";

            $arrayIngresantes = ["nombre" => $Nombre, "planeta" => $Planeta];

            if (file_exists($file)) {
                $contenido = file_get_contents($file);
                if ($contenido != null) {
                    $data = json_decode($contenido);
                    array_push($data, $arrayIngresantes);
                    file_put_contents($file, json_encode($data));
                } else {

                    $data = array();
                    array_push($data, $arrayIngresantes);
                    file_put_contents($file, json_encode($data));

                }
            }


            header("location: pantallaInterplanetario.php");

        }

    }
}

function mostrarVisitas()
{
    echo "<div class='container d-flex flex-column justify-content-center mb-3'>";

    $file = "visitas.json";
    $contenido = file_get_contents($file);

    if ($contenido != null) {
        echo "<h4 class='text-muted text-center'>Personas que cruzaron el control interplanetario:<h4>";
        $data = json_decode($contenido, true);
        echo "<div class='container d-flex flex-column text-center justify-content-center mt-3'>";
        for ($i = 0; $i < sizeof($data); $i++) {

            echo "<h6 class='container'>" . "Nombre: " . $data[$i]["nombre"] . " |" . " Planeta: " . $data[$i]["planeta"] . "<h6>";

        }

        echo "</div>";
        echo "</div>";
    }
}

function contarVisitasNoTierra()
{

    echo "<div class='text-center mb-3'>";

    $file = "visitas.json";
    $contenido = file_get_contents($file);
    if ($contenido != null) {
        $data = json_decode($contenido, true);
        echo "<h4 class='text-muted'>Personas que no pertenecen al planeta tierra:<h4>";
        $contadorNoTierra = 0;
        for ($i = 0; $i < sizeof($data); $i++) {

            $planetas = $data[$i]["planeta"];

            if ($planetas != "Tierra" && $planetas != "tierra") {

                $contadorNoTierra++;
            }

        }

        echo "<h5>" . $contadorNoTierra . "<h5>";
        echo "</div>";

    }
}

?>

</body>
</html>