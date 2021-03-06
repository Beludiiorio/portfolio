<?php
$pg = "contacto";

if ($_POST) { //Capturamos las variables 
      $nombre= $_POST["txtNombre"];
      $correo= $_POST["txtCorreo"];
      $telefono= $_POST["txtTelefono"];
      $mensaje= $_POST["txtMensaje"];



// Varios destinatarios
$para  = "beludiiorio@gmail.com";
$titulo ='Recibiste un mensaje desde tu web';

// Mensaje
$cuerpo = "
Nombre: $nombre <br>
Correo: $correo <br>
Telefono: $telefono <br>
Mensaje: $mensaje 
";

// // Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To:  <beludiiorio@gmail.com>, Kelly <kelly@example.com>' . "\r\n";
$cabeceras .= 'From: beludiiorio@gmail.com>' . "\r\n"; //Remitente

// Enviarlo 
//(llamo a la funcion que lo envia)
//mail($para, $título, $mensaje, $cabeceras);
header("Location: confirmacion_envio.php");

}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Contacto </title>
  <link rel="stylesheet" href="css/fontawesome/fontawesome-free-6.1.0-web/css/all.min.css">
  <link rel="stylesheet" href="css/fontawesome/fontawesome-free-6.1.0-web/css/fontawesome.min.css">
  <link rel="stylesheet" href="css/Bootstrap/bootstrap/css/bootstrap.min.css">
  <script src="css/Bootstrap/bootstrap/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="Contacto">
  <?php include_once("header.php"); ?>
  <main class="container mt-5">
    <div class="row">
      <div class="col-12 mt-3 mb-5">
        <h1>Contacto</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-sm-6">
        <p> Te invito a que te contactes enviándome un mensaje o bien por whatsapp.</p>
      </div>

      <div class="col-12 col-sm-6">
        <form action="" method="POST">
          <div class="mb-3">
            <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control" required>
          </div>
          <div class="mb-3">
            <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control" required>
          </div>
          <div class="mb-3">
            <input type="text" name="txtTeléfono/Whatsapp" id="txtTeléfono/Whatsapp" placeholder="Teléfono/Whatsapp" class="form-control" required>
          </div>
          <div class="mb-3">
            <textarea type="text" name="txtMensaje" id="txtMensaje" placeholder="Escribe aquí tu mensaje" class="form-control" required></textarea>
          </div>
          <div class="mb-3">
            <button type="submit" id="btnEnviar" name="btnEnviar" class="btn btn-blanco px-4">ENVIAR </button>
          </div>
        </form>
      </div>
    </div>

  </main>
  <footer class="container mt-5">
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