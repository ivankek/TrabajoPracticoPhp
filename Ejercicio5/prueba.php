<html>
<body>

<?php
function llenarArray($numero, $variable)
{
    if (isset($variable)) {

        $array = [];
        for ($i = 0; $i < $variable; $i++) {

            $numero++;
            array_push($array, $numero);

        }
    } else {
        echo "No llego variable";
    }
    return $array;
}


function llenarMatriz($variable)
{

    if (isset($variable)) {
        $Matriz = [];
        $numeroIncrementar = 0;

        for ($i = 1; $i <= $variable; $i++) {

            $array = llenarArray($numeroIncrementar, $_POST["matriz"]);
            array_push($Matriz, $array);
            $numeroIncrementar += $variable;

        }

        return $Matriz;
        header("location: ejercicio5.php");
    } else {
        echo "No llegó la variable";
    }
}


?>

</body>
</html>