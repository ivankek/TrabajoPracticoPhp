<html>
<body>

<?php


include_once "logicaDados.php";

if (isset($_POST["dados"])) {

    $variable = $_POST["dados"];

    switch ($variable) {

        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
            mostrarDados($variable);
            break;
        default:
            echo "Error";

    }
}

?>

</body>
</html>