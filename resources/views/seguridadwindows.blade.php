<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <title>Seguridad de Windows</title>
</head>

<style>
    .desplegable{
        background-color: black;
        width: 50%;
        height: 100vh;
        position:fixed;
        left: -100%;
        transition: 1s;
        z-index: 99999;
    }

    .desplegable-on{
        left: 0;
    }

    .header{
        position: fixed;
        padding: 1vw;
        padding-left: 1.5vw;
        width: 95%;
        border-radius: 7vh;
        background-color: white;
        margin: 10px;
        z-index: 99999;
        box-shadow: 0px 5px 10px 0px black;
    }

    .menu{
        display: flex;
        align-items: center;
        justify-content: initial;
    }

    .menu img{
        cursor: pointer;
        z-index: 9999;
    }

    .index{
        display: flex;
        align-items: center;
        justify-content: end;
    }

    .index a{
        width: 1%;
        display: flex;
        align-items: center;
        justify-content: end;
    }

    .index img{
        cursor: pointer;
        width: 4.5vw;
        z-index: 9999;
    }

    .cruz{
        display: flex;
        justify-content: end;
        position: absolute;
    }

    .cruz img{
        cursor: pointer;
        margin: 1vw;
    }

    .sub{
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .sub a{
        font-size: 5vh;
        text-decoration: none;
        color: white;
        display: inline-block;
        position: relative;
    }

    .sub a:after{
        content:'';
        position: absolute;
        width: 100%;
        height: 3px;
        bottom: 0;
        left: 0;
        background-color: yellow;
        transform: scaleX(0);
        transform-origin: bottom right;
        transition: transform 0.6s;
    }

    .sub a:hover:after{
        transform: scaleX(1);
        transform-origin: bottom left;
    }

    .imgmain{
        background: url('images/Windows-11-fondo-Dark.webp') no-repeat center center/cover;
        width: 100%;
        height: 30vh;
    }

    .info{
        width: 80%;
        margin: auto;
    }

    .subt{
        display: flex;
        align-items: center;
        justify-content: center;
        width: auto;
        padding-left: 3vw;
        padding-right: 3vw;
    }

    .subt a{
        text-decoration: none;
        color: black;
        font-size: 2.5vh;
    }

    .subt a:hover{
        transition: 0.2s;
        color: blue; 
    }

    .info p{
        font-size: 2.5vh;
    }
</style>

<body>
    <section>
        <div class="container-fluid">
            <div class="row" style="display: felx; justify-content: center;">
                <div class="col-12 header">
                    <div class="row">
                        <div class="col-1 menu"><img id="menu" src="images/menu-burger.png" alt=""></div>
                        <div class="col-10" style="display: flex; align-items: center; justify-content: center;">
                            <div class="row">
                                <div class="col-3 subt"><p class="p-0 m-0"><a href="#1">Seguridad de Windows</a></p></div>
                                <div class="col-3 subt"><p class="p-0 m-0"><a href="#2">¿Cómo funciona?</a></p></div>
                                <div class="col-3 subt"><p class="p-0 m-0"><a href="#3">¿Qué es Windows Defender?</a></p></div>
                                <div class="col-3 subt"><p class="p-0 m-0"><a href="#4">Ventajas de Windows Defender</a></p></div>
                            </div>
                        </div>
                        <div class="col-1 index"><a href="/"><img src="images/uanl-removebg-preview.png" alt=""></a></div>
                    </div>
                </div>
            </div>
        </div>

        <nav>
            <div class="desplegable" id="desplegable">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 cruz"><img id="cruz" src="images/arrow-small-left.png" alt=""></div>
                    </div>
                </div>
                <div class="sub">
                    <div>
                        <p><a href="/historiadewindows">Historia de Windows</a></p>
                        <p><a href="/funcionalidaddewindows">Funcionalidad de Windows</a></p>
                        <p><a href="/componenteswindows">Componentes de Windows</a></p>
                        <p><a href="/usuariowindows">Interfaz de Usiario de Windows</a></p>
                        <p><a href="/seguridadwindows">Seguridad en Windows</a></p>
                        <p><a href="/compatibilidad">Compatibilidad de Software y Hardware</a></p>
                        <p><a href="/desarrollos">Desarrollos Recientes</a></p>
                    </div>
                </div>
            </div>
        </nav>

    </section>

    <section style="top: 16vh; position: relative;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 info">
                    <div class="row">
                        <h1 id="1">Seguridad de Windows</h1>
                        <p>Hoy día existen muchos tipos de firewall diferentes entre los que elegir. Sin embargo, la mayoría de los responsables de seguridad de la información son conscientes de que proteger los datos simplemente construyendo un cortafuegos alrededor de un sistema de información ya no es suficiente. Aun así, siguen siendo un componente importante en la arquitectura de TI para salvaguardar la información. <br><br> Los cortafuegos han existido desde finales de la década de los 80, inicialmente erigidos alrededor de los perímetros de la red para controlar el flujo de tráfico y proteger los datos dentro de los ordenadores que actuaban como host. Pero la informática ha cambiado drásticamente desde que Digital Equipment Corp. desarrolló el firewall de filtro de paquetes en 1988.</p>
                        <h1>¿Qué es un firewall y para qué sirve?</h1>
                        <p>Se trata de un dispositivo que es capaz de permitir, limitar, cifrar y hasta decodificar el tráfico de comunicaciones entre un ordenador o red local e internet, impidiendo así que usuarios o sistemas no autorizados puedan tener acceso a ese ordenador o red local.</p>
                        <p style="margin: auto;"><b>¿Cómo funciona?</b></p>
                        <p>Por lo que se refiere a su funcionamiento, el cortafuegos está programado para diferenciar entre las conexiones permitidas y las sospechosas, aplicando diferentes procedimientos en función de cómo califique a la conexión. <br><br> Los diferentes procedimientos pueden ser:  </p>
                        <div class="col-6">
                            <p><b>Políticas de cortafuegos: </b>suspendiendo las peticiones de comunicación que no provengan de la misma red o sistema, y disfrazando detrás de una IP los recursos internos.</p>
                            <p><b>Servicios antimalware:</b> algunos cortafuegos pueden también detectar virus y evitar su expansión.</p>
                        </div>
                        <div class="col-6">
                            <p><b>Filtrado de contenido: </b>identifica los contenidos que pueden dar problemas, teniendo el usuario la última palabra sobre si se bloquea o no el acceso.</p>
                            <p><b>Servicios de DPI:</b> los procedimientos de Inspección Profunda de Paquetes añaden una segunda capa de seguridad al sistema, revisando en profundidad los paquetes de información que se reciben.</p>
                        </div>
                        <h1 style="font-size: 2.5vw;" id="2">¿Qué tipos de firewall pueden encontrarse en el mercado?</h1>
                        <p>Los firewalls de hoy necesitan tener una mayor visibilidad del tráfico que pasa por la red y permitir ver el flujo de contenido. En la actualidad, puede hablarse de cinco tipos de firewall, que son:</p>
                        <div style="display: flex;align-items: center; justify-content: center;">
                            <ul>
                                <li><b>Cortafuegos de filtrado de paquetes</b></li>
                                <li><b>Puerta de enlace a nivel de circuito</b></li>
                                <li><b>Firewall de inspección con estado</b></li>
                                <li><b>Puerta de enlace de nivel de aplicación</b></li>
                                <li><b>Firewall de próxima generación</b></li>
                            </ul>
                        </div>
                        <h1 id="3">¿Qué es Windows Defender?</h1>
                        <p>Windows Defender es un antivirus propio de Microsoft que vino a poner fin a una vieja deuda de la compañía de ofrecer un antivirus propio. Desarrollado íntegramente por Windows, esta opción para antivirus surgió en 2015 y rompió el mercado. <br><br> Después de varios fracasos de la empresa por generar una opción de defensa contra las amenazas virtuales desde principios de los 2000, Windows Defender se volvió una realidad. A partir del sistema operativo Windows 8, la empresa empezó a incluirlo dentro del paquete que viene con el sistema operativo.</p>
                        <h1 id="4">Ventajas de Windows Defender</h1>
                        <p>Windows Defender es una buena propuesta para las funciones básicas de antivirus, pero tiene aspectos que hacen que no sea una suite completa a la altura de una empresa líder como Microsoft. <br><br> En cuanto a rendimiento, es notable su funcionamiento en segundo plano. no presenta interrupciones en el uso cotidiano y casi uno ni se percata que está funcionando. <br><br> Su principal ventaja es que es gratuito, lo que hacer que su valoración general sea positiva.</p>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .foot{
                display: flex;
                align-items: center;
                justify-content: center;
                margin-top: 4vh;
                padding: auto;
                opacity: 0.5;
            }
        </style>

        <div class="foot">
            <p>Universidad Autónoma de Nuevo León, Facultad de Ingenieria Mecanica y Electrica, Equipo #3 SISPO, 2023</p>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script>
        $('.slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });
    </script>
    
    <script>
        const menu = document.getElementById("menu");
        const desplegable = document.getElementById("desplegable");
        const cruz = document.getElementById("cruz");

        menu.addEventListener("click", function(){
            desplegable.classList.add("desplegable-on")
        });

        cruz.addEventListener("click", function(){
            desplegable.classList.remove("desplegable-on")
        })
    </script>
</body>
</html>