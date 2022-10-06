<?php
    $pg = "contacto";
    if($_POST){
        $nombre = $_POST["txtNombre"];
        $correo = $_POST["txtCorreo"];
        $telefono = $_POST["txtTelefono"];
        $mensaje = $_POST["txtMensaje"];
    
        // Varios destinatarios
        $para = "johaandreina09@gmail.com";
        $titulo = 'Recibiste un mensaje desde tu Web';
    
        // mensaje
        $cuerpo = "
        Nombre: $nombre <br>
        Correo: $correo <br>
        Telefono: $telefono <br>
        Mensaje: $mensaje
        ";
    
        // Para enviar un correo HTML, debe establecerse la cabecera Content-type
        $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
    
        // Cabeceras adicionales
        $cabeceras .= 'To: johaandreina09@gmail.com' . "\r\n";
        $cabeceras .= 'From: contacto@johannysguzman.com.ar' . "\r\n";
    
        // Enviarlo
        //mail($para, $titulo, $cuerpo, $cabeceras);
        header("Location: confirmacion-envio.php");
    }
    ?>



<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"> </script>
    <link rel="stylesheet" href="css/estilos.css">

</head>

<body id="contacto" class="d-flex flex-column h-100">
    <header class="container">
        <nav class="navbar navbar-expand-md mb-4">
            <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sobre-mi.php">Sobre mí</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="proyectos.php">Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contacto.php">Contacto</a>
                    </li>
                </ul>
            </div>
            <div class="d-inline">
                <a href="" class="btn btn-rojo">Descargar mi Cv<i class="fa-solid fa-download"> </i> </a>
           </div>
        </nav>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p> Te invito a que te contactes enviandome un mensaje o bien por whatsapp</p>
            </div>
            <div class="col-12 col-sm-6">
                <form action="" method="POST">
                    <div class="pb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control">
                    </div>
                    <div class="pb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control">
                    </div>
                    <div class="pb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Telefono"
                            class="form-control">
                    </div>
                    <div class="pb-3">
                        <textarea name="txtMensaje" id="txtMensaje" class="form-control"
                            placeholder="Escribe aqui tu mensaje"></textarea>
                    </div>
                    <div class="btn">
                        <button type="submit" id="btnEnviar" name="btnEnviar" class="btn">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer class="container mt-auto pb-4">
        <div class="btn-whatsapp">
            <i class="fa-brands fa-whatsapp"></i>
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

</body>

</html>