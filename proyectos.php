<?php
    $pg = "proyectos";
?>


<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="proyectos" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once "menu.php";?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1>Proyectos</h1>
                <p> Los siguientes son algunos de los trabajos que he realizado:</p>
            </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-4 p-4">
                    <div class="row border proyecto pb-5">
                        <div class="col-12 p-0">
                            <img src="image/abmclientes.png" alt="ABM CLIENTES" class="img-fluid">
                            <h2>ABM CLIENTES</h2>
                            <p class="py-2 px-3">Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap y Json.</p>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 text-center">
                            <a href="#" class="link-rojo">Código fuente</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4 p-4">
                    <div class="row border proyecto pb-5">
                        <div class="col-12 p-0">
                            <img src="image/abmventas.png" alt="SISTEMA DE GESTION DE VENTAS" class="img-fluid">
                            <h2>SISTEMA DE GESTION DE VENTAS</h2>
                            <p class="py-2 px-3">Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap y Json.</p>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 text-center">
                            <a href="#" class="link-rojo">Código fuente</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4 p-4">
                    <div class="row border proyecto pb-5">
                        <div class="col-12 p-0">
                            <img src="image/proyecto-integrador.png" alt="PROYECTO INTEGRADOR" class="img-fluid">
                            <h2>PROYECTO INTEGRADOR</h2>
                            <p class="py-2 px-3">Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap y Json.</p>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 text-center">
                            <a href="#" class="link-rojo">Código fuente</a>
                        </div>
                    </div>
                </div>
            
            </div>
           
                  
                                      
    </main>

    <footer class="container mt-10">
        </div>
        <div class="row">
            <div class="col-3">
                <a href="" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-3">
                Sponsor <a href="https://depcsuite.com">Depcsuite</a>
            </div>
            <div class="col-3">
                <a href="mailto:johaandreinagrivas@gmail.com">johaandreina09@gmail.com</a>
            </div>
        </div>
    </footer>
    <div class="btn-whatsapp">
        <i class="fa-brands fa-whatsapp"></i>
    </div>
</body>

</html>