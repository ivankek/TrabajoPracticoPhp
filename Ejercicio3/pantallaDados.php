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
        <?php

        include_once "mostrarDados.php";
        ?>

        <div class="container w-75 py-5 bg-light border rounded flex-wrap">

            <h4 class="container d-flex justify-content-center text-primary">Elija cuantos dados quiere lanzar</h4>

            <hr class="container w-75 mt-4">

            <form class="container d-flex flex-column flex-lg-row flex-xl-row flex-md-row justify-content-center mt-4"
                  action="pantallaDados.php" method="post" enctype="multipart/form-data">

                <select class="w-15 me-4 mb-4 mb-md-0 mb-lg-0 mb-xl-0 bg-light border-1 rounded" name="dados">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>

                </select>
                <input class="border-0 rounded bg-primary text-white" type="submit" value="Tirar dados">

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