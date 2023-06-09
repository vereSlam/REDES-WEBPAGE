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
    <title>InfoDigital - Servidores</title>
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
                    <li><a href="#p-infoservidor">Informacion servidores</a></li>
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
<!-- ********************** CONTENIDO SERVIDORES******************************************** -->
    <aside id="secciones">
    <section class="server" id="p-server">
        <h2 id="p-infoservidor">Información de Servidores</h2>
        <head>
            <style>
                h1 {
                    text-align: center;
                }
                .server {
                    margin-bottom: 20px;
                    padding: 10px;
                    border: 1px solid #ccc;
                    border-radius: 5px;
                }
        
                .server img {
                    max-width: 100px;
                    height: auto;
                    margin-right: 20px;
                    margin-top: 45px;
                    float: left;
                }
        
                .server h2 {
                    margin-top: 0;
                }
        
                .server p {
                    margin-bottom: 0;
                }
            </style>
        </head>
        <p> 
            <div class="container">
                <div class="server">
                    <h2>Servidor 1</h2>
                    <img src="../imagenes/server/server1.jpg" alt="imagen servidor ">
                    <p> Un servidor es un conjunto de computadoras capaces de atender las peticiones de un cliente y devolverle una respuesta en concordancia. 
                        Los servidores se pueden ejecutar en cualquier tipo de computadora, 
                        incluso en computadoras dedicadas a las cuales se les conoce individualmente como «el servidor».</p>
                </div>
                <div class="server">
                    <h2>Servidor 2</h2>
                    <img src="../imagenes/server/server2.jpg" alt="imagen servidor">
                    <p>El término servidor tiene dos significados en el ámbito informático. El primero hace referencia al ordenador que pone recursos a disposición a través de una red, y el segundo se refiere al programa  que funciona en dicho ordenador. En consecuencia aparecen dos definiciones de servidor:
        
                        Definición Servidor (hardware): un servidor basado en hardware es una máquina física integrada en una red informática en la que, además del sistema operativo, funcionan uno o varios servidores basados en software. Una denominación alternativa para un servidor basado en hardware es "host" (término inglés para "anfitrión"). En principio, todo ordenador puede usarse como "host" 
                        con el correspondiente software para servidores.
                        
                        Definición Servidor (software): un servidor basado en software es un programa que ofrece un servicio especial que otros programas denominados clientes (clients) pueden usar a nivel local o a través de una red. El tipo de servicio depende del tipo de software del servidor. La base de la comunicación es el modelo cliente-servidor y, en lo que concierne al intercambio de datos, entran en acción los protocolos de transmisión específicos del servicio.</p>
                </div>
        
                <div class="server">
                    <h2>Servidor 3</h2>
                    <img src="../imagenes/server/server3.jpg" alt="imagen servidor">
                    <p>Dado que los servidores son computadores encargados de atender las demandas de los clientes de la red, 
                        una de sus principales características es que deben disponer de sus recursos constantemente para que
                         la red esté operativa todo el tiempo. O sea, deben estar siempre encendidos, siempre disponibles. 
                         Esta es la razón por la que a veces una página web o sus recursos no puedan cargarse: si un servidor colapsa o se avería, 
                         cierto segmento de la red que está a su cargo dejará de estar disponible para su clientela.
        
                    </p>
                </div>
            </div>
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