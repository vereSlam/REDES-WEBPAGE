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
    <title>InfoDigital - DNS</title>
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
                <li><a href="#p-queesDNS">¿Qué es el DNS?</a></li>
                <li><a href="#p-historia">Historia</a></li>
              </ul>
            </li>
            <li><a href="dominios.php?<?php echo $_SESSION['token']; ?>">DOMINIOS</a>
                <ul>
                    <li><a href="dominios.php?<?php echo $_SESSION['token']; ?>">¿Que es un Dominio?</a></li>
                    <li><a href="dominios.php?<?php echo $_SESSION['token']; ?>">La importancia de Dominios</a></li>
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
<!-- ********************** CONTENIDO DNS******************************************** -->
    <aside id="secciones">
    <section class="dns" id="p-dns">
        <h2 id="p-queesDNS">¿Qué es el DNS?</h2>
        <p>
        El Sistema de Nombres de Dominio o por sus siglas en inglés DNS (Domain Name System) tiene como función
        principal el de relacionar dos datos: Nombres de dominios y direcciones IP, es decir, el DNS tiene como 
        entrada un nombre de dominio (URL) que se encarga de traducirlo a una dirección IP, los motivos o la necesidad de hacer
        esta traducción son por dos razones, la primera es porque los sistemas existentes en la redes de comunicaciones
        como internet están identificados con direcciones IP públicas, y el segundo motivo es porque las personas no podriamos
        memorizar todas las direcciones IP o aunque aún así sean las direcciones de páginas web que visitemos habitualmente.
        Los sistemas DNS son sistemas de base de datos o directorios distribuidos por internet, los cuales almacenan las relaciones
        entre nombre de dominio y sus correspondiente direcciones numericas bajo el protocolo de internet. Podríamos pensar al DNS 
        como una agenda de contactos en tu telefono movil, donde tienes a una persona vinculada a un numero de telefono, entonces la 
        labor que realizas para buscar el contacto y llamarle es lo que hace el DNS entre los nombre de dominio y las direcciones IP,
        la semejanza se vería entre el nombre del dominio y el nombre de contacto y la semejanza en trene la dirección IP y el numero 
        de teléfono.
            <br> <br>
        Cuando se quiere ingresar a un sitio web en internet, abrimos el navegador y escribimos el nombre del 
        sitio por ejemplo, www.google.com, al hacer esto el navegador envía una petición al servidor y el servidor
        responde con el contenido del sitio web, ¿Pero como sabe el navegador donde se encuentra el servidor de la 
        dirección solicitada? esto es posible gracias al DNS.
            <br> <br>
        Cuando un computador desea comunicarse con otro através del internet todos los mensajes deben contener 
        la direccion del transmisor y del receptor, las direcciones que utilizan las computadoras son de tipo 
        numerico y se llaman direcciones IP, cada dirección IP está compuesta de cuatro números que pueden ir de 
        0 a 255 y cada numero está separado por un punto por ejemplo la dirección IP 216.58.222.196 que corresponde
        a google, es decir, si queremos enviar un mensaje al servidor web de google tendríamos que enviar un mensaje
        al servidor 216.58.222.196. Siguiendo con el ejemplo primero, si la computadora quiere navegar a google este
        enviaría un mensaje al servidor utilizando las direcciones IP, iría dentro del mensaje su dirección IP y la
        dirección IP del destino, que en este caso sería la dirección IP de google, una vez que reciba el mensaje el
        servidor entrega el contenido del sitio a quien hizo la petición, de hecho si nosotros abrimos el navegador
        y ponemos la dirección IP de google nos aparecería el contenido del sitio web. Se utilizan numeros en las
        direcciones IP ya que las computadoras son muy buenas manejando numeros, sin embargo para las personas
        recordar una dirección IP en numeros se vuelve muy dificil ya que estamos acostumbrados a memorizar nombres 
        y se nos hace más fácil recordar este formato de información, debido a eta diferencia que existe entre el computador
        y el ser humano nace el DNS, gracias al DNS solo necesitamos recordar el nombre de los servidores como google.com,
        facebook.com, amazon.com entre otros, y no su dirección IP y el DNS se encarga de convertir el nombre del servidor
        en la dirección IP que le corresponde, es decir el DNS es un traductor de nombre de dominio a direcciones IP.
        <br> <br>
        Una de las preguntas que se hacen muchas personas, ¿DNS es un servidor, un servicio o una funcionalidad?
        Puede ser todo eso, DNS se trata de un sistema, un servicio de una funcionalidad y esta funcionalidad puede ser entregada
        desde un servidor dedicado a ello exclusivamente o puede ser entregado como un servicio que puede estar dentro de un
        servidor. 
            <br> <br>
        ¿Puede haber mas de una IP vinculada o relacionada con un único nombre de dominio? por supuesto, un nombre de dominio
        puede tener muchas IP vinculadas a el, esto se hace habitualmente para evitar una sobrecarga, la peticón hirá a la siguiente
        IP si no puede hacerlo con la primera opción, imagina que todo el mundo tuviera que alcanzar una única dirección IP en un único servidor, 
        tiene que haber un valance por la carga, por los paises etc.
        </p>
        <h2 id="p-historia">HISTORIA</h2>
        <p>
            El sistema de nombres de dominio o DNS surgió a mediados de la década de los 80, pero no fue hasta finales de los noventa cuando comenzó a 
            popularizarse, aunque la historia del DNS en relidad se remonta a los años setenta, cuando los ordenadores conectados a una 
            red ya contaban una dirección numérica.
            <br>
            Para poder acceder a cada uno de estos ordenadores se tenía que saber de memoria esta dirección, dado que el sistema de nomenclatura 
            de ese entonces era bastante limitado. Con la alza del número de dispositivos conectados a Internet y la necesidad para encontrar una 
            forma menos complicada para recordar las direcciones IP fue que nació el sistema DNS. 
            <br>
            Paul Mockapetris creó un sistema jerárquico 
            en niveles, de la misma forma que dentro de un libro hay capítulos. Cada una de las etiquetas jerárquicas asignadas a cada dispositivo 
            estarían compuestas por dos elementos: por un lado, el nombre de dominio, y por otra el TLD o extensión. Por ejemplo, en el caso de 
            dinahosting.com, lo que va antes del punto es el nombre y .COM es la extensión.
        </p>
    </section>
   
    <!-- ********************** CONTENDIDO SIMILAR******************************************** -->
    <section class="mas" id="p-mas">
        <h2>CONTENIDO SIMILAR</h2>
        <div class="p-mas">
            <aside id="cuad2">
                <h2>¿Qué son los dominios?</h2>
              <div class="img">
                <img src="../imagenes/mas/img2.jpg" alt="que son los dominios">
              </div>
            <a href="dominios.php?<?php echo $_SESSION['token']; ?>">Leer más <i class="fa-solid fa-arrow-right-long"></i></a>
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
                    <img src="../imagenes/mas/img3.jpg" alt="que es DHCP">
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