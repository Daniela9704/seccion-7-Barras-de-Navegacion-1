<?php

function validate($name, $email, $message, $form) {
    return !empty($name) && !empty($email) && !empty($message);
}

$status = "";

if ( isset($_POST["form"]) ) {

    if ( validate($_POST["name"], $_POST["email"], $_POST["message"], $_POST) ) {
        
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        // Mandar el correo

        $status = "success";
    }  else {
        $status = "danger";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulario de contacto</title>
</head>
<body>
    <?php if($status == "danger"): ?>
    
    <div class="alert danger">
        <span>Surgió un problema</span>
    </div>
    
    <?php endif; ?>
    

    <?php if($status == "success"): ?>
    
    <div class="alert success">
        <span>¡Mensaje enviado con éxito!</span>
    </div>
    
    <?php endif; ?>

<video src="dvg.mp4"  autoplay muted loop="true" width="1710"></video>
    <div class="container-nav">
      <nav class="navbar">
        <a href="#" class="brand"></a>
          <ul class="nav-links">
            <li><a href="index.html">Pagina Principal</a></li>
            <li><a href="codigos.html">Codigos HTML, Java, CSS, JavaScript</a></li>
            <li><a href="contacto.html">Contacto</a></li>  
            <li><a href="servicios.html">Servicios</a></li>
          </ul>
        </nav>
    </div>
    <form action="./" method="POST">

        <h1>Usuario</h1>

        <div class="input-group">
            <label for="name">Nombres:</label>
            <input type="text" name="name" id="name" autocomplete="given-name">
        </div>
        <div class="input-group" >
            <label for="lastname">Apellidos:</label>
            <input type="text" name="lastname" id="lastname" autocomplete="family-name">
        </div>
    
        <div class="input-group">
            <label for="phone">Teléfono: </label>
            <input type="tel" id="phone" name="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required autocomplete="phone">
        </div>
                
        <div class="input-group"> 
            <label for="email">Correo:</label>
            <input type="email" name="email" id="email" autocomplete="email">
        </div>

        <div class="input-group">
            <label for="message">Mensaje:</label>
            <textarea name="message" id="message"></textarea>
        </div>

        <div class="button-container">
            <button name="form" type="submit">Enviar</button>
        </div>

        <div class="contact-info"> 
            <div class="info">
                <span><i class="fas fa-map-marker-alt"></i> Avenida 6N No. 28N - 102.</span>
            </div>

            <div class="info">
                <span><i class="fas fa-phone"></i> +57 123 456 7890</span>
            </div>
        </div>

        <div>
                <li><a href="C:/xampp/htdocs/seccion-7-Barras-de-Navegacion/index.html">Contacto</a></li>  
        </div>

    </form>

    <script src="https://kit.fontawesome.com/bbff992efd.js" crossorigin="anonymous"></script>
    
</body>
</html>