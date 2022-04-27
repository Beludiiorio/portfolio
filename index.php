

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
<?php include_once ("header.php"); ?>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-4 text-center div-hello">
                <a href="proyectos.php"><img src="images/hello1.svg"  class="hello"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 my-4 mt-sm-5 text center offset-sm-3 mb-3">
                <div class="bienvenida pt-2"> 
                     <p class="p-1"> Hola! Bienvenid@ a mi sitio web.</p> 
                </div>
            </div>
        </div>
        <div class="row">
            <div class=" mis-proyectos col-12">
                <a href="proyectos.php" class="btn shadow"> Conoce mis proyectos </a>
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