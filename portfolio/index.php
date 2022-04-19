<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontawesome/fontawesome-free-6.1.0-web/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/fontawesome-free-6.1.0-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/Bootstrap/bootstrap/css/bootstrap.min.css">
    <script src="css/Bootstrap/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <title>Inicio </title>
</head>

<body id="Inicio">
    <header class="container">
        <nav class="navbar navbar-expand-md mb=4">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link py-1 px-3 px-sm-4 active" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-1 px-3 px-sm-4"href="sobre-mi.php">Sobre mi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-1 px-3 px-sm-4" href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-1 px-3 px-sm-4 " href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <a class="btn btn-rojo"><i class="fa-solid fa-file-arrow-down"></i> Descargar mi CV</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-4 text-center div-cohete">
                <a href="proyectos.html" ><img src="images/cohete.svg" target="_blank" class="cohete"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 my-4 mt-sm-5 text center offset-sm-3 mb-3">
                <div class="bienvenida"> 
                     <p class="p-1"> Bienvenid@ a mi sitio web sobre docencia en sistemas.</p> 
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mis-proyectos">
                <a href="proyectos.html" class="btn shadow"> Conoce mis proyectos</a>
            </div>
        </div>
    </main>
    <footer class="container">
        <div class="row mt-5 pb-3">
            <div class="col-12 col-sm-3">
                <a href="https://github.com/Beludiiorio" target="_blank" title="Github">
                    <i class="fa-brands fa-github"></i></a>
                <a href="https://www.linkedin.com/in/belen-di-iorio-a04630195/" target="_blank" title="Linkedin">
                    <i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <div class="col-12 col-sm-3">Sponsor<a href="https://depcsuite.com">DePC Suite</a></div>
            <div class="col-12 col-sm-3"><a href="mailto:beludiiorio@gmail.com>">beludiiorio@gmail.com </div>
        </div>
    </footer>
    <div class="whatsapp pt-3 pb-4 px-3">
        <a href="https://api.whatsapp.com/send?phone=541150207014">
            <i class="fa-brands fa-whatsapp"></i></a>
    </div>
</body>

</html>