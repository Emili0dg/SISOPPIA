<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <title>Interfaz de Usiario de Windows</title>
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
                        <h1>Interfaz de Usuario de Windows</h1>
                        <p>La interfaz de usuario (UI) de un sistema operativo desempeña un papel crucial en la experiencia del usuario y su facilidad de uso. A lo largo de las décadas, Windows, desarrollado por Microsoft, ha experimentado una transformación impresionante en su interfaz de usuario. En este informe, exploraremos la evolución de elementos clave de la UI de Windows, como el menú "Inicio", la barra de tareas y las ventanas, a través de las diversas versiones del sistema operativo.</p>
                        <p style="margin: auto;"><b>1. Windows 1.0 (1985):</b></p>
                        <p>Windows 1.0 marcó el debut de la GUI en el mundo de la informática personal. Presentaba ventanas superpuestas con bordes y barras de título. En esta versión, no existía un menú "Inicio" como lo conocemos hoy.</p>
                        <p style="margin: auto;"><b>2. Windows 3.0 (1990):</b></p>
                        <p>Windows 3.0 representó un avance significativo. Introdujo el menú "Inicio" como un grupo de programas. Iconos en el escritorio permitían un acceso más rápido a aplicaciones. La barra de tareas era más sencilla en comparación con las versiones posteriores.</p>
                        <p style="margin: auto;"><b>3. Windows 95 (1995):</b></p>
                        <p>Windows 95 revolucionó la UI con la introducción del icónico menú "Inicio". La barra de tareas presentaba botones de inicio rápido y notificaciones. Se mejoraron los iconos en el escritorio, lo que contribuyó a una apariencia más moderna.</p>
                        <p style="margin: auto;"><b>4. Windows XP (2001):</b></p>
                        <p>Windows XP trajo un diseño más moderno y colorido. El menú "Inicio" se optimizó para una navegación más eficiente. La barra de tareas introdujo la capacidad de agrupar ventanas de aplicaciones similares.</p>
                        <p style="margin: auto;"><b>5. Windows 7 (2009):</b></p>
                        <p>Windows 7 rediseñó la barra de tareas con iconos más grandes y la capacidad de "previsualización" de ventanas. Aero Glass introdujo efectos visuales translúcidos y sombras en las ventanas. El menú "Inicio" se renovó con una función de búsqueda mejorada.</p>
                        <p style="margin: auto;"><b>6. Windows 8 (2012):</b></p>
                        <p>Windows 8 trajo un cambio radical al reemplazar el menú "Inicio" por la pantalla de inicio con bloques dinámicos. La interfaz se optimizó para dispositivos táctiles, marcando un cambio significativo en la estrategia de diseño de Microsoft.</p>
                        <p style="margin: auto;"><b>7. Windows 10 (2015):</b></p>
                        <p>Windows 10 fue una vuelta a las raíces con el regreso del menú "Inicio", combinando elementos antiguos y nuevos. La barra de tareas se rediseñó con iconos de notificación y la introducción de escritorios virtuales para una mayor productividad.</p>
                        <p style="margin: auto;"><b>8. Windows 11 (2021):</b></p>
                        <p>Windows 11 marcó la última evolución en la interfaz de usuario de Windows. Rediseñó el menú "Inicio" y la barra de tareas con un enfoque más centrado. Las ventanas adoptaron esquinas redondeadas y efectos de sombra, proporcionando una experiencia visual más moderna. Windows 11 integró funciones de productividad y entretenimiento de manera más efectiva.</p>
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