<?php
    $pg = "inicio";
?>


<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="inicio" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once "menu.php";?>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 mt-4 text-center cohete">
                    <a href="proyectos.php"><img src="image/cohete.svg" class="img-cohete"></a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 offset-3 text-center">
                    <div class="my-4">
                        <p class="px-5 py-2">Bienvenid@ a mi sitio web sobre sistemas.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 offset-3 text-center">
                    <a href="proyectos.php" class="btn shadow">Conoce mis proyectos</a>
                </div>
            </div>
    </main>
    <footer class="container">
        <div class="row">
            <div class="col-12 col-sm-3 text center text sm-start">
                <a href="" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-3">
                Sponsor <a href="https://depcsuite.com">Depcsuite</a>
            </div>
            <div class="col-3">
                <a href="mailto:johaandreinagrivas@gmail.com">johaandreina09@gmail.com</a>
                </div>
    </footer>
    <div class="btn-whatsapp">
        <i class="fa-brands fa-whatsapp"></i>
    </div>
</body>

</html>