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
    <link rel="stylesheet" href="../estilos/style.css">
    <title>InfoDigital - Dominios</title>
    <link rel="stylesheet" href="../estilos/mediaPag.css">
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
        <!-- ***************** MENU INFERIOR ********************** -->
        <div class="img">
            <img src="../imagenes/redes.jpg"  alt="Imagen de Freepik nube" class="nube">
        </div> 
         <div id="menum-inferior">
            <input type="checkbox" id="btn-menu-inferior">
            <label for="btn-menu-inferior" id="mmovill"><i class="fa-solid fa-ellipsis-vertical"></i></label>  
            <nav class="menu-inferior">
                <ul>
                    <a href="dns.php?<?php echo $_SESSION['token']; ?>">DNS</a>
                    <a href="dominios.php?<?php echo $_SESSION['token']; ?>">DOMINIOS</a>
                    <a href="microsoftAzure.php?<?php echo $_SESSION['token']; ?>">MICROSOFT AZURE</a>
                    <a href="servidores.php?<?php echo $_SESSION['token']; ?>">SERVIDORES</a>
                    <a href="dhcp.php?<?php echo $_SESSION['token']; ?>">DHCP</a>
                </ul>
            </nav>
         </div>
    </header>
<!-- ********************** INDICE******************************************** -->
<main>
    <aside id="indice">
        <h1>INDICE</h1>
        <ul>
            <li><a href="dns.php?<?php echo $_SESSION['token']; ?>">DNS</a>
              <ul>
                <li><a href="dns.php?<?php echo $_SESSION['token']; ?>">¿Qué es el DNS?</a></li>
                <li><a href="dns.php?<?php echo $_SESSION['token']; ?>">Historia</a></li>
              </ul>
            </li>
            <li><a href="dominios.php?<?php echo $_SESSION['token']; ?>">DOMINIOS</a>
                <ul>
                    <li><a href="#p-QueesunDominio">¿Que es un Dominio?</a></li>
                    <li><a href="#p-Importante">La importancia de Dominios</a></li>
                </ul>
            </li>
            <li><a href="microsoftAzure.php?<?php echo $_SESSION['token']; ?>">MICROSOFT AZURE</a>
                <ul>
                    <li><a href="microsoftAzure.php?<?php echo $_SESSION['token']; ?>">¿Que es Azure?</a></li>
                    <li><a href="microsoftAzure.php?<?php echo $_SESSION['token']; ?>">Tipos de Azure</a></li>
                    <li><a href="microsoftAzure.php?<?php echo $_SESSION['token']; ?>">Historia de Azure</a></li>
                  </ul>
            </li>
            <li><a href="servidores.php?<?php echo $_SESSION['token']; ?>">SERVIDORES</a>
                <ul>
                    <li><a href="servidores.php?<?php echo $_SESSION['token']; ?>">Informacion servidores</a></li>
                </ul>
            </li>
            <li><a href="dhcp.php?<?php echo $_SESSION['token']; ?>">DHCP</a>
                <ul>
                    <li><a href="dhcp.php?<?php echo $_SESSION['token']; ?>">¿Qué es el DHCP?</a></li>
                    <li><a href="dhcp.php?<?php echo $_SESSION['token']; ?>">¿Cuándo utilizar un DHCP?</a></li>
                    <li><a href="dhcp.php?<?php echo $_SESSION['token']; ?>">Ventajas y desventajas de utilizar DHCP</a></li>
                    <li><a href="dhcp.php?<?php echo $_SESSION['token']; ?>">Mecanismos para asignar direcciones IP por DHCP</a></li>
                  </ul>
            </li>
        </ul>
    </aside>
<!-- ********************** CONTENIDO DOMINIOS******************************************** -->
<aside id="secciones">
    <section class="dominios" id="p-dominios">
        <h2 id="p-QueesunDominio">DOMINIOS</h2>
        <p> 
            Un dominio es un nombre único e inequívoco a nivel mundial para una región de Internet delimitada de forma lógica como,
            por ejemplo, una página web. Los usuarios de Internet ven los dominios de la siguiente forma:
            <br> <br>
            www.example.com
            <br> <br>
            El dominio, como parte fundamental de un Uniform Resource Locator (URL), señala dónde puede ser encontrado un recurso
            dentro del sistema jerárquico de nombres de dominio Domain Name System (DNS). La traducción de los nombres de dominio en
            direcciones IP se realiza a través de los llamados Nameserver, servidores especializados responsables de la asignación
            de nombres a las direcciones IP. Este servicio funciona de manera similar a un servicio de información telefónica: un
            usuario escribe el dominio www.example.com en el campo de búsqueda de su navegador web y este envía la solicitud al
            Nameserver correspondiente.
    
        </p>
        <h2 id="p-Importante">La importancia de Dominios son</h2>
        <p>
            Registrar un dominio en Internet es el primer paso para tener presencia en la web. Sin embargo, con solo un dominio no
            podrás publicar tu sitio web, ya que también necesitarás un web hosting.
            Es importante recalcar que con la elección y registro de tu dominio en Internet podrás crear cuentas de correos
            personalizados que te permitirán proyectar profesionalismo y ganarte la confianza de los clientes potenciales.
            Otro de los puntos importantes de los dominios en Internet es que son términos memorizables y fáciles de recordar por
            los internautas, porque ¿no te parece que es más sencillo recordar google.com que su dirección IP
            <br> <br>
            Por último, los nombres de un dominio en Internet son personalizables, así que suelen reflejar la naturaleza del sitio
            web, es decir, si buscas a la compañía Hubspot, solo debes escribir su nombre y su sitio web aparecerá de primero con el
            dominio de hubspot.es en los buscadores web.
            Recuerda que será mucho más sencillo encontrarte si eliges un dominio que va acorde a lo que ofreces o quién eres.
            Ahora bien, en este punto quizá confundas lo que es un dominio en internet con una URL.
    </p>
    </section>
    <!-- ********************** CONTENDIDO SIMILAR******************************************** -->
    <section class="mas" id="p-mas">
        <h2>CONTENIDO SIMILAR</h2>
        <div class="p-mas">
            <aside id="cuad1">
                <h2>¿Qué son los DNS?</h2>
              <div class="img">
                <img src="../imagenes/mas/img1.jpg" alt="que son los DNS">
              </div>
            <a href="dns.php?<?php echo $_SESSION['token']; ?>">Leer más <i class="fa-solid fa-arrow-right-long"></i></a>
            </aside>
            <aside id="cuad3">
                <h2>Microsoft Azure lo nuevo</h2>
             <div class="img">
                <img src="../imagenes/mas/img4.jpg" alt="microsoft Azure">
              </div>
              <a href="microsoftAzure.php?<?php echo $_SESSION['token']; ?>">Leer más <i class="fa-solid fa-arrow-right-long"></i></a>
            </aside>
            <aside id="cuad4">
                <h2>Tipos de servidores</h2>
                <div class="img">
                    <img src="../imagenes/mas/img5.jpg" alt="tipos de servidores">
                </div>
                <a href="servidores.php?<?php echo $_SESSION['token']; ?>">Leer más <i class="fa-solid fa-arrow-right-long"></i></a>
            </aside>
            <aside id="cuad5">
                <h2>¿Qué es DHCP?</h2>
                <div class="img">
                    <img src="../imagenes/mas/img3.jpg" alt="que es dhcp">
                </div>
                <a href="dhcp.php?<?php echo $_SESSION['token']; ?>">Leer más <i class="fa-solid fa-arrow-right-long"></i></a>   
             </aside>
        </div>
    </section>
</aside>
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