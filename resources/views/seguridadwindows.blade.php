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
                                <div class="col-4 subt"><p class="p-0 m-0"><a href="#1">Hisotira de Window</a></p></div>
                                <div class="col-4 subt"><p class="p-0 m-0"><a href="#2">Windows 3.0</a></p></div>
                                <div class="col-4 subt"><p class="p-0 m-0"><a href="#3">Windows 3.1 y NT</a></p></div>
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

        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0 m-0">
                   <div class="imgmain"></div>
                </div>

                <style>
                    .slidercontain{
                        bottom: 15vh;
                        position: relative;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                    }

                    .slider{
                        width: 80%;
                    }

                    .slider img{
                        width: 100%;
                        height: 45vh;
                        margin: auto;
                    }

                    .slick-prev{
                        left: -25px;
                        background: url('images/angulo-izquierdo1.png') no-repeat center center/cover;
                        font-size: 0;
                        line-height: 0;
                        position: absolute;
                        top: 50%;
                        display: block;
                        width: 20px;
                        height: 20px;
                        padding: 0;
                        -webkit-transform: translate(0, -50%);
                        -ms-transform: translate(0, -50%);
                        transform: translate(0, -50%);
                        cursor: pointer;
                        color: transparent;
                        border: none;
                        outline: none;
                        z-index: 9999;
                    }

                    .slick-prev:hover{
                        background: url('images/angulo-izquierdo.png') no-repeat center center/cover;
                    }

                    .slick-next{
                        right: -25px;
                        background: url('images/angulo-derecho1.png') no-repeat center center/cover;
                        font-size: 0;
                        line-height: 0;
                        position: absolute;
                        top: 50%;
                        display: block;
                        width: 20px;
                        height: 20px;
                        padding: 0;
                        -webkit-transform: translate(0, -50%);
                        -ms-transform: translate(0, -50%);
                        transform: translate(0, -50%);
                        cursor: pointer;
                        color: transparent;
                        border: none;
                        outline: none;
                        z-index: 9999;
                    }

                    .slick-next:hover{
                        background: url('images/angulo-derecho.png') no-repeat center center/cover;
                    }
                </style>

                <div class="col-12 p-0 m-0 slidercontain">
                    <div class="slider">
                        <div><img src="images/Windows-10-1-e1557784193605.png" alt=""></div>
                        <div><img src="images/Windows-11-fondo-Dark.webp" alt=""></div>
                        <div><img src="images/Windows-10-1-e1557784193605.png" alt=""></div>
                    </div>
                </div>

                <div class="col-12 info">
                    <div class="row">
                        <h1 id="1">Seguridad de Windows</h1>
                        <p>En 1983 comenzó el desarrollo de Windows, una interfaz gráfica de usuario (GUI) para su propio sistema operativo (MS-DOS) que había enviado para IBM PC y ordenadores compatibles desde 1981. La línea de productos se ha cambiado de un producto de GUI a un moderno sistema operativo en dos familias de diseño, cada uno con su propio sistema de archivo de código base y por defecto.</p>
                        <h1>De la historia: una expansión de MS-DOS</h1>
                        <div class="col-6"><p>En 1985, Microsoft publica la primera versión de Windows, una interfaz gráfica de usuario (GUI) para su propio sistema operativo (MS-DOS) que había sido incluido en el PC de IBM y compatibles desde 1981.
                        La primera versión de Windows lanzada el 20 de noviembre de 1985 nunca fue del todo potente, ni tampoco se hizo popular. Estuvo severamente limitada a causa de los recursos legales de Apple, que no permitió imitaciones de sus interfaces de usuario. Por ejemplo, allí las ventanas solo pudieron disponerse en mosaico sobre la pantalla y nunca pudieron solaparse u ocultarse unas a otras. Allí tampoco hubo papelera de reciclaje porque Apple pensó que tuvo la patente de este paradigma o concepto. Ambas limitaciones fueron eliminadas cuando el recurso de Apple fue rechazado en los tribunales. Windows 1.0 incluyó un programa simple de pintura de gráficos llamado Windows Paint, Windows Write un simple procesador de textos, un calendario de citas, un archivador de tarjetas, un bloc de notas, un reloj, un panel de control, una terminal de computadora, portapapeles y un controlador de RAM. También incluía el MS-DOS Executive y un juego llamado Revorse. Sin embargo, fueron consideradas como aplicaciones "de juguete" con poco atractivo para todos los usuarios profesionales y los ingenieros.
                        Windows 2.0 salió al mercado en diciembre en 1987 y fue algo más popular que la versión inicial.</p></div>
                        <div class="col-6">
                            <p>Las versiones 2.0x usaban el modelo de memoria en modo real, que lo limitaba a un máximo de 1 megabyte de memoria. En dicha configuración, podría ejecutarse en otro multitarea como DESQview, que utilizaba el modo protegido 286. Estas pudieron cargarse desde el MS-DOS, ejecutando Windows a la vez que el programa, y cerrándolo al salir de ellas. Allí Windows todavía usó el microprocesador 8088 de Intel, así que estuvo limitado a 1 megabyte de memoria RAM; sin embargo, mucha gente consiguió hacerlo funcionar bajo sistemas multitareas como DesqView </p>
                            <img class="p-0 m-0" style="width:-webkit-fill-available;"src="images/Windows-11-fondo-Dark.webp" alt="">
                        </div>
                        <h1 id="2">Windows 3.0</h1>
                        <p>La primera versión definitivamente popular de Windows fue Windows 3.0, publicada en mayo de 1990. Se benefició de las mejoradas capacidades gráficas para PC de esta época, y también del microprocesador 80386, esto le permitiría ejecutar aplicaciones anteriores basadas en MS-DOS en modo multitarea, gracias a la introducción de memoria virtual.
                        <br><br>La interfaz de usuario de Windows 3.0 finalmente se parecía a un serio competidor de la interfaz de usuario de la computadora Macintosh. Las PC habían mejorado los gráficos en este momento, debido a las tarjetas de video VGA , y el modo protegido / mejorado permitió a las aplicaciones de Windows usar más memoria de una manera más sencilla que sus contrapartes de DOS. Windows 3.0 puede ejecutarse en modos mejorados reales, estándar, o 386, y es compatible con cualquier procesador Intel desde el 8086/8088 hasta el 80286 y el 80386.
                        </p>
                        <h1 id="3">Windows 3.1 y NT</h1>
                        <p>En respuesta a la aparición del sistema operativo OS/2 2.0 por IBM, Microsoft desarrolló Windows 3.1, que incluyó diversos refuerzos menores a Windows 3.0 (como las fuentes escalables TrueType), pero que consistió principalmente en soporte multimedia. Después, Microsoft publicó Windows 3.11, conocido como Windows para trabajo en grupo, que incluyó controladores y protocolos mejorados para las comunicaciones en red y soporte para redes punto a punto.
                        <br><br>Por su parte, Microsoft continuó desarrollando Windows NT. Para ello, reclutaron a Dave Cutler, uno de los jefes analistas de VMS en DEC (hoy parte de Compaq, comprada por HP en el 2005) para convertir NT en un sistema más competitivo.
                        Cutler había estado desarrollando un sucesor del VMS en DEC (Digital Equipment Corporation) llamado Mica, y cuando DEC abandonó el proyecto se llevó sus conocimientos y algunos ingenieros a Microsoft. DEC también pensó que se llevó el código de Mica a Microsoft y entabló una demanda. Microsoft finalmente pagó 150 millones de dólares y acordó dar soporte al microprocesador Alpha de DEC en Windows NT.
                        </p>
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