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
                        <h1 id="1">Compatibilidad de hardware con Windows</h1>
                        <p>El Programa de compatibilidad de hardware con Windows está diseñado para ayudar a tu empresa a proporcionar sistemas, software y productos de hardware que son compatibles con Windows y que se ejecutan de forma confiable en Windows 10, Windows 11 y Windows Server 2022</p>
                        <p style="margin: auto;"><b>Windows Hardware Lab Kit</b></p>
                        <p>El Programa de compatibilidad de hardware con Windows aprovecha las pruebas del Kit de laboratorio de hardware de Windows, un marco de pruebas que se usa para probar dispositivos de hardware para Windows 10 y Windows 11.</p>
                        <p>La mayoría de las aplicaciones (y otros programas, como juegos o utilidades) que se crearon para versiones anteriores de Windows funcionarán en las versiones más recientes de Windows 10 y Windows 11, pero algunos más antiguos podrían ejecutarse con problemas o no funcionar en absoluto. Estas son algunas maneras de solucionar problemas comunes con programas antiguos. Prueba a ejecutar el solucionador de problemas de compatibilidad: En el cuadro de búsqueda de la barra de tareas, escribe Ejecutar programas creados para versiones anteriores de Windows y selecciónalo en los resultados. Selecciona Siguiente, selecciona el programa con el que tienes problemas y, a continuación, selecciona de nuevo Siguiente . Selecciona Programa de solución de problemas (o puedes seleccionar Probar la configuración recomendada para probarlo). Seleccione el problema que está experimentando y siga el proceso.</p>
                        <p>En resumen, la compatibilidad entre el software y el hardware en sistemas Windows es esencial para un funcionamiento óptimo. Asegúrate de que el software esté diseñado para tu versión de Windows, la arquitectura de tu hardware y cumpla con los requisitos del sistema. También es importante mantener actualizados los controladores de hardware y el sistema operativo para evitar problemas de compatibilidad.</p>
                        
                        <style>
                            .slidercontain{
                                display: flex;
                                align-items: center;
                                justify-content: center;
                            }

                            .slider{
                                width: 80%;
                                margin: 1rem;
                            }

                            .imgslidr{
                                background: url('images/software_antiguo_Windows-10.jpg') no-repeat center center/cover;
                                width: 100%;
                                height: 45vh;
                                margin: auto;
                            }
                            
                            .imgslidruno{
                                background: url('images/the-best-free-software-of-2020_7358.1200.webp') no-repeat center center/cover;
                                background-position: bottom;
                                width: 100%;
                                height: 45vh;
                                margin: auto;
                            }

                            .imgslidrdos{
                                background: url('images/compatible.jpg') no-repeat center center/cover;
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
                        
                        <p style="margin: auto;"><b>Sistema operativo:</b></p>
                        <p>Debes asegurarte de que el software sea compatible con la versión de Windows que estás utilizando. Por ejemplo, algunas aplicaciones pueden estar diseñadas específicamente para Windows 7, 8, 10 o una versión posterior, y es importante usar una versión del software que sea compatible con tu sistema operativo.</p>
                        <p style="margin: auto;"><b>Arquitectura del hardware:</b></p>
                        <p>La mayoría de las PC con Windows utilizan arquitectura x86 o x64, por lo que es importante que el software esté diseñado para una de estas arquitecturas. Asegúrate de que el software que deseas instalar sea compatible con la arquitectura de tu CPU.</p>
                        <p style="margin: auto;"><b>Controladores de hardware:</b></p>
                        <p>Los controladores son software especializado que permite que el hardware funcione correctamente en Windows. Asegúrate de que los controladores de tus dispositivos de hardware estén actualizados y sean compatibles con tu versión de Windows. Puedes obtener controladores actualizados desde el sitio web del fabricante del hardware.</p>
                        <p style="margin: auto;"><b>Requisitos de hardware:</b></p>
                        <p>Verifica que tu hardware cumpla con los requisitos mínimos del sistema para el software que deseas instalar. Los requisitos pueden incluir la cantidad de RAM, la velocidad de la CPU, la tarjeta gráfica, el espacio en disco y otros componentes específicos.</p>
                        <p style="margin: auto;"><b>Virtualización:</b></p>
                        <p>Si deseas ejecutar software diseñado para un sistema operativo diferente dentro de Windows, puedes utilizar software de virtualización, como VMware o VirtualBox, para crear una máquina virtual que ejecute ese sistema operativo. Esto permite ejecutar software no nativo en Windows.</p>
                        <p style="margin: auto;"><b>Compatibilidad de aplicaciones:</b></p>
                        <p>Algunas aplicaciones más antiguas o de terceros pueden no ser completamente compatibles con todas las versiones de Windows. En estos casos, es posible que necesites utilizar modos de compatibilidad o soluciones de virtualización para ejecutarlas.</p>
                        <p style="margin: auto;"><b>Actualizaciones de Windows:</b></p>
                        <p>Asegúrate de que tu sistema Windows esté actualizado con las últimas actualizaciones y parches de seguridad. Esto puede mejorar la compatibilidad y solucionar problemas de software y hardware.</p>
                        <p style="margin: auto;"><b>Pruebas y solución de problemas:</b></p>
                        <p>Si experimentas problemas de compatibilidad, puedes intentar ejecutar el software en modo de compatibilidad o buscar soluciones en línea. A veces, puede ser necesario ponerse en contacto con el soporte técnico del software o del hardware para obtener asistencia adicional.</p></p>
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
                    <div class="col-1" style="display:flex;align-items:center;justify-content:center;"><a href="/seguridadwindows"><div class="anterior"></div></a></div>
                    <div class="col-10 foot">
                        <p>Universidad Autónoma de Nuevo León, Facultad de Ingenieria Mecanica y Electrica, Equipo #3 SISPO, 2023</p>
                    </div>
                    <div class="col-1" style="display:flex;align-items:center;justify-content:center;"><a href="/desarrollos"><div class="siguiente"></div></a></div>
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