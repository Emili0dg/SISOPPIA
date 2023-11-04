<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <title>Componentes de Windows</title>
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
                        <h1 id="1">Componentes de Windows</h1>
                        <p>Windows Explorer es un componente esencial de los sistemas operativos Windows, y su función principal es proporcionar una interfaz de usuario para administrar y acceder a archivos y carpetas en el sistema. Aquí te proporcionaré información detallada sobre algunos de los componentes esenciales de Windows y cómo trabajan juntos en relación con Windows Explorer:</p>
                        <p style="margin: auto;"><b>Kernel de Windows:</b></p>
                        <p>El núcleo (kernel) de Windows es la parte central del sistema operativo. Controla el hardware de la computadora, la administración de memoria y la administración de procesos.
                        Interactúa con los controladores de dispositivo para garantizar que el hardware funcione correctamente.
                        Facilita la comunicación entre las aplicaciones y el hardware.</p>
                        <p style="margin: auto;"><b>Administrador de tareas:</b></p>
                        <p style="margin-bottom: 2rem;">El Administrador de tareas es una herramienta que permite a los usuarios ver y administrar los procesos en ejecución en su sistema. Se puede acceder presionando Ctrl+Shift+Esc o Ctrl+Alt+Supr.</p>
                    </div>
                </div>

                <style>
                    .slidercontain{
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
                        <div><img src="images/componentes1.png" alt=""></div>
                        <div><img src="images/Imagen2.png" alt=""></div>
                    </div>
                </div>

                <div class="col-12 info">
                    <div class="row">
                        <p style="margin-top: 2rem; margin-bottom: auto;"><b>Registro de Windows:</b></p>
                        <p>El Registro es una base de datos jerárquica que almacena configuraciones y configuraciones del sistema.
                        Contiene información sobre hardware, software, usuarios y preferencias del sistema.
                        Las aplicaciones y el sistema operativo acceden al Registro para configurar y personalizar el sistema.</p>
                        <div class="col-6" style="display: flex;align-items: center;justify-content: center;">
                            <div>
                                <p style="margin: auto;"><b>Explorador de archivos:</b></p>
                                <p>El Explorador de archivos es la interfaz gráfica de usuario para administrar archivos y carpetas en Windows.
                                Permite a los usuarios copiar, mover, eliminar, renombrar y organizar archivos y carpetas.
                                También facilita la búsqueda de archivos y la navegación por el sistema de archivos.
                                Estos componentes trabajan juntos de la siguiente manera:<br>Cuando un usuario inicia sesión en Windows, el kernel se encarga de cargar los controladores de dispositivo y otros componentes esenciales del sistema operativo.
                                Una vez que el sistema está en funcionamiento, el Explorador de archivos proporciona al usuario una interfaz para acceder y administrar archivos y carpetas en el sistema. Esto se hace interactuando con el sistema de archivos y el Registro.
                                El Administrador de tareas permite al usuario supervisar y gestionar los procesos en ejecución, lo que es útil para solucionar problemas de rendimiento y estabilidad. El kernel juega un papel fundamental en la administración de recursos, asegurándose de que las aplicaciones y servicios funcionen correctamente y no entren en conflicto entre sí.
                                </p>
                            </div>
                        </div>
                        <div class="col-6">
                            <img class="p-0 m-0" style="width:-webkit-fill-available;"src="images/Imagen3.png" alt="">
                        </div>
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