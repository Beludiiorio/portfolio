<?php
$pg = "proyectos";
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Proyectos </title>
  <link rel="stylesheet" href="css/fontawesome/fontawesome-free-6.1.0-web/css/all.min.css">
  <link rel="stylesheet" href="css/fontawesome/fontawesome-free-6.1.0-web/css/fontawesome.min.css">
  <link rel="stylesheet" href="css/Bootstrap/bootstrap/css/bootstrap.min.css">
  <script src="css/Bootstrap/bootstrap/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="Proyectos">
  <?php include_once("header.php"); ?>
  <main class="container mt-5">
    <div class="row">
      <div class="col-12 pt-3 col-pb-5">
        <h1>Proyectos</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p>Los siguientes son algunos de los trabajos que he realizado: </p>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-sm-4 p-3">
        <div class="proyecto">
          <img src="images/abmclientes.png" alt="ABM Clientes" class="img-fluid">
          <h2 class="p-3 d-block">ABM CLIENTES</h2>
          <p class="p-3 pb-5 d-block"> Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap y Json </p>
          <div class="row my-5">
            <div class="col-6 ps-4">
              <a href="" target="_blank" class="btn btn-rojo">Ver online</a>
            </div>
            <div class="col-6 text-center">
              <a href="" target="_blank">Código fuente</a>
            </div>
          </div>
        </div>

      </div>
      <div class="col-12 col-sm-4 p-3">
        <div class="proyecto">
          <img src="images/abmventas.png" alt="ABM VENTAS" class="img-fluid">
          <h2 class="p-3 d-block"> SISTEMA DE GESTIÓN DE VENTAS </h2>
          <p class="p-3 pb-5 d-block"> Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines. </p>
          <div class="row my-5">
            <div class="col-6 ps-4">
              <a href="" target="_blank" class="btn btn-rojo">Ver online</a>
            </div>
            <div class="col-6 text-center">
              <a href="" target="_blank">Código fuente</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-4 p-3">
        <div class="proyecto">
          <img src="images/proyecto-integrador.png" alt="ABM Clientes" class="img-fluid">
          <h2 class="p-3 d-block">PROYECTO INTEGRADOR</h2>
          <p class="p-3 pb-5 d-block">Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines. </p>
          <div class="row my-5">
            <div class="col-6 ps-4">
              <a href="" target="_blank" class="btn btn-rojo">Ver online</a>
            </div>
            <div class="col-6 text-center">
              <a href="" target="_blank">Código fuente</a>
            </div>
          </div>
        </div>




  </main>
  <footer class="container col-sm-12 mt-5">
    <div class="row">
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