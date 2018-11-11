<!DOCTYPE html>
<html>
<head>
    <!--Caracteres especiales ó acentos-->
    <meta charset="UTF-8">
    <!--Descripcion de la pagina-->
    <meta name="description" content="Medicion de signos vitales">
    <!--Palabras clave para que los mototres de busqeuda encuentren la página-->
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <!--Para poner el nombre de los autores de la página-->
    <meta name="author" content="AngelSupport">
    <!-- Controla las dimensiones y la escala de la página. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Página de inicio - Angel Support.</title>
    <!--Poner un icono en la pestaña del navegador -->
    <link rel="shortcut icon" href="./images/icon.webp">
    <!-- Clases de w3 para los elementos de la página.-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Iconos de FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap js para ser la pagina dinamica y vistoza -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <!-- estilos de bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,400,900">
<!-- Estilos puestos manualmente a la página -->
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/fourdreams.css">
    <script src="./js/index.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(window).on('scroll', function(){
                if($(window).scrollTop()){
                  $('.cool').addClass('black');
                }else{
                  $('.cool').removeClass('black');
                }
            });
            
            $('[data-toggle="popover"]').popover(); 
            /*
            document.getElementById("temp").innerHTML = sessionStorage.getItem("temp");
            document.getElementById("frc").innerHTML = sessionStorage.getItem("frec");
            document.getElementById("dtc").innerHTML = sessionStorage.getItem("caidas");*/
        });
    </script>
</head>
<body>
 <!--Controlador variables Angular -->
    <div ng-app="myApp" ng-controller="myCtrl">
       <header>
            <!--Agregar icono en el Header-->
            <div class="cool">
                  <div class="logo" id="logo" style="float:left;"><img src="./images/logo.png" alt="" width="300px" height="80px"></div>
                <div class="topnav w3-right" id="myTopnav">
                  <a href="#home">Home</a>
                  <a href="#news">News</a>
                  <a href="#contact">Contact</a>
                  <a href="#about">About</a>
                  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars" style="float:right; margin:0 0px;"></i>
                  </a>
                </div>
            </div>
            <script>
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }
            </script>
        </header>
        
        <p>&nbsp;</p>
        <div class="container-fluid body">
            </div> 
            <div class="row" style="margin: 0 10px;">
                <p>&nbsp;</p>
                <div class="card-deck">
                  <div class="card w3-card-4">
                    <center>
                      <i class="fa fa-thermometer fa-3x" style="color:maroon"></i>
                
                    </center>
                    <div class="card-body">
                      <h2 class="card-title" style="text-align: center;">Temperatura corporal.</h2>
                      <hr>
                      <p class="card-text">La temperatura normal del cuerpo humano (normotermia o eutermia), es el rango de temperatura típico que se encuentra en el rango normal de temperatura del cuerpo humano se define como <strong>36.5-37.5 ° C.</strong>.</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted">Datos actuales medidos: <span ng-repeat="x in myData"><strong style="color:maroon;">{{x.temp}}°C.</strong></span></small>
                        <a href="#tmp" title="Temperatura corporal." data-toggle="popover" data-trigger="focus" data-content="La temperatura actual de su familiar o paciente es: .">Ver estado.</a>
                    </div>
                  </div>
                  <div class="card w3-card-4">
                    <center>
                      <i class="fa fa-heartbeat fa-3x" style="color: red;"></i>
                    </center>
                    <div class="card-body">
                       <h2 class="card-title" style="text-align: center;">Frecuencia cardiaca.</h2>
                       <hr>
                      <p class="card-text" style="text-align: justify;">La frecuencia cardiaca es uno de nuestros signos vitales y se define como <strong>el número de veces por minuto que nuestro corazón late o se contrae. </strong>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted">Datos actuales medidos: <span ng-repeat="x in myData"> <strong style="color:red;">{{x.frecuencia}} (lat/min).</strong></span></small>
                      <a href="#rc" title="Frecuencia cardiaca." data-toggle="popover2" data-trigger="focus" data-content="El ritmo cardiaco actual de su familiar o paciente es: .">Ver estado.</a>
                    </div>
                  </div>
                  <div class="card w3-card-4">
                    <center>
                     
                <i class="material-icons" style="font-size:45px; color: grey;">airline_seat_flat_angled</i> 
                 <!--i class="fa fa-blind fa-3x" style="color: red;"></i-->
                    </center>
                    <div class="card-body">
                      <h2 class="card-title" style="text-align: center;">Deteccion de caidas.</h2>
                      <hr>
                      <p class="card-text" style="text-align:justify;">
                        Es la capacidad de un sistema para conocer el estado de una persona (sentado, parado) y mediante ello realizar acciones, es decir, mandar una alerta cuando los valores sensados <strong>cambien de manera significativa de su estado.</strong>      
                      </p>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted">Datos actuales medidos: <span ng-repeat="x in myData"><strong style="color:grey;">{{x.caida}}.</strong></span></small>
                      
                       <a href="#ddc" title="Detección de caídas." data-toggle="popover3" data-trigger="focus" data-content="Su familiar o paciente no han sufrido de caidas.">Ver estado.</a>
                        <script>
                            $(document).ready(function(){
                                $('[data-toggle="popover"]').popover(); 
                                $('[data-toggle="popover2"]').popover(); 
                                $('[data-toggle="popover3"]').popover();   
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
                <div class="row">
                    <p id="home"></p>
                    <div class="well" style="background:rgba(232, 232, 232, 0.7);">
                        <div class="col-12">
                                <h1 style="color:#000; font-family: Comic sans, Arial, cursive; font-size:30px; text-align:center; ">¿Quienes Somos?</h1>
                            <p id="about"> 
                                Las Tecnologías de Información y las organizaciones, dan lugar a laimplementación de una enorme cantidad de servicios y/o productos, y presentan una gran expectativa de crecimiento y demanda en la industria del Internet y desarrollo de sistemas computarizados (software).Global Soft es una empresa con centro de operaciones en la ciudad de Puebla, México y enfoca sus actividades en proporcionar servicios de desarrollo de software, mantenimiento y reparación de computadoras e instalaciones de redes para su empresa.
                            </p>
                        </div>
                    </div>
                </div>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
                <div class="row">
                    <div class="well well-lg" style="background:rgba(233, 223, 223, 0.7);">
                        <div class="col-12">
                            
<div class="pages white paralax page-features" id="page-features" style="background-position: 0% -167px;">
        <div class="overlay"></div>
        <div class="container">
            <!-- Header -->
            <header>
                <h4 class="line-divider">Servicios</h4>
                <h1>Qué hacemos</h1>
                <div class="row">
                    <div class="span8 offset2">
                        <p>
                            Materializar los sueños de nuestros clientes con la utilización y aplicación de herramientas de Tecnología de información..
                        </p>
                    </div>
                </div>
            </header>
            <!-- End Header -->

            <!-- Article -->
            <article>
                <!-- Features blocks -->
                <div class="row-fluid">
                    <div class="span4 center">
                        <img src="assets/images/pages/features/about02.png" alt="Treble">
                        <h5>Diseño Web</h5>
                        <p class="smallFontBy08 cutBy10">Diseñamos tu sitio a la medida con la finalidad de ser encontrado por nuestros clientes.</p>
                    </div>
                    <div class="span4 center">
                        <img src="assets/images/pages/features/about03.png" alt="Treble">
                        <h5>Manejo de Redes Sociales de tu Negocio u Organización</h5>
                        <p class="smallFontBy08 cutBy10">Ayudamos a nuestros clientes, para que puedan incrementar sus ventas con el uso de las nuevas formas
                            de difusión, que les permita llegar a más y más personas.</p>
                    </div>
                    <div class="span4 center">
                        <img src="assets/images/pages/features/about01.png" alt="Treble">
                        <h5>Consultoría en T.I.</h5>
                        <p class="smallFontBy08 cutBy10">Sitios complejos que ayudan en la operación del negocio.</p>
                    </div>

                </div>
                <!-- Testemonials -->

                <div class="row-fluid">
                    <div class="span8 offset2">
                        <div>
                            <div id="quote-slider" class="slide">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="quote center">
                                            <h5>Diseño Web</h5>
                                        </div>
                                        <p class="smallFontBy08 cutBy10" style="font-size: 17px;">Logramos convertir la página Web en una Herramienta de Venta: <br>
                                            <br> ●
                                            <b>Sitios a la medida para presencia:</b>
                                            <br> Para que cuentes a los visitantes quién eres, que lo que produces u ofreces,
                                            dónde te ubicas, galerías de productos, tus instalaciones y un medio de contactarte
                                            para adquirir tus productos o servicios.
                                            <br>
                                            <br> ●
                                            <b>Sitio a la medida administrables:</b>
                                            <br> Este tipo de página Web permite su fácil actualización para tener mayor interacción
                                            con tus clientes, en cuanto a contenidos que pueden estar variando regularmente
                                            como: Galerías Fotográficas, Catálogos , Noticias. .Es Ideal para desarrollar
                                            tu tienda en on-line o e-commerce.</p>
                                    </div>
                                    <div class="item">
                                        <div class="quote center">
                                            <h5>Manejo de Redes Sociales de tu Negocio u Organización</h5>
                                        </div>
                                        <p class="smallFontBy08 cutBy10" style="font-size: 17px;">
                                            Te ayudamos a entender la función de las Redes sociales para que logres tus objetivos y realizamos por ti las siguientes
                                            actividades de manera profesional para tu empresa o negocio: <br>
                                            <br>
                                            ● Atendemos por tu Facebook, Twitter, Google Plus, Google Mi Negocio y publicamos de manera regular para mantenerte cercano
                                            a tus clientes potenciales (Administramos la comunidad. “Community Manager”).
                                            <br>
                                            ● Mantener una Comunicación eficiente y asertiva con tus clientes( Comunica, escucha, influye en tu comunidad) <br>
                                            ● Creamos estrategias con base en objetivos específicos. (Aumentar seguidores, Reputación, Presencia de marca, Atraer nuevos
                                            prospectos, <br>
                                            ● Contamos con herramientas de medición y análisis que permiten a nuestros clientes tomar decisiones para sus estrategias.
                                            <br>
                                            ● Comunícate masivamente utilizando el Email Marketing(mailing)
                                        </p>
                                    </div>
                                    <div class="item">
                                        <div class="quote center">
                                            <h5>Consultoria en T.I.</h5>
                                        </div>
                                        <p class="smallFontBy08 cutBy10" style="font-size: 17px;">
                                            Sabemos que eres el experto en tu negocio: Te ayudamos aprovechar las nuevas herramientas para Sacarle provecho a bajo costo.
                                            Analizamos las Tecnologías de Información (T.I.) aplicadas en los procesos que
                                            llevas a cabo en tu negocio.
                                            <br>
                                            <br>
                                            <b>Diagnóstico en T.I. justo a tu negocio:</b>
                                            <br>
                                            ● Funcionalidad y Operación de tus sistemas. <br>
                                            ● Comunicación Información de áreas de Operación. <br>
                                            ● Información para toma de Decisiones en tu negocio. <br>
                                            ● Capitalización de información para mayores Ventas. <br>
                                            ● Explotación de Datos de tus procesos para ser más productivo. <br>
                                            ● Te ayudamos a ser más eficiente aprovechando herramientas de Google. <br>
                                            <br>
                                        </p>
                                    </div>

                                    <div class="item">
                                        <div class="quote center">
                                            <h5>Gestión de tu Página Web:</h5>
                                        </div>
                                        <p class="smallFontBy08 cutBy10" style="font-size: 17px;">
                                            <b>¿Tu sitio ya no es confiable por que la información es antigua u obsoleta?</b>
                                            <br>
                                            <br> Ofrecemos el servicio de actualización de contenidos. Que consiste en alimentar
                                            los contenidos periódicamente según tus necesidades como:
                                            <br>
                                            <br> ● Actualización de Galerías, Noticias, Publicación en Blogs, Campaña de Marketing
                                            o publicidad en Facebook, Twitter.
                                            <br> ● Captura de información de papel a electrónico.
                                            <br> ● Inscripción a Directorios Especializados.</p>
                                    </div>

                                    <div class="item">
                                        <div class="quote center">
                                            <h5>Hosting, Dominios y Seguridad en Internet:</h5>
                                        </div>
                                        <p class="smallFontBy08 cutBy10" style="font-size: 17px;">
                                            <b>Ofrecemos el servicio para contratar tu nombre en internet.</b>
                                            <br>
                                            <br>
                                            ● Te reservamos tu nombre en un servidor, para que ahí albergues tu página web, crees tus buzones de correo y tengas una
                                            imagen formal y profesional de tu empresa o negocio. Nosotros nos encargamos
                                            de la contratación y configuración y sobre todo soporte para que te dejes de
                                            preocupar de términos técnicos. <br>
                                            ● Instalamos certificados de Autenticidad para ofrecer transacciones seguras por internet a tus clientes.
                                            <br>
                                            <br>
                                            <b>Diagnóstico de Seguridad Informática:</b>
                                            <br>
                                            ● Verificamos las áreas de tu red en tu oficina o servidor web, donde pudieras tener problemas de seguridad o que sean área
                                            importantes de resguardar para evitar la entrada de INTRUSOS o accesos no autorizados
                                            a ciertas área de información. <br>
                                            ● Hacemos pruebas de vulnerabilidad de tus sistemas informáticos <br>
                                            ● Instalación de Firewall (sistemas cortafuegos ) <br>
                                            ● Instalación de Antivirus.
                                        </p>
                                    </div>

                                    <div class="item">
                                        <div class="quote center">
                                            <h5>Desarrollo de App's</h5>
                                        </div>
                                        <p class="smallFontBy08 cutBy10" style="font-size: 17px;">
                                            <b>¿Tienes un negocio muy bien definido y ocupas que esté disponible en línea?</b>
                                            <br>
                                            <br>
                                            Ofrecemos el desarrollo de aplicaciones a la medida que son compatibles para <br>
                                            ● Web<br>
                                            ● Dispositivos Mobiles IPhone, Android, Blackberry <br>
                                            ● Ipads <br>
                                            ● Tabletas
                                        </p>
                                    </div>

                                    <br class="active">
                                    <br>
                                </div>
                                <ol class="carousel-indicators">
                                    <li data-target="#quote-slider" data-slide-to="0" class="active"></li>
                                    <li data-target="#quote-slider" data-slide-to="1" class=""></li>
                                    <li data-target="#quote-slider" data-slide-to="2" class=""></li>
                                    <li data-target="#quote-slider" data-slide-to="3" class=""></li>
                                    <li data-target="#quote-slider" data-slide-to="4" class=""></li>
                                    <li data-target="#quote-slider" data-slide-to="5" class=""></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

            </article>
            <!-- End Article -->
        </div>
    </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <p>&nbsp;</p>
        
        <footer></footer>
    </div>
</body>
</html>