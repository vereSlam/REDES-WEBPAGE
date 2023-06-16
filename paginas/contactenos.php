<?php

session_start();
$hora = date('H:i');
$session_id = session_id();
$token = hash('sha256', $hora.$session_id);
 
$_SESSION['token'] = $token;
 

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="info Digital" href="../logo/logo.png">
    <link rel="stylesheet" href="../estilos/estiloSobreNosotros.css">
    <link rel="stylesheet" href="../estilos/contactenos.css">
    <title>Sobre Nosotros</title>
    <link rel="stylesheet" href="../media.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
   
    <!-- ********************** CABECERA DE LA WEB ******************************************** -->
    <header id="cajacabecera">
         <!-- ***************** MENU SUPERIOR ********************** -->
        <div id="cabecera">
            <input type="checkbox" id="btn-menu">
            <label for="btn-menu" id="mmovil"><i class="fa-sharp fa-solid fa-list-ul"></i></label>  
            <nav class="menu">
                <ul>
                    <li><a href="../index.php?<?php echo $_SESSION['token']; ?>"><i class="fa-solid fa-house-chimney"></i>Inicio</a></li>
                    <li><a href="sobreNosotros.php?<?php echo $_SESSION['token']; ?>"><i class="fa-solid fa-calendar-days"></i>Sobre Nosotros</a></li>
                    <li><a href="contactenos.php?<?php echo $_SESSION['token']; ?>"><i class="fa-solid fa-user"></i></i>Contactenos</a></li>
                    <li><a href="mas.php?<?php echo $_SESSION['token']; ?>"><i class="fa-solid fa-laptop-code"></i>Más</a></li>
                </ul>
            </nav>
        </div>
    </header>
<!-- ********************** INICIO******************************************** -->
    <main class="formulario">
         <form action="../config/guardarrespuestas.php" name="contact" method="post">
         <p> Formulario de contacto</p>
             <div class="espacio">
                <input type="text" name="nombresUsuario" placeholder="Ingrese su nombre"> <br>
           </div>
           <div class="espacio">
                <input type="email" name="correoUsuario" placeholder="Ingrese su correo"> <br>
            </div>
            <div class="espacio">
                <input type="text" name="asunto" placeholder="Asunto"> <br>
            </div>
            <div class="espacio">
                <textarea name="mensaje" placeholder="Escriba su mensaje" cols="35" rows="6"></textarea> <br>
            </div>
            <div class="espacio" id="button">
                <input type="submit" value="Enviar" class="alinear">
            </div>
    </form>
</main>
    <!-- ********************** FOOTER******************************************** --> 
    <footer id="piepagina">
        <h3>InfoDigital | 2023</h3>
        <!-- <div class="cajapie">
            <ul>
                <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
                <li><a href=""><i class="fa-solid fa-envelope"></i></a></li>
                <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
            </ul>
        </div> -->
    </footer>
  </body>
</html>