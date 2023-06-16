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
    <title>InfoDigital - DHCP</title>
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
                    <li><a href="sobreNosotros.php"><i class="fa-solid fa-calendar-days"></i>Sobre Nosotros</a></li>
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
                    <li><a href="servidores.php?<?php echo $_SESSION['token']; ?>">Informacion servidores</a></li>
                </ul>
            </li>
            <li><a href="dhcp.php?<?php echo $_SESSION['token']; ?>">DHCP</a>
                <ul>
                    <li><a href="#p-queesDHCP">¿Qué es el DHCP?</a></li>
                    <li><a href="#p-utilizarDHCP">¿Cuándo utilizar un DHCP?</a></li>
                    <li><a href="#p-vydDHCP">Ventajas y desventajas de utilizar DHCP</a></li>
                    <li><a href="#p-ipDHCP">Mecanismos para asignar direcciones IP por DHCP</a></li>
                  </ul>
            </li>
        </ul>
    </aside>
<!-- ********************** CONTENIDO DHCP******************************************** -->
<aside id="secciones">
    <section class="dhcp" id="p-dhcp">
        <head>
            <style>
            .fotoDHCP{
                width: 100%;
                height: 300px;
                background-color: transparent;
                padding-left: 15%;
               justify-content: center;
            }  
            .dhcp h2{
                padding: 0px 0px 20px 0px;
                margin: 0;
            }
            #fot{
                border-radius: 12px;
            }
            .mov{
                padding-left: 25%;
            }
            .info{
                margin: 30px;
            }
            .info p{
                margin: 0;
                padding: 0;
            }
            .contenedorDHCP h3{
                color: black;
                font-size: 20px;
            }
            .center{
                padding: 40px;
                justify-content: center;
                font-size: 20px;
            } 
            </style>
        </head>
        <h2 id="p-queesDHCP"> ¿QUÉ ES DHCP? </h2>
            <div class="contenedorDHCP">
                <div class="fotoDHCP">
                    <img src="../imagenes/DHCP/ud2_image017.png" alt="que es dhcp" id="fot">
                </div>
                <div class="info">
                    <p>
                        El protocolo DHCP (Dynamic Host Configuration Protocol) es un protocolo de red que utiliza 
                        una arquitectura cliente-servidor. Por lo tanto, se tendrá uno o varios protocolos DHCP al 
                        igual que uno o varios clientes, que se deberán de comunicar entre ellos correctamente para 
                        que el servidor DHCP brinde información a los diferentes clientes conectados.

                        Este protocolo se encarga de asignar de manera dinámica y automática una dirección IP, ya se 
                        privada desde el rúter(router) hacia los equipos de la red local, o también una IP publica por 
                        pate de un operador que utilice este tipo de protocolo para el establecimiento de la conexión. 

                        Cuando se tiene un servidor DHCP en funcionamiento, todas las direcciones IP que ha proporcionado 
                        a diferentes clientes se guardan en un listado donde se relaciona la IP que se le ha proporcionado 
                        y la dirección MAC. Con este listado el servidor DHCP se asegura de no proporcionar a dos tipos 
                        diferentes la misma dirección IP, lo que ocasionaría un caos en la red. A medida que el servidor va 
                        asignando direcciones IP, también tiene en cuenta cuando pasa un determinado tiempo y caducan, 
                        quedando libres para que otro cliente pueda obtener esta misma dirección IP.

                        El servidor DHCP sabrá en todo momento quien ha estado en posesión de una dirección IP, cuanto tiempo 
                        ha estado y cuando esta se ha asignado a otro cliente. 
                    </p>
                </div>
                <div class="info1">
                    <h2 id="p-utilizarDHCP"> ¿CUÁNDO UTILIZAR UN DHCP? </h2>
                    <p>
                        Cuando las direcciones IP de los hosts no necesariamente necesitan ser estáticas. 
                    </p>
                </div>
                <div class="info2">
                    <h2 id="p-vydDHCP"> VENTAJAS Y DESVENTAJAS DE UTILIZAR DHCP </h2>
                    <p>
                        <h3> Ventajas </h3>
                     <ul class="center">
                            <li>Ahorra tiempo a los administradores de red.</li>
                            <li>Facilidad de configuración.</li>
                            <li>Únicamente se configura el servidor que entregara un rango de direcciones IP a cada cliente.</li>
                            <li>En una red bastante grande de usuarios, el servidor DHCP es necesario para asignar direcciones IP de forma automática.</li> 
                            <li>Estas direcciones son controladas por el servidor, lo cual facilita en el momento que se quiere dar seguimiento y supervisión.</li>
                     </ul>

                        <h3> Desventajas  </h3>
                     <ul class="center">
                        <li>En caso de que el servidor DHCP falle, todas las maquinas clientes renovaran su IP al no obtener respuesta alguna, lo cual provocara que toda la red se detenga.</li>
                        <li>En dado caso que se requiera un DNS, es necesario configurarlo manualmente para indicar las direcciones IP correspondientes.</li>
                    </ul>
                    </p>
                </div>
                <div class="info3">
                    <h2 id="p-ipDHCP"> MECANISMOS PARA ASIGNAR DIRECCIONES IP POR DHCP </h2>
                    <p>
                        <h3> Asignación manual </h3>
                        <div class="letras">
                            <p>
                                El administrador asigna una dirección IP asignada previamente al cliente 
                                y DHCP solo comunica la dirección IP al dispositivo.
                            </p>
                        </div>
                        <h3> Asignación automática  </h3>
                        <div class="letras">
                            <p>
                                DHCP asigna automáticamente una dirección IP estática permanente a un dispositivo; 
                                la dirección es seleccionada de un conjunto de direcciones disponibles. No se tiene 
                                que arrendar nada y la dirección se asigna de manera permanente.
                            </p>
                        </div>
                        <h3> Asignación dinámica  </h3>
                        <div class="letras">
                            <p>
                                DHCP asigna de manera automática una dirección IP dinámica, ya sea arrendada o tomada 
                                de un grupo de direcciones IP por un periodo limitado seleccionado por el servidor o 
                                hasta que el cliente informe al servidor de DHCP que ya no necesita la dirección.
                            </p>
                        </div>

                        <div class="mov">
                            <img src="../imagenes/DHCP/Sesión_DHCP.svg.png" alt="dhcp asignacion dinamica">
                        </div>
                    </p>
                </div>
            </div>
    </section>
   <!-- ********************** CONTENDIDO SIMILAR******************************************** -->
   <section class="mas" id="p-mas">
    <h2>CONTENIDO SIMILAR</h2>
    <div class="p-mas">
        <aside id="cuad1">
            <h2>¿Qué son los DNS?</h2>
          <div class="img">
            <img src="../imagenes/mas/img1.jpg" alt="que son los dns">
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
        <aside id="cuad4">
            <h2>Tipos de servidores</h2>
            <div class="img">
                <img src="../imagenes/mas/img5.jpg" alt="tipos de servidores">
            </div>
            <a href="servidores.php?<?php echo $_SESSION['token']; ?>">Leer más <i class="fa-solid fa-arrow-right-long"></i></a>
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