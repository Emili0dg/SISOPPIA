<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <title>Historia de Windows</title>
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
        box-shadow: 0px 5px 10px 0px gray;
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
        background: url('images/Windows-10-1-e1557784193605.png') no-repeat center center/cover;
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
                            <p><a href="/usuariowindows">Interfaz de Usuario de Windows</a></p>
                            <p><a href="/seguridadwindows">Seguridad en Windows</a></p>
                            <p><a href="/compatibilidad">Compatibilidad de Software y Hardware</a></p>
                            <p><a href="/desarrollos">Desarrollos Recientes</a></p>
                            <p><a href="/conclusiones">Conclusiones</a></p>
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
                        bottom: 10vh;
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

                    .imgslidr{
                        background: url('images/OIP.jpg') no-repeat center center/cover;
                        width: 100%;
                        height: 45vh;
                        margin: auto;
                    }

                    .imgslidruno{
                        background: url('images/0sclcfxo8qo11.png') no-repeat center center/cover;
                        width: 100%;
                        height: 45vh;
                        margin: auto;
                    }

                    .imgslidrdos{
                        background: url('images/Windows-11-fondo-Dark.webp') no-repeat center center/cover;
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
                        <div class="imgslidr"></div>
                        <div class="imgslidruno"></div>
                        <div class="imgslidrdos">></div>
                    </div>
                </div>

                <div class="col-12 info">
                    <div class="row">
                        <h1 id="1">Historia de Windows</h1>
                        <p style="margin: auto;"><b>Windows 1.0 (1985)</b></p>
                        <p>Fue anunciado en 1983, pero su lanzamiento se produjo en 1985. Tenía una interfaz gráfica basada en ventanas (lo que le da su nombre), y corría sobre el sistema operativo MS-DOS. Trató de mejorar la interacción del usuario e introducir un concepto primigenio de multitarea. Tenía calculadora, bloc de notas, calendario y reloj.</p>
                        <p style="margin: auto;"><b>Windows 2.0 (1987)</b></p>
                        <p>Se mejoraron los gráficos, se amplió la memoria, y se introdujeron los iconos de escritorio y un panel de control. Aparecen los primeros botones para maximizar y minimizar las ventanas, y la posibilidad de superponerlas. Así mismo, aquí encontramos las primeras versiones de Word y Excel.</p>
                        <div class="col-6">
                            <p style="margin: auto;"><b>Windows 3 (1990)</b></p>
                            <p>Microsoft introdujo mejoras en el rendimiento y en la multitarea. También se renovaron los iconos del escritorio. Se introduce el Explorador de Archivos y el Administrador de Programas, un Panel de Control rediseñado, y los míticos juegos del Solitario, Corazones y Buscaminas. 4/ Windows NT (1993)</p>
                            <p style="margin: auto;"><b>Windows NT (1993)</b></p>
                            <p>Fue un sistema operativo de 32 bytes multitarea, multiusuario y multiprocesamiento. No tuvo demasiado éxito.</p>
                            <div style="text-align: center; margin: 1rem;">
                                <img class="p-0 m-0" style="width:-webkit-fill-available;"src="images/Imagen6.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-6">
                            <p style="margin: auto;"><b>Windows Vista (2007)</b></p>
                            <p>Después del gran éxito de Windows XP, y a pesar de los años transcurridos entre las dos versiones, la gente no recibió con gran entusiasmo Windows Vista. Recibió una nueva interfaz gráfica llamada Aero, que permitía nuevos efectos y la transparencia de las ventanas, pero esto provocó problemas de rendimiento en ordenadores menos potentes.</p>
                            <p style="margin: auto;"><b>Windows 7 (2009)</b></p>
                            <p>Es considerada como una de las versiones más sólidas del sistema operativo, y devolvió a Microsoft a la senda del éxito. Además de los cambios gráficos inherentes a cada nueva versión, y mejoras importantes en el rendimiento, estabilidad y experiencia de usuario, se introduce una nueva barra de tareas, y Windows Touch, haciéndolo compatible con pantallas táctiles.</p>
                            <p style="margin: auto;"><b>Windows 8 (2012)</b></p>
                            <p>Supuso una ruptura en muchos aspectos respecto de las versiones anteriores. La novedad más destacada fue la eliminación del botón de inicio, lo que fue considerado como un gran error por la mayoría de los usuarios. La finalidad era unificar la experiencia de usuario para distintos dispositivos: ordenadores, Tablets y Smartphones. Esta versión también introdujo la nueva interfaz de usuario Metro UI, pero los cambios introducidos no fueron bien recibidos.</p>
                        </div>
                        <p style="margin: auto;"><b>Windows 10 (2015)</b></p>
                        <p>Es la última versión del sistema operativo. Se caracteriza por ir lanzando actualizaciones masivas periódicamente, añadiendo mejoras y nuevas funciones. Es un sistema operativo maduro, y entre sus características destacadas podemos citar la vuelta del menú de inicio, el nuevo navegador Microsoft Edge, el asistente de voz Cortana, o la sincronización con la nube.</p>
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

            .siguiente{
                background: url('images/flecha-pequena-derechados.png') no-repeat center center/cover ;
                width: 32px;
                height: 32px;
                transition: .5s;
            }

            .siguiente:hover{
                background: url('images/flecha-pequena-derecha.png') no-repeat center center/cover ;
            }
        </style>

        <div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10 foot">
                        <p>Universidad Autónoma de Nuevo León, Facultad de Ingenieria Mecanica y Electrica, Equipo #3 SISPO, 2023</p>
                    </div>
                    <div class="col-1" style="display:flex;align-items:center;justify-content:center;"><a href="/funcionalidaddewindows"><div class="siguiente"></div></a></div>
                </div>
            </div>
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