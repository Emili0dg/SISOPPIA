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

    .integrantes{
        text-align: center;
    }

    .integrantes td,th{
        border: 1px solid black;
        width: 17vw;
        height: 6vh;
        font-size: small;
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
                        <h1 id="1">Windows 10 X</h1>
                        <p>Tras mucho tiempo de espera y especulaciones, se esperaba ver otra «vuelta de tuerca del sistema operativo de Microsoft con Windows 1o X, una evolución para colocar en aquellos dispositivos que tengan pantallas táctiles y sobre todo a las pantallas duales.</p>
                        <div class="col-5">
                            <p>En esencia se cuenta con la misma interfaz, con el mismo escritorio y la misma forma de trabajar, aunque todo adaptado de mejor manera al sistema táctil y sobre todo al hecho de contar con diferentes pantallas que pueden funcionar como una solo o de manera independiente y adaptándose a los movimientos del dedo (olvidándose del ratón). Algunos lo consideraron un proyecto muerto, aunque finalmente se pudo probar como un sistema operativo pensado no solo para ordenadores, más ligero y pequeño.</p>
                        </div>
                        <div class="col-7" style="text-align: center;">
                            <img style="width: -webkit-fill-available;" src="images/windows-10-s.webp" alt="">
                        </div>
                        <h1>Windows 11</h1>
                        <p>La última versión del famoso sistema operativo es Windows 11. El sucesor de Windows 10, lanzado finalmente el 5 de octubre de 2021, cambia su aspecto visual, mejora el rendimiento y facilidad de uso del anterior. Algunos equipos con esta versión y con ciertas especificaciones técnicas tendrán la actualización gratuita a este nuevo sistema operativo. <br><br> Para poder optar a actualizar a Windows 11, se deben cumplir ciertos requisitos mínimos de sistema que tienen que tener los equipos para poder instalarlo y que no todos pueden asumir:</p>
                        <table class="integrantes">
                            <tr>
                                <th>Procesador</th>
                                <td>1 GHz o más rápido con 2 o más núcleos en un procesador de 64 bits compatible o sistema en un chip (SoC).</td>
                            </tr>
                            <tr>
                                <th>RAM</th>
                                <td>4 gigabytes (GB).</td>
                            </tr>
                            <tr>
                                <th>Almacenamiento</th>
                                <td>Dispositivo de almacenamiento de 64 GB o más. Nota: Para más información, consulta abajo en «Más información sobre los requisitos de espacio de almacenamiento para mantener Windows 11 actualizado.</td>
                            </tr>
                            <tr>
                                <th>Firmware del sistema</th>
                                <td>UEFI, compatible con Arranque seguro.</td>
                            </tr>
                            <tr>
                                <th>TPM</th>
                                <td>Módulo de plataforma segura (TPM) versión 2.0.</td>
                            </tr>
                            <tr>
                                <th>Tarjeta gráfica</th>
                                <td>Compatible con DirectX 12 o posterior con controlador WDDM 2.0.</td>
                            </tr>
                            <tr>
                                <th>Pantalla</th>
                                <td>Pantalla de alta definición (720p) de más de 9 pulgadas en diagonal, con canal de 8 bits por color.</td>
                            </tr>
                            <tr>
                                <th>Conexión a Internet y cuenta de Microsoft</th>
                                <td>Windows 11 Pro para uso personal y Windows 11 Home requieren conectividad a Internet y una cuenta de Microsoft durante la configuración inicial del dispositivo.</td>
                            </tr>
                        </table>
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

            .anterior{
                background: url('images/flecha-pequena-izquierdados.png') no-repeat center center/cover ;
                width: 32px;
                height: 32px;
                transition: .5s;
            }

            .anterior:hover{
                background: url('images/flecha-pequena-izquierda.png') no-repeat center center/cover ;
            }
        </style>

        <div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-1" style="display:flex;align-items:center;justify-content:center;"><a href="/compatibilidad"><div class="anterior"></div></a></div>
                    <div class="col-10 foot">
                        <p>Universidad Autónoma de Nuevo León, Facultad de Ingenieria Mecanica y Electrica, Equipo #3 SISPO, 2023</p>
                    </div>
                    <div class="col-1"></div>
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