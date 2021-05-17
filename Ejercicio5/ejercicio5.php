<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Css Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="../Css/Estilos.css">

    <title>Tp Algoritmos y funciones del lenguaje</title>
</head>
<body>
<header>

    <?php include("../header.php"); ?>

</header>

<main>


    <div class="container mt-5 mb-5 d-flex justify-content-center flex-column">
        <h3 class="text-center mb-4">Solución Ejercicio 5:</h3>

        <?php

        include_once "LogicaMatriz.php";

        ?>

        <div class="container w-75 py-5 bg-light border rounded flex-wrap">

            <h4 class="container d-flex text-center justify-content-center text-primary">Elija la matriz cuadrada que
                quiere</h4>

            <hr class="container w-75 mt-4">

            <form class="container d-flex flex-column justify-content-center mt-4"
                  action="ejercicio5.php" method="post" enctype="multipart/form-data">

                <div class="container d-flex flex-column flex-lg-row flex-xl-row flex-xxl-row justify-content-center mb-4">

                    <input type="number" min="2" required name="matriz" placeholder="Tamaño de matriz">

                </div>

                <div class="d-flex justify-content-center">
                    <input class=" border-0 rounded bg-primary text-white" type="submit">
                </div>
            </form>

        </div>
    </div>

</main>

<footer>

    <?php include("../footer.php") ?>
</footer>


<!-- Script Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
        crossorigin="anonymous"></script>

</body>
</html>