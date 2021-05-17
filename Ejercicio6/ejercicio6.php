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
        <h3 class="text-center mb-4">Solución Ejercicio 6:</h3>


        <div class="container w-75 py-5 bg-light border rounded flex-wrap">

            <h4 class="container d-flex text-center justify-content-center text-primary">Ingrese sus datos</h4>

            <hr class="container w-75 mt-4">

            <form class="container d-flex flex-column justify-content-center mt-4"
                  action="pantallaInterplanetario.php" method="post" enctype="multipart/form-data">

                <div class="container d-flex flex-column justify-content-center mb-4 col-12 col-lg-4">

                    <input class="text-center justify-content-center" type="text" required name="nombre"
                           placeholder="Nombre de ingresante">
                    <input class="mt-2 text-center justify-content-center" type="text" required name="planeta"
                           placeholder="Planeta de ingresante">

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