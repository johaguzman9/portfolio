<?php
    $pg = "sobre-mi";
?>


<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mi</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="sobre-mi" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once "menu.php"; ?>
    </header>
    <main>
        <section class="container" id="descripcion">
            <div class="row">
                <div class="col-12 col-sm-7">
                    <h1 class="pb-5 pt-3">Sobre mí</h1>
                    <p>Apasionada por la tecnología y gestión de proyectos.</p>
                    <a href="contacto.php" class="btn btn-rojo">Enviar mensaje</a>
                </div>
                <div class="col-12 col-sm-5">
                    <img src="image/yo.jpg" alt="Johannys Guzman" tittle="Johannys Guzman"
                        class="foto-perfil">
                </div>
            </div>
            </div>
            <section id="tecnologias" class="color-gradiente pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 pt-5">
                            <h2>
                                Stack tecnológico
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-sm-2 text-center">
                            <div class="cajas mb-4 pt-5">
                                <h3>JavaScript</h3>
                                <img class="img-fluid d-block mx-auto" width="60" src="image/javascript.jpeg"
                                    alt="JavaScript">
                            </div>
                        </div>
                        <div class="col-6 col-sm-2 text-center">
                            <div class="cajas mb-4 pt-5">
                                <h3>PHP</h3>
                                <img class="img-fluid d-block mx-auto" width="60" src="image/hwUcGZ41_400x400.jpg"
                                    alt="php">
                            </div>
                        </div>
                        <div class="col-6 col-sm-2 text-center">
                            <div class="cajas mb-4 pt-5">
                                <h3>HTML5</h3>
                                <img class="img-fluid d-block mx-auto" width="60" src="image/kEpgHiC9.png" alt="html5">
                            </div>
                        </div>
                        <div class="col-6 col-sm-2 text-center">
                            <div class="cajas mb-4 pt-5">
                                <h3>React.js</h3>
                                <img class="img-fluid d-block mx-auto" width="60" src="image/logo 5.png" alt="react.js">
                            </div>
                        </div>
                        <div class="col-6 col-sm-2 text-center">
                            <div class="cajas mb-4 pt-5">
                                <h3>jQuery</h3>
                                <img class="img-fluid d-block mx-auto" width="60" src="image/j queri.jpg" alt="jquery">
                            </div>
                        </div>
                        <div class="col-6 col-sm-2 text-center">
                            <div class="cajas mb-4 pt-5">
                                <h3>Bootstrap</h3>
                                <img class="img-fluid d-block mx-auto" width="60" src="image/bootstrap.png"
                                    alt="bootstrap">
                            </div>
                        </div>
                        <div class="row mt-sm-4 mt-0">
                            <div class="col-6 col-sm-2 text-center">
                                <div class="cajas mb-4 pt-5">
                                    <h3>Laravel</h3>
                                    <img class="img-fluid d-block mx-auto" width="90" src="image/220px-Laravel.svg_.png"
                                        alt="laravel">
                                </div>
                            </div>
                            <div class="col-6 col-sm-2 text-center">
                                <div class="cajas mb-4 pt-5">
                                    <h3>MySQL</h3>
                                    <img class="img-fluid d-block mx-auto" width="60" src="image/mariadb-logo.png"
                                        alt="MySQL">
                                </div>
                            </div>
                            <div class="col-6 col-sm-2 text-center">
                                <div class="cajas mb-4 pt-5">
                                    <h3>CSS</h3>
                                    <img class="img-fluid d-block mx-auto" width="60" src="image/css.png" alt="CSS">
                                </div>
                            </div>
                            <div class="col-6 col-sm-2 text-center">
                                <div class="cajas mb-4 pt-5">
                                    <h3>GIT</h3>
                                    <img class="img-fluid d-block mx-auto" width="60" src="image/git.png" alt="GIT">
                                </div>
                            </div>
                            <div class="col-6 col-sm-2 text-center">
                                <div class=" cajas mb-4 pt-5">
                                    <h3>Apache</h3>
                                    <img class="img-fluid d-block mx-auto" width="110" src="image/apache.png"
                                        alt="apache">
                                </div>
                            </div>
                            <div class="col-6 col-sm-2 text-center">
                                <div class="cajas mb-4 pt-5">
                                    <h3>Mercadopago</h3>
                                    <img class="img-fluid d-block mx-auto" width="60" src="image/mercadopago.jpg"
                                        alt="mercadopago">
                                </div>
                            </div>
            </section>
            <section id="experiencia" class="container">
                <div class="row">
                    <div class="col-12 pt-5 pb-4">
                        <h2>
                            <i class="fas fa-briefcase"></i>
                            Experiencia Laboral
                        </h2>
                    </div>
                </div>
                <div class="row shadow">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2 p-5 ">
                                <img src="image/sin-logo.png" class="img-fluid" title="sin-logo">
                            </div>
                            <div class="col-12 col-sm-10 p-3">
                                <h3>Director-Founder</h3>
                                <h4>Consultor Desarrollador Freelance</h4>
                                <h5>2016-presente</h5>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum temporibus eveniet
                                    perferendis quibusdam distinctio adipisci, at iure impedit, ullam vero repudiandae
                                    suscipit eligendi minima quisquam nisi, necessitatibus eius facilis vitae!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2 p-5">
                                <img src="image/sin-logo.png" class="img-fluid" title="sin-logo">
                            </div>
                            <div class="col-12 col-sm-10 p-3">
                                <h3>Consultor Desarrollador Freelance</h3>
                                <h4>Certificado Digital SA</h4>
                                <h5>2016-presente</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis dolorem impedit nihil
                                    perferendis nisi ullam vel nulla. Dolorem beatae aperiam esse laborum molestiae sint
                                    quasi quas culpa, nostrum, maxime id.</p>
                            </div>
                        </div>
                    </div>
            </section>
            <section id="formacion" class="container">
                <div class="row">
                    <div class="col-12 pt-5 pb-4">
                        <h2>
                            <i class="fas fa-graduation-cap"></i>
                            Formacion Academica
                        </h2>
                    </div>
                </div>
                <div class="row shadow">
                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-2 py-3">
                                <img src="image/Logo_UGMA.png" class="img-fluid" title="ugma">
                            </div>
                            <div class="col-12 col-sm-10 p-3">
                                <h3>ABOGADO</h3>
                                <h4>Universidad Gran Mariscal de Ayacucho</h4>
                                <h5>2009/2015</h5>
                                <p>Abogado, recibida en Cumaná-Venezuela.</p>
                            </div>
                        </div>
                    </div>
            </section>
            <section id="cursos" class="container">
                <div class="row">
                    <div class="col-12 pt-5 pb-4">
                        <h2>
                            <i class="fas fa-graduation-cap">

                            </i>
                            Cursos de desarrollo profesional
                        </h2>
                    </div>
                </div>
                <div class="row shadow">
                    <div class="row">
                        <div class="col-2 py-3">
                            <img src="image/depc logo.png" class="img-fluid baw" title="depcsuite">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Programación Fullstack</h3>
                            <h4>DEPCSUITE</h4>
                            <h5>Expedicion:Abril 2022</h5>
                        </div>
                    </div>
                </div>
            </section>
            <section id="idiomas">
                <div class="container">
                    <div class="row py-5 mx-0">
                        <div class="col-12 col-sm-6 pb-3 pb-sm-0">
                            <div class="row mr-sm-1 bg-white card-idioma shadow me-sm-1">
                                <div class="col-4 text-center card">
                                    <i class="fas fa-comment-alt"></i>
                                </div>
                                <div class="col-8 p-5">
                                    <h2>IDIOMAS</h2>
                                    <ul>
                                        <li>Español-Nativo</li>
                                        <li>Ingles-Basico</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="row ml-sm-2 bg-white card-idioma shadow ms-sm-1">
                                <div class="col-4 text-center card">
                                    <i class="fas fa-star">
                                    </i>
                                </div>
                                <div class="col-8 p-5">
                                    <h2>HOBBIES</h2>
                                    <ul>
                                        <li>Leer</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
            </section>

    </main>

    <footer class="container mt-auto pb-4">
        <div class="btn-whatsapp">
            <i class="fa-brands fa-whatsapp"></i>
        </div>
        <div class="row">
            <div class="col-3">
                <a href="" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="www.linkedin.com/in/johannys-guzman-a40b64185" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
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