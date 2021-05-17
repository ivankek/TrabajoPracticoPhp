<html>
<body>

<?php

include "prueba.php";

if (isset($_POST["matriz"])) {

    $valor = $_POST["matriz"];
    llenarMatriz($_POST["matriz"]);
    $MatrizRecorrer = llenarMatriz($_POST["matriz"]);

    /*Matriz Dibujo*/
    echo "<div class='flex-wrap mb-4'>";

    echo "<h5 class='text-center flex-wrap mb-2'>Matriz de $valor x $valor</h5>";

    echo "<div class='d-flex justify-content-center px-0 mb-5 flex-wrap'>";
    echo "<div class='bg-dark text-light p-3 rounded flex-wrap'>";
    for ($fila = 0; $fila < count($MatrizRecorrer); $fila++):
        if ($fila >= 1) {
            echo "<br>";
        }
        for ($columna = 0; $columna < count($MatrizRecorrer[$fila]); $columna++):

            $numero = $MatrizRecorrer[$fila][$columna];

            if ($numero <= 9) {

                echo " [ " . $numero . " ] ";

            } else {

                echo " [" . $numero . "] ";

            }


        endfor;
    endfor;
    echo "</div>";
    echo "</div>";

    /*Div diagonal principal*/

    echo "<div class='container d-flex flex-column text-center justify-content-center flex-wrap'>";


    echo "<div class='container me-4 d-flex justify-content-center flex-wrap'>";
    echo "<h5 class='text-center flex-wrap'>La diagonal principal es:&nbsp&nbsp</h5>";

    $diagonalPrincipal = 0;
    for ($i = 0; $i < sizeof($MatrizRecorrer); $i++) {

        /*echo " ";

        echo "[" . json_encode($MatrizRecorrer[$i][$i]) . "]";*/

        $numeroDiagonalPrin = $MatrizRecorrer[$i][$i];
        echo "<p class='flex-wrap'>[&nbsp$numeroDiagonalPrin&nbsp]&nbsp</p>";
        $diagonalPrincipal += $numeroDiagonalPrin;

    }

    echo "</div>";

    echo "<div class='container d-flex justify-content-center text-center flex-wrap'>";
    echo "<h5>La suma de la diagonal principal da:&nbsp&nbsp</h5>";

    echo "<p class='text-center flex-wrap'>$diagonalPrincipal</p>";

    echo "</div>";

    echo "</div>";


    /*Linea*/

    echo "<hr class='container d-flex justify-content-center w-50 flex-wrap'>";


    /*Div Diagonal secundaria*/

    echo "<div class='container d-flex flex-column text-center justify-content-center mb-2 flex-wrap'>";

    echo "<div class='container me-4 d-flex justify-content-center flex-wrap'>";
    echo "<h5 class='text-center flex-wrap'>La diagonal principal es:&nbsp&nbsp</h5>";

    $diagonalSecundaria = 0;

    for ($i = 0; $i < sizeof($MatrizRecorrer); $i++) {

        $arrayreves = array_reverse($MatrizRecorrer[$i]);
        $numeroDiagonalSec = $arrayreves[$i];
        echo "<p class='flex-wrap'>[&nbsp$numeroDiagonalSec&nbsp]&nbsp</p>";
        $diagonalSecundaria += $numeroDiagonalSec;

    }

    echo "</div>";

    echo "<div class='container d-flex justify-content-center text-center flex-wrap'>";
    echo "<h5 class='flex-wrap'>La suma de la diagonal secundaria da:&nbsp&nbsp</h5>";

    echo "<p class='text-center flex-wrap'>$diagonalSecundaria</p>";

    echo "</div>";

    echo "</div>";


    /*Linea*/

    echo "<hr class='container d-flex justify-content-center w-50 flex-wrap'>";


    /*Div suma de todos los elementos*/

    echo "<div class='container d-flex text-center justify-content-center flex-wrap'>";

    $sumaDeTodosLosValores = 0;

    for ($fila = 0; $fila < count($MatrizRecorrer); $fila++):
        if ($fila >= 1) {

        }
        for ($columna = 0; $columna < count($MatrizRecorrer[$fila]); $columna++):

            $numeroValores = $MatrizRecorrer[$fila][$columna];
            $sumaDeTodosLosValores += $numeroValores;

        endfor;
    endfor;

    echo "<h5 class='flex-wrap'>La suma de todos sus valores da:&nbsp&nbsp</h5>";

    echo "<p class='text-center flex-wrap'>$sumaDeTodosLosValores</p>";


    echo "</div>";

    echo "</div>";

}

?>

</body>
</html>